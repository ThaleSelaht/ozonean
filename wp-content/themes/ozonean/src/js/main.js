var $jq = jQuery.noConflict();
$jq(".blog-carousel").slick({
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
$jq(".depoimentos-carousel").slick({
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
$jq("section.blog-carousel a").hover(
    function(){ 
        $jq(".caption", this).toggleClass('active-caption');
        $jq(".caption h4", this).toggleClass('active-h4'); 

});
$jq("#banner-principal.inner-page a.blog-box").hover(
    function () {
        $jq("span:nth-of-type(2)", this).toggleClass('active-caption');
});
