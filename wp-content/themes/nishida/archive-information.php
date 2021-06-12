<?php 
/**
* Template Name: information
*/
global $wpdb, $table_prefix, $post;
$the_query = new WP_Query(
            array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => 3,                
            )
        );        
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information/banner.png" alt="">
                <div class="breadcrumb">採用情報ホーム / 新着情報</div>
            </figure>
            <div class="banner-title">
                INFORMATION
                <div class="sub-title">新着情報</div>
            </div>
        </section>
        <section class="information-list container">
            <div class="list news_w">
                <?php 
                if ($the_query->have_posts()){
                    while( $the_query->have_posts() ){
                        $the_query->the_post();                        
                        //$category = get_the_terms( $post->ID, 'category' );                        
                ?>
                <div class="list__item">
                    <a href="<?php echo get_post_permalink();?>" target="blank">
                        <?php echo get_the_post_thumbnail(); ?>
                        <p class="list__item__text">【<?php echo get_the_category()[0]->name; ?>】<?php the_title();?></p>
                        <p class="list__item__date"><?php the_modified_time('Y.m.d'); ?></p>
                    </a>
                </div>
                <?php
                }}
                ?>               
            </div>
            <a class="load-more-btn text-en">
                More
                <input type="hidden" class="news_seg_id" value="1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information/plus.png" alt="">
            </a>
        </section>
        <section class="carousel container">
            <div class="logo-background">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/co-logo-blue.png" alt="">
            </div>
            <div class="hero-carousel">
                <div class="carousel-item">
                    <div class="badge">
                        新 卒<br>
                        採 用
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person-1.png" alt="">
                    <div class="person-name">山田　太郎</div>
                    <div class="course-and-date">部署名テキスト 入社年</div>
                </div>
                <div class="carousel-item">
                    <div class="badge">
                        中 途<br>
                        採 用
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person-2.png" alt="">
                    <div class="person-name">山田　太郎</div>
                    <div class="course-and-date">部署名テキスト 入社年</div>
                </div>
                <div class="carousel-item">
                    <div class="badge">
                        新 卒<br>
                        採 用
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person-3.png" alt="">
                    <div class="person-name">山田　太郎</div>
                    <div class="course-and-date">部署名テキスト 入社年</div>
                </div>
                <div class="carousel-item">
                    <div class="badge">
                        新 卒<br>
                        採 用
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person-1.png" alt="">
                    <div class="person-name">山田　太郎</div>
                    <div class="course-and-date">部署名テキスト 入社年</div>
                </div>
                <div class="carousel-item">
                    <div class="badge">
                        中 途<br>
                        採 用
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person-2.png" alt="">
                    <div class="person-name">山田　太郎</div>
                    <div class="course-and-date">部署名テキスト 入社年</div>
                </div>
                <div class="carousel-item">
                    <div class="badge">
                        新 卒<br>
                        採 用
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person-3.png" alt="">
                    <div class="person-name">山田　太郎</div>
                    <div class="course-and-date">部署名テキスト 入社年</div>
                </div>
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