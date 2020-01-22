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

            },
            success: function(data){
                var resultDiv = $('.top_hits_2_items');
                resultDiv.html('');
                resultDiv.html(data.out);

            }
        });

    });
});
