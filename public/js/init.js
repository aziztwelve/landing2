// Goals
$(document).ready(function() {

  //Ð¯Ð½Ð´ÐµÐºÑ.ÐœÐµÑ‚Ñ€Ð¸ÐºÐ°
    $('form#order-form').submit(function() {
      yaCounter45247434.reachGoal('order');
      return true;
    });

	$('form#order-form-compl').submit(function() {
      yaCounter45247434.reachGoal('order-compl');
      return true;
    });
});

$(function(){
    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    });
    //mobile menu
    $('.menu-btn, .top-menu a').click(function() {
      $('.mobile-menu').toggleClass('active');
    });
    //scroll actived menu
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 20) {
            $(".top-menu").addClass("scroll");
        } else {
            $(".top-menu").removeClass("scroll");
        }
    });
    
    $('.tov-gal').slick({
      infinite: true,
      autoplay: false,
      dots: false,
      arrows: true,
      //adaptiveHeight: true,
      fade: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<span data-role="none" class="slick-prev animate" aria-label="Previous" tabindex="0" role="button"></span>',
      nextArrow: '<span data-role="none" class="slick-next animate" aria-label="Next" tabindex="0" role="button"></span>'
    });
    $('.rev-cont').slick({
      infinite: false,
      autoplay: false,
      dots: true,
      arrows: false,
      fade: false,
      speed: 300,
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 959,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 659,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    //send Ajax
    $(".m1-form").submit(function() { //Change
      var th = $(this);
      $.ajax({
        type: "POST",
        url: "php/mail.php", //Change
        data: th.serialize()
      }).done(function() {
	  	window.location.href = "http://jeep1941.ru/success";
      });
      return false;
    });
});
