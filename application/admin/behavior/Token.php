<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 18-5-23
 * Time: 下午2:21
 */
namespace app\admin\behavior;

class Token
{
    public function run(&$params)
    {
        echo $params;
    }

    /**
     * 系统行为扩展：表单令牌生成
     */

    // 默认配置
    protected $config = [
        'token_on'    => false,
        'token_name'  => '__hash__',
        'token_type'  => 'md5',
        'token_reset' => true,
    ];

    /**
     * 类架构函数
     * Token constructor.
     */
    public function __construct()
    {
        if (\think\Config::has('token')) {
            $this->config = array_merge($this->config, config('token'));
        }
    }

    /**
     * 方法注入到request中
     * @param $request
     */
    public function module_init(&$request)
    {
        // 检测当前对象中是否有hook方法
        if (!method_exists($request, 'hook')) {
            $request = request();
        }
        // 通过hook方法注入动态方法
        $request::hook('checkToken', function(Request $req, $data = []){
            $params = [];
            if(!empty($data) && is_array($data)){
                $params['data'] = $data;
            }
            $result = \think\Hook::exec(__CLASS__, 'check', $params);
            if(false === $result){
                return false;
            }

            return true;
        });
    }

    /**
     * view_filter行为入口
     * @param $content
     */
    public function view_filter(&$content)
    {
        if ($this->config['token_on']) {
            list($tokenName, $tokenKey, $tokenValue) = $this->getToken();
            $input_token    = '<input type="hidden" name="' . $tokenName . '" value="' . $tokenKey . '_' . $tokenValue . '" />';
            $meta_token     = '<meta name="' . $tokenName . '" content="' . $tokenKey . '_' . $tokenValue . '" />';
            $ajaxSetup      = <<<str
<script type="text/javascript">
    window.console=window.console||(function(){var a={};a.log=a.warn=a.debug=a.info=a.time=a.dir=a.profile=a.clear=a.exception=a.trace=a.assert=function(b){};return a})();
    $(function(){
        var a=$("meta[name={$tokenName}]");
        $.par2json=function(e,c){if(typeof e!="string"){return{}}var h={},g=e.indexOf("&")!=-1?e.split("&"):e,i=decodeURIComponent,b,f;$.each(g,function(d,j){if(j.indexOf("=")!=-1){j=j.split("=");b=i(j[0]);f=i(j[1])}else{b=i(j);f=""}h[b]=c||!h[b]?f:[].concat(h[b]).concat(f)});return h};
        $.ajaxSetup({timeout:5000,success:function(b){},error:function(d,b,c){console.error('send AJAX request to "'+this.url+'" is error['+d.status+"]："+c)},complete:function(c,b){a.attr("content",c.getResponseHeader('{$tokenName}'))},beforeSend:function(d){if(''!='{$tokenName}'){var c=a.attr("content");var b=$.par2json(this.data);if(typeof b['{$tokenName}']!="string"){this.data+="&"+'{$tokenName}'+"="+c}}},})
    });
</script>
str;
            if (strpos($content, '{__TOKEN__}')) {
                // 指定表单令牌隐藏域位置
                $content = str_replace('{__TOKEN__}', $input_token, $content);
            } elseif (preg_match('/<\/form(\s*)>/is', $content, $match) && false === strpos($content, $input_token)) {
                // 智能生成表单令牌隐藏域
                $content = str_replace($match[0], $input_token . $match[0], $content);
            }
            $content = str_ireplace('</head>', $meta_token . PHP_EOL . $ajaxSetup . PHP_EOL . '</head>', $content);
        } else {
            $content = str_replace('{__TOKEN__}', '', $content);
        }
    }

    /**
     * app_end行为入口
     * @param $response
     */
    public function app_end(&$response)
    {
        if ($this->config['token_on']) {
            list($tokenName, $tokenKey, $tokenValue) = $this->getToken();
            //ajax需要获得这个header并替换页面中meta中的token值
            if(request()->isAjax() && $this->config['token_reset']) {
                // 如果header方法存在则调用
                if (method_exists($response, 'header')) {
                    $response->header([$tokenName => $tokenKey . '_' . $tokenValue]);
                }
            }
        }
    }

    /**
     * 获得token
     * @return array
     */
    private function getToken()
    {
        $tokenName = $this->config['token_name'];
        $tokenType = $this->config['token_type'];
        if (!isset($_SESSION[$tokenName])) {
            $_SESSION[$tokenName] = [];
        }
        // 标识当前页面唯一性
        $tokenKey = md5($_SERVER['REQUEST_URI']);
        if (isset($_SESSION[$tokenName][$tokenKey])) {
            // 相同页面不重复生成session
            $tokenValue = $_SESSION[$tokenName][$tokenKey];
        } else {
            $tokenValue                      = is_callable($tokenType) ? $tokenType(microtime(true)) : md5(microtime(true));
            $_SESSION[$tokenName][$tokenKey] = $tokenValue;
        }

        return [$tokenName, $tokenKey, $tokenValue];
    }

    /**
     * 验证表单令牌（需要配置令牌生成行为）
     * @param array $params
     * @access protected
     * @return bool
     */
    public function check($params = [])
    {
        extract($params);
        if ($this->config['token_on']) {
            isset($rule)    || $rule    = $this->config['token_name'];              // 验证规则
            isset($data)    || $data    = empty($data) ? input('post.', []) : $data;// 数据

            // 令牌数据无效
            if (!isset($data[$rule]) || !isset($_SESSION[$rule])) {
                return false;
            }
            // 令牌验证
            list($key, $value) = explode('_', $data[$rule]);
            if (isset($_SESSION[$rule][$key]) && $value && $_SESSION[$rule][$key] === $value) {
                // 防止重复提交
                unset($_SESSION[$rule][$key]); // 验证完成销毁session

                return true;
            }
            // 开启TOKEN重置
            if($this->config['token_reset'])
                unset($_SESSION[$rule][$key]);

            return false;
        }

        return true;
    }

}