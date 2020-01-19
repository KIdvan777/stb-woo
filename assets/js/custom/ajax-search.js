jQuery(function($){
    $('#search_input').on('keyup', function(){
        var search = $('#search_input').val();
        if(search.length < 4){
            return false;
        };
        var data = {
            s: search,
            action: 'search-ajax',
            nonce: stb_ajax_search_form.nonce
        };
        $.ajax({
            url: stb_ajax_search_form.url,
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function(xhr){

            },
            success: function(data){
                var resultDiv = $('.search_form_overlay__results');
                resultDiv.html(data.out);
                console.log(data.out);
            }
        });
        // console.log(data);
    });
});
