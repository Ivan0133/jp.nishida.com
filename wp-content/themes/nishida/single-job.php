<?php 
/**
* News Template: 
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
        <section class="information-detail">
            <div class="detail__date"><?php the_modified_time('Y.m.d'); ?></div>
            <div class="detail__title">【<?php echo get_the_category()[0]->name; ?>】<?php the_title();?></div>
            <div class="detail__social-share">
                <span>Share</span>
                <div class="line"></div>
                <a class="detail__social-item" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information-detail/facebook.png" alt="">
                </a>
                <a class="detail__social-item" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information-detail/twitter.png" alt="">
                </a>
                <a class="detail__social-item" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information-detail/line.png" alt="">
                </a>
            </div>
            <div class="detail__img">
                <figure>
                    <?php echo get_the_post_thumbnail(); ?>
                </figure>
            </div>
            <p class="detail__comment">
                <?php the_content(); ?>
            </p>
            <a href="#" class="detail__return">
                ← 一覧へ戻る
            </a>
            <div class="detail__social-share">
                <span>Share</span>
                <div class="line"></div>
                <a class="detail__social-item" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information-detail/facebook.png" alt="">
                </a>
                <a class="detail__social-item" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information-detail/twitter.png" alt="">
                </a>
                <a class="detail__social-item" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information-detail/line.png" alt="">
                </a>
            </div>
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
<?php
get_footer();
?>