jQuery(document).ready(function ($) {
    $('.load-more-btn').on('click', function(){
        let news_seg_id = $('.news_seg_id').val();
        let data = {
            "action": "nsd_render_news",
            "news_seg_id": news_seg_id
        };

		let request = jQuery.param(data);
        jQuery.ajax({
            type: 'get',

            url: "http://jp.nishida.com/wp-admin/admin-ajax.php",

            data: request,

            dataType: "json",
        
            success: function(res) {
                console.log('news_ajax');
                console.log(res['next']);
                $('.news_seg_id').val(res['next']);
                $('.news_w').html(res['content']);  
                $('.load-more-btn').addClass(res['end']);

            }
        });
    });
	
})