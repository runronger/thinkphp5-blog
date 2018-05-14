//dynamic panel styling and positioning
var panelSlideSpeed = 800, //panel sliding speed in milliseconds
	panelEasing = 'easeOutExpo',
	panelMoveTo = 200; //set the panel width

$('.setup_panel').show();	

$('.setup_panel').css('left',-panelMoveTo).css('width',panelMoveTo);
$('.setup_ico').css('left',panelMoveTo);

$('.setup_ico').toggle(function(){
	$('.setup_panel').animate({
		left: 0
	},panelSlideSpeed,panelEasing)
},function(){
	$('.setup_panel').animate({
		left: -panelMoveTo
	},panelSlideSpeed,panelEasing)
})

// style change function
var link = $('link[data-style="myStylez"]');
console.log(link);

// resume last chosen style
var stylesheet = localStorage.getItem('stylesheet');
link.attr('href','css/' + stylesheet + '.css');

// if no style been selected 
if( stylesheet == null | stylesheet == 'null'){
	$('body').prepend('<div class="tint"><p> << Choose desired style in setup panel </p> </div>');
	$('.tint').css({
		'position':'fixed',
		'background-color':'rgba(0,0,0,0.75)',
		'top' : '15%',
		'left' : '55px',
		'margin' : '0',
		'padding' : '10px 20px',
		'color' : 'white',
		'z-index':'2'

	});
	$('body').prepend('<div class="fade1"></div>');
	$('.fade1').css({
		'position':'fixed',
		'background-color':'rgba(0,0,0,0.65)',
		'width':'100%',
		'height':'100%',
		'z-index':'1'
	});
	$('body .container').css({
		opacity: '0.5',
		position: 'relative',
		top: '-320px'
	});

	$('.setup_ico').on('click',function(){
		$('.fade1').fadeOut( panelSlideSpeed , panelEasing );
		$('.tint').animate({
			left: panelMoveTo + 55
		}, panelSlideSpeed , panelEasing).delay(200).fadeOut('slow');

		$('body .container').animate({
			opacity: 1,
			top: 0

		}, panelSlideSpeed , panelEasing)
	});

}


// switch styles
$('.styleChange p').on('click',function(){
  var $this = $(this),
      stylesheet = $this.data('style');

  console.log(stylesheet)

  link.attr('href', 'css/' + stylesheet + '.css');
  localStorage.setItem('stylesheet',stylesheet);
  
})
