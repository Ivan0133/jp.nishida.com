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

    $('.news_alter').on('click', function(){
        let news_cnt = $('.news_cnt').val();
        let status = $('.news_status').val();
        let btn_role = $(this).data('role');
        if(btn_role == 'prev'){
            if(status == 'start'){
                return 0;
            }
            else{
                news_cnt -= 2; 
            }
        }
        else if(btn_role == 'next' && status == 'end'){            
            return 0;            
        }
            
        let data = {
            "action": "nsd_alter_news",
            "news_cnt": news_cnt
        };
		let request = jQuery.param(data);
        jQuery.ajax({
            type: 'get',

            url: "http://jp.nishida.com/wp-admin/admin-ajax.php",

            data: request,

            dataType: "json",
        
            success: function(res) {
                console.log('news_alter');
                console.log(res['status']);                
                news_cnt++;                
                $('.news_status').val(res['status'])
                $('.news_cnt').val(news_cnt);
                $('.next').removeClass('start').removeClass('end').addClass(res['status']);
                $('.prev').removeClass('start').removeClass('end').addClass(res['status']);
                $('.category-search').html(res['content']);                  
            }
        });
    });
	
})