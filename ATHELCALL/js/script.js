/*Start smoth scroll */

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
/*End smoth scroll */
$('.js-1').waypoint(function(direction) {
    $('.js-1').addClass('animated fadeIn');
},{
    offset:'75%'
});

$('.js-2').waypoint(function(direction) {
    $('.js-2').addClass('animated fadeInRightBig');
},{
    offset:'75%'
});
$('.js-3').waypoint(function(direction) {
    $('.js-3').addClass('animated fadeInLeftBig');
},{
    offset:'75%'
});

$('.js-4').waypoint(function(direction) {
    $('.js-4').addClass('animated fadeInDown');
},{
    offset:'65%'
});
$('.js-5').waypoint(function(direction) {
    $('.js-5').addClass('animated fadeInDown');
},{
    offset:'65%'
});
$('.js-6').waypoint(function(direction) {
    $('.js-6').addClass('animated fadeInRightBig');
},{
    offset:'65%'
});
$('.js-7').waypoint(function(direction) {
    $('.js-7').addClass('animated fadeInLeftBig');
},{
    offset:'65%'
});

$('.js-8').waypoint(function(direction) {
    $('.js-8').addClass('animated flash');
},{
    offset:'100%'
});


// scroll top 
var scrollButton=$("#scroll-up");

$(window).scroll(function()
{
    if($(this).scrollTop()>=500)
    {
        scrollButton.show();
    }
    else
    {
        scrollButton.hide();
    }
       
});

scrollButton.click(function(){
        $("html,body").animate({scrollTop:0},600);
    });

// End scroll top 




