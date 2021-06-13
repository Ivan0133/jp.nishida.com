<?php 
/**
* Template Name: job
*/
global $wpdb, $table_prefix, $post;      
get_header();?>
    <main>
        <div class="entry-block">
            <a href="javascript:;" class="entry__close">
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="entry__title">
                <div class="entry__title__en">ENTRY</div>
                <div class="entry__title__jp">エントリー</div>
            </div>
            <div class="entry__content">
                <div class="entry__content__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry-1.png" alt="">
                    <div class="entry__content__item__title">新卒採用</div>
                    <div class="entry__content__item__detail">技術的なことは入社後でかまわない。新しい事に意欲的にチャレンジすれば、仲間と一緒にきっと大きく成長できる。
                    </div>
                    <div class="entry__button">
                        <a href="#">ENTRY</a>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entry-mark.png" alt="">
                    </div>
                </div>
                <div class="entry__content__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry-2.png" alt="">
                    <div class="entry__content__item__title">中途採用</div>
                    <div class="entry__content__item__detail">これまでの経験や資格を活かし、仕事も家庭も両立することができる。県内の方だけでなくUIJターンも歓迎。</div>
                    <div class="entry__button">
                        <a href="#">ENTRY</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="social">
            <div class="social__item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook-blue.png" alt="">
                </a>
            </div>
            <div class="social__item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitter-blue.png" alt="">
                </a>
            </div>
            <div class="social__item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/instagram-blue.png" alt="">
                </a>
            </div>
        </div>
        <section class="banner">
            <figure class="background-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/requirement/banner.png" alt="">
                <div class="breadcrumb">採用情報ホーム / 募集要項</div>
            </figure>
            <div class="banner-title">
                REQUIREMENT
                <div class="sub-title">募集要項</div>
            </div>
        </section>




        <section class="job-list container">
            <p class="job__index text-en">JOB LIST</p>
            <?php 
                $taxs = get_terms( array(
                        'taxonomy' => 'job-category',
                        'orderby' => 'term_id',
                        'hide_empty' => false,
                    ) 
                );
                error_log(print_r($taxs, true));
                $num = 0;                
                foreach($taxs as $tax){                    
                    $the_query = new WP_Query(
                        array(
                            'post_type' => 'job',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'job-category',
                                    'field' => 'name',
                                    'terms' => $tax->name,
                                ),
                            ),               
                        )
                    );
                    if($the_query->have_posts()){                        
                        ?>
                        <p class="job__subject"><?php echo $tax->name;?></div></p>
                        <div class="job__group">                           
                        <?php

                        while($the_query->have_posts()){
                            $the_query->the_post();
                            $num++;
                        ?>
                            <div class="job__group__item">
                                <div class="item__contain">
                                    <div class="item__index text-en"><?php echo sprintf('%02d', $num);  echo '.' . get_post_meta($post->ID, 'title', true); ?></div>
                                    <p class="item__title">新卒入社の募集要項を見る</p>
                                    <p class="item__sub__title">(※マイナビページへ移動します)</p>
                                </div>
                            </div>
                            <?php                              
                        }
                        echo '</div>';
                    }
                    wp_reset_postdata();                    
                }                
            ?>
        </section>
        <section class="carousel container">
            <div class="logo-background">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/co-logo-blue.png" alt="">
            </div>
            <div class="hero-carousel">
                <?php do_shortcode('[bottom_carousol]')?>
            </div>
        </section>
        <section class="entry container">
            <div class="entry__btn-group">
                <a href="#" class="entry__btn-group__item">募集要項</a>
                <a href="#" class="entry__btn-group__item text-en">QA</a>
                <a href="#" class="entry__btn-group__item">選考フロー</a>
            </div>
            <div class="entry__blue">
                <div class="entry__button">
                    <a href="#" class="text-en">ENTRY</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entry-mark.png" alt="">
                </div>
            </div>
        </section>
    </main>
<?php get_footer();?>