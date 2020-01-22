jQuery(function($){
    $(document).ready(function(){
      $('.product_menu, .product_menu_2').slick({
         autoplay: true,
         slidesPerRow: 3,
         slidesToScroll: 1,
         speed: 600
      });
    });

    $(document).ready(function(){
      $('.top_hits_2_items').slick({
         autoplay: true,
         slidesPerRow: 4,
         slidesToScroll: 1,
         speed: 800
      });
    });
});
