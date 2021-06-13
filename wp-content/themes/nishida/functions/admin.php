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
                                'with_front' => true,
                            ),                            
                            'hierarchical' => false,
                            'has_archive' => true,
                            'menu_position' => 5,
                            'public' => true,
                            'publicly_queryable' => true,
                            'query_var' => true,                            
							'show_ui' => true,
                            "supports" => ['title', 'editor', 'thumbnail'],
                        )
    );
    register_taxonomy(  'category', 
                        'news', 
                        array(
                            'hierarchical' => true                                       
                        ) 
    );

    //先輩の声, voice of seniors
    register_post_type( 'senior',
                        array(
                            'labels' => array(
                                'name' => __('Seniors'),
                                'singular_name' => __('senior')
                            ),
                            'rewrite' => array(
                                'slug' => 'senior',
                                'with_front' => true,
                            ),                            
                            'hierarchical' => false,
                            'has_archive' => true,
                            'menu_position' => 5,
                            'public' => true,
                            'publicly_queryable' => true,
                            'query_var' => true,                            
                            'show_ui' => true,
                            "supports" => ['title', 'editor', 'thumbnail'],
                        )
    );
    register_taxonomy(  'senior-category', 
                        'senior', 
                        array(
                            'hierarchical' => true                                       
                        ) 
    );
    register_post_type( 'faq',
        array(
            'labels' => array(
                'name' => __('Faqs'),
                'singular_name' => __('faq')
            ),
            'rewrite' => array(
                'slug' => 'faq',
                'with_front' => true,
            ),                            
            'hierarchical' => false,
            'has_archive' => true,
            'menu_position' => 5,
            'public' => true,
            'publicly_queryable' => true,
            'query_var' => true,                            
            'show_ui' => true,
            "supports" => ['title'],
        )
    );
    register_taxonomy(  'faq-category', 
        'faq', 
        array(
            'hierarchical' => true                                       
        ) 
    );
    //post - job
    register_post_type( 'job',
        array(
            'labels' => array(
                'name' => __('Jobs'),
                'singular_name' => __('job')
            ),
            'rewrite' => array(
                'slug' => 'job',
                'with_front' => true,
            ),                            
            'hierarchical' => false,
            'has_archive' => true,
            'menu_position' => 5,
            'public' => true,
            'publicly_queryable' => true,
            'query_var' => true,                            
            'show_ui' => true,
            "supports" => ['title'],
        )
    );
    register_taxonomy(  'job-category', 
        'job', 
        array(
            'hierarchical' => true                                       
        ) 
    );
}