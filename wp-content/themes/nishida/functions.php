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
                ?>
                <div class="list__item">
                    <a href="<?php echo get_post_permalink();?>" target="blank">
                        <?php echo get_the_post_thumbnail(); ?>
                        <p class="list__item__text">【<?php echo get_the_category()[0]->name; ?>】<?php the_title();?></p>
                        <p class="list__item__date"><?php the_modified_time('Y.m.d'); ?></p>
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
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


