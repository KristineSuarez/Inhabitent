
let $searchBool=false;

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

    $(document).on('scroll',function(){
        console.log($(document).scrollTop());
        
            if($(document).scrollTop()>=950){
                if(!$searchBool){
                    $('.site-header').css({
                        position:'fixed'
                    });
                    $searchBool=true;
                }
               
            }
            else{
                $('.site-header').css({
                    position:'absolute'

                });
                $searchBool=false;
            }
        
    });
  })(jQuery);