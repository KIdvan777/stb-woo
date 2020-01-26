jQuery(function($){
    //$(document).ready(function(){
      $('.product_menu, .product_menu_2').slick({
         autoplay: false,
         slidesPerRow: 3,
         slidesToScroll: 1,
         speed: 600,
         prevArrow:'<button type="button" class="slick-prev"><i class="fas fa-angle-double-right"></i></button>',
         nextArrow:'<button type="button" class="slick-next"><i class="fas fa-angle-double-left"></i></button>'
      });
    //});

    //$(document).ready(function(){
      $('.top_hits').slick({
         autoplay: false,
         slidesPerRow: 6,
         slidesToScroll: 1,
         speed: 300
      });
    //});
});
