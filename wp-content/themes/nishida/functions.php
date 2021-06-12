<?php
require_once('functions/admin.php');

add_theme_support( 'post-thumbnails' ); 

add_action('wp_ajax_nsd_render_news' , 'nsd_render_news');
add_action('wp_ajax_nopriv_nsd_render_news','nsd_render_news');
function nsd_render_news(){
    global $wpdb, $table_prefix, $post;
    if(isset($_GET["news_seg_id"])){
        $seg_id = $_GET["news_seg_id"];  
        $end = ''; 
        $pages = ($seg_id + 1) * 3;     
        $the_query = new WP_Query(
            array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => $pages,                
            )
        );
        $max_pages = $the_query->found_posts ;
        $next_seg_id = $pages < $max_pages ? $seg_id + 1 : $seg_id; 
        if ($the_query->have_posts()){
            ob_start();
            while( $the_query->have_posts() ){
                $the_query->the_post();                        
                $category = get_the_terms( $post->ID, 'category' );                                        
                ?>
                <div class="list__item">
                    <a href="<?php echo $post->guid;?>">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="thumbnail">
                        <p class="list__item__text">【<?php echo $category[0]->name;?>】<?php echo $post->post_title;?></p>
                        <p class="list__item__date"><?php echo get_the_date( ' yy.m.d', $post->ID );?></p>
                    </a>
                </div>
                <?php                       
            }
            $result = ob_get_contents();
            ob_end_clean();            
            if($pages >= $max_pages){
                $notice = '<div class="notice">There are no more posts.</div>'; 
                $end = 'end';
            } 
            $res = array(
                "status" => "OK",
                "next" => $next_seg_id,
                "notice" => $notice,
                "end" => $end,
                "content" => $result
            );
            echo json_encode($res);
            exit();
        }
    }
}


