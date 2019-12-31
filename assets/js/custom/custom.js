// jQuery('.search_input').hide();

// jQuery( "#search_img" ).click(function() {
//   // jQuery('#search_input').slideToggle();
//   jQuery('.search_input').show();
//   jQuery('#search_img').hide();
//
// });


// jQuery('.burger').click(function(){
//     jQuery('.mobile_menu').css('display', 'block');
//     jQuery('.mobile_menu').css('position', 'absolute');
// });
//
// jQuery('.mobile_menu_burger').click(function(){
//     jQuery('.mobile_menu').css('display', 'none');
// });


jQuery('.burger').click(function(){
    jQuery('.mobile_menu').toggleClass('mobile_menu_is_visible');
});
