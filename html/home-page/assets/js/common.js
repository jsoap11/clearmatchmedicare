$(function(){
// fixed-scroll-top
    $(window).scroll(function(){
      if($(window).scrollTop() >= 600){
        $('.scroll-top').css('display','block')
      }else{
        $('.scroll-top').css('display','none')
      }
    });   


// call-scroll-top
    $(document).ready(function(){
      $(".scroll-top").click(function(){
        $("html,body").animate({
          scrollTop: 0
        });
        return false
      });
    });
 

// Preloading animation 
    $(window).on("load", function() {
      preloaderFadeOutTime = 500;
      function hidePreloader() {
          var preloader = $('.spinner-wrapper');
          preloader.fadeOut(preloaderFadeOutTime);
      }
      hidePreloader();
    });



// navbar-fixed    
    $(window).scroll(function(){
      if($(window).scrollTop() >= 600){
        $('.nav1').addClass('fixed-heade')
      }else{
        $('.nav1').removeClass('fixed-heade')
      }
    });
    
    
  //page-scrollreveal
    window.sr = ScrollReveal();
    sr.reveal('.top-reveal', {
      origin: 'top',
      duration: 1200,
      distance: '15px',
      delay: 200,
      easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
    });
    sr.reveal('.bottom-reveal', {
      origin: 'bottom',
      duration: 1100,
      distance: '15px',
      delay: 200,
      easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
    });
    sr.reveal('.left-reveal', {
      scale: 0,
      origin: 'left',
      duration: 2000,
      delay: 200,
      distance: '15px'
    });
    sr.reveal('.right-reveal', {
      origin: 'right',
      duration: 1600,
      distance: '15px',
      delay: 200,
      easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
    });
});