<?php 
/**
* Senior Template: 
*/
get_header();
?>
<?php wpb_set_post_views(get_the_ID()); ?>
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
        <section class="voice-banner">
            <figure class="banner__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/banner.png" alt="">
            </figure>
            <figure class="banner__text">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/txt.png" alt="">
            </figure>
            <div class="banner__intro">
                <p class="banner__intro__job"><?php the_title();?></p>
                <p class="banner__intro__name"><?php echo get_post_meta($post->ID, 'name', true);?></p>
                <p class="banner__intro__name-en text-en"><?php echo get_post_meta($post->ID, 'en_name', true);?></p>
            </div>
        </section>
        <?php the_content();?>
        <section class="question2 bg-texture message">
            <div class="container">
                <div class="question2-container">                    
                    <div class="question__message bg-white">
                        <figure class="message__img">
                            <?php echo get_the_post_thumbnail(); ?>
                        </figure>
                        <div class="message__content">
                            <div class="message__title-en text-en">MESSAGE</div>
                            <div class="message__title-jp">応募者に向けて</div>
                            <div class="message__detail">
                                <?php echo get_post_meta($post->ID, 'message', true);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="carousel container">
            <div class="logo-background">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/co-logo-blue.png" alt="">
            </div>
            <div class="hero-carousel">
                <?php echo do_shortcode('[bottom_carousol]')?>
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
<?php
get_footer();
?>