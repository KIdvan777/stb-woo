jQuery(function($){
    $(document).ready(function(){
      $('.product_menu, .product_menu_2').slick({
         autoplay: false,
         slidesPerRow: 3,
         slidesToScroll: 1,
         speed: 600
      });
    });

    $(document).ready(function(){
      $('.top_hits').slick({
         autoplay: true,
         slidesPerRow: 6,
         slidesToScroll: 1,
         speed: 300
      });
    });
});
