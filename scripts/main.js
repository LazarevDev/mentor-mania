// AOS для анимаций

// AOS.init();

// якоря

$('a[href^="#"]').click(function(){
  let anchor = $(this).attr('href');  
  $('html, body').animate({           
  scrollTop:  $(anchor).offset().top - 120  
  }, 2000);                    
});

// При прокручивании добавляем цвет для header

var scrolled;
window.onscroll = function() {
    scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if(scrolled > 70){
        $(".header").css({"background": "#fff", "transition": "0.4s"})
    }
    if(70 > scrolled){
        $(".header").css({"background": "none", "transition": "0.4s"})         
    }

}