<?php 
/**
* Template Name: senior
*/
global $wpdb, $table_prefix, $post;
$the_query = new WP_Query(
            array(
                'post_type' => 'senior',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'senior-category',
                        'field' => 'name',
                        'terms' => 'New',
                    ),
                ),               
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/senior/banner.png" alt="">
                <div class="breadcrumb">採用情報ホーム / 先輩の声</div>
            </figure>
            <div class="banner-title">
                INTERVIEW
                <div class="sub-title">先輩の声</div>
            </div>
        </section>
        <section class="interview">
            <div class="tabs container">
                <a href="javascript:;" class="tab__item active" id="tab1">
                    新卒入社
                </a>
                <a href="javascript:;" class="tab__item" id="tab2">
                    中途入社
                </a>
            </div>
            <div class="tab-panels">
                <figure class="tab-panel__sign">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/senior/recruitment.png" alt="">
                </figure>
                <div class="tab-panel__item active container" id="tab-panel1">
                    <p class="tab-panel__item__tag text-en">NEW GRADUATE</p>
                    <p class="tab-panel__item__name">新卒入社</p>
                    <p class="tab-panel__item__comment">地元高校や松山の建築関連専門学校から入社した方など</p>
                    <div class="tab-panel__item__list">
                    <?php 
                        if ($the_query->have_posts()){
                            while( $the_query->have_posts() ){
                                $the_query->the_post();                                                        
                        ?>
                        <div class="list__item">
                            <p class="item__badge">
                                新 卒<br>
                                採 用
                            </p>
                            <a href="<?php echo get_post_permalink();?>">
                                <figure class="item__img">
                                    <?php echo get_the_post_thumbnail(); ?>
                                </figure>
                                <p class="item__name"><?php echo get_post_meta($post->ID, 'name', true);?></p>
                                <p class="item__job"><?php the_title();?></p>
                            </a>
                        </div>
                        <?php 
                            }}
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="tab-panel__item container" id="tab-panel2">
                    <p class="tab-panel__item__tag text-en">MID CAREER</p>
                    <p class="tab-panel__item__name">中途入社</p>
                    <p class="tab-panel__item__comment">地元高校や松山の建築関連専門学校から入社した方など</p>
                    <div class="tab-panel__item__list">
                        <?php
                            $the_query = new WP_Query(
                                array(
                                    'post_type' => 'senior',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 6,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'senior-category',
                                            'field' => 'name',
                                            'terms' => 'Mid',
                                        ),
                                    ),               
                                )
                            );
                            if ($the_query->have_posts()){
                                while( $the_query->have_posts() ){
                                    $the_query->the_post();

                        ?>

                        <div class="list__item">
                            <p class="item__badge">
                                中 途<br>
                                採 用
                            </p>
                            <a href="<?php echo get_post_permalink();?>" target="blank">
                                <figure class="item__img">
                                    <?php echo get_the_post_thumbnail(); ?>
                                </figure>
                                <p class="item__name"><?php echo get_post_meta($post->ID, 'name', true);?></p>
                                <p class="item__job"><?php the_title();?></p>
                            </a>
                        </div>
                        <?php
                            }}
                            wp_reset_postdata();
                        ?>
                    </div>
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