// (function ($) {
//     // jQuery no conflict mode
//     $(".search-header .icon-search").click(function (event) {
//         event.preventDefault();
//         $(".site-header .search-field").show().focus();
//     });
//     $(".search-header .search-field").blur(function () {
//         $(".site-header .search-field").hide();
//     });
//  })(jQuery);


(function($) {
    $('.search-submit').on('click', function(event) {
      event.preventDefault();
      if (!$('.search-field').hasClass('search-animation')) {
        $('.search-field').addClass('search-animation');
        $('.search-field').focus();
      } else {
        $('.search-field').removeClass('search-animation');
      }
    });
    $('.search-field').on('blur', function() {
      $('.search-field').removeClass('search-animation');
    });
  })(jQuery);