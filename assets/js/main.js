(function($) {

    $(".toggle-password").click(function() {

        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });

})(jQuery);

var carousel = function() {
  $('.swiper-slide').owlCarousel({
    autoplay: true,
    autoHeight: true,
    center: true,
    loop: true,
    items:1,
    margin: 30,
    stagePadding: 0,
    nav: false,
    dots: true,
    // navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
    responsive:{
      0:{
        items: 1
      },
      600:{
        items: 1
      },
      1000:{
        items: 1
      }
    }
  });
  $('.swiper-slide').owlCarousel({
    autoplay: true,
    autoHeight: true,
    center: true,
    loop: true,
    items:1,
    margin: 30,
    stagePadding: 0,
    nav: false,
    dots: true,
    // navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
    responsive:{
      0:{
        items: 1
      },
      600:{
        items: 3
      },
      1000:{
        items: 5
      }
    }
  });
};
carousel();