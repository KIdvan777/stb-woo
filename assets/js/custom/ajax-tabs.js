jQuery(function($){
    $('.top_hits_2_header_list').click(function(e) {
        var printCatName = e.target.innerText;


        var data = {
            name: printCatName,
            action: 'tabs-ajax',
            nonce: stb_ajax_tabs_script.nonce
        };

        $.ajax({
            url: stb_ajax_tabs_script.url,
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function(xhr){
                var resultDiv = $('.top_hits_2_items');
                resultDiv.html('<div class="spinner-loader"><img src="//localhost:3000/wp-content/themes/stb/assets/img/25.gif"></div>');
            },
            success: function(data){
                var resultDiv = $('.top_hits_2_items');
                resultDiv.html('');
                resultDiv.html(data.out);

            }
        });

    });
});
