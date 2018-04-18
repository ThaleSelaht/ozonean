(function($) {
        $(document).ready(function() {
        "use strict";
        $(".blog-carousel").slick({
            dots: false,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                      }
                }
            ]
        });
        $(".depoimentos-carousel").slick({
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                      }
                }
            ]
        });
        $("section.blog-carousel a").hover(
            function(){ 
                $(".caption", this).toggleClass('active-caption');
                $(".caption h4", this).toggleClass('active-h4'); 
            }
        );
        $("#banner-principal.inner-page a.blog-box").hover(
            function () {
                $("span:nth-of-type(2)", this).toggleClass('active-caption');
        });
        
        });
        })(jQuery);
