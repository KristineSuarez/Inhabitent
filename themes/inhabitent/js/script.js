
let $searchBool=false;

(function($) {
   
  $(document).on('scroll', onScroll)
  $('.search-submit').on('click', onClick) 
    
    function onClick(event) {
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

    function onScroll(){
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