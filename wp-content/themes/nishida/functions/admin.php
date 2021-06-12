<?php

add_action('init', 'nsd_register_custom_posts');
function nsd_register_custom_posts(){
    register_post_type( 'news',
                        array(
                            'labels' => array(
                                'name' => __('News'),
                                'singular_name' => __('news')
                            ),
                            'rewrite' => array(
                                'slug' => 'news',
                                'with_front' => false,
                            ),
                            'taxonomies' => 'category',
                            'hierarchical' => false,
                            'has_archive' => true,
                            'menu_position' => 5,
                            'public' => true,
                            "supports" => ['title', 'editor', 'thumbnail'],
                        )
    );
    register_taxonomy(  'category', 
                        'news', 
                        array(
                            'hierarchical' => true                                       
                        ) 
    );
}