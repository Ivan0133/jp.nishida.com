<?php 
/**
* Template: Common News
*/      
?>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/banner-recruit.png" alt="">
                <div class="breadcrumb">採用情報ホーム / 新卒採用</div>
            </figure>
            <div class="banner-title">
                RECRUITEMENT
                <div class="sub-title">新卒採用</div>
            </div>
        </section>
        <section class="information">
            <div class="content">
                <div class="info__sign">INFORMATION</div>
                <div class="info__title">インフォメーション</div>
                <div class="info__content">                    
                <?php 
                if($the_query->have_posts()){
                    while($the_query->have_posts()){
                        $the_query->the_post();
                ?>
                    <div class="info__content__item">
                        <div class="info__content__item__date"><?php the_modified_time('Y.m.d'); ?></div>
                        <div class="info__content__item__detail">【<?php echo get_the_category()[0]->name; ?>】<?php the_title();?></div>        
                    </div>
                <?php
                    }
                }
                ?>                 
                </div>
            </div>
        </section>
        <section class="internship">
            <div class="inter__header">
                <figure class="inter__header__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/internship.png" alt="">
                </figure>
                <div class="inter__header__text">
                    <div class="inter__header__text__main">INTERNSHIP</div>
                    <div class="inter__header__text__sub">インターンシップ </div>
                </div>
            </div>
            <div class="inter__content">
                <div class="inter__content__title">
                    新卒採用者向け <br>
                    インターン・イベントを開催予定。
                </div>
                <div class="inter__content__detail">
                    建設などのモノづくりは、何十人もの人たちと一緒に一つのゴールを目指す仕事です。自分の考えをしっかりと持ちながらも物事を柔軟に考えられる方や、新しい事に意欲的にチャレンジできる方であれば、仲間と一緒にきっと大きく成長できます。技術的なことは入社後でも十分身に付きますし、資格取得のための費用負担などスキルアップのためのサポート体制もしっかりと整っていますので、安心してチャレンジしてください。誠実に責任を持って取り組めば、どんな仕事でも必ず面白さを発見でき「やりがい」へと繋がります。私たちと「共に働く」喜びを感じてみませんか？
                </div>
            </div>
            <div class="inter__imgflow">
                <figure class="inter__imgflow__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/img-bar-1.png" alt="">
                </figure>
                <figure class="inter__imgflow__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/img-bar-2.png" alt="">
                </figure>
                <figure class="inter__imgflow__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/img-bar-3.png" alt="">
                </figure>
                <figure class="inter__imgflow__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/img-bar-4.png" alt="">
                </figure>
                <figure class="inter__imgflow__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/img-bar-5.png" alt="">
                </figure>
            </div>
        </section>
        <section class="education">
            <div class="edu__header">
                <figure class="edu__header__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/nurtring.png" alt="">
                </figure>
                <div class="edu__header__text">
                    <div class="edu__header__text__main">NURTRING</div>
                    <div class="edu__header__text__sub">人材育成</div>
                </div>
            </div>
            <div class="container">
                <div class="edu__content">
                    <div class="edu__content__title text-left m-edu__title-1">
                        <div class="edu__content__title__main">成長への支援は惜しみません。</div>
                        <div class="edu__content__title__sub">資格取得への報奨金など、社員個々人の力を伸ばしていくための制度を整えています。</div>
                    </div>
                    <div class="edu__content__list">
                        <div class="edu__content__list__item">
                            <div class="item__badge">
                                <figure class="item__badge__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge/edit.png" alt="">
                                </figure>
                                <span class="item__badge__name">新人研修</span>
                            </div>
                            <div class="item__main">
                                <span class="item__main__number">6</span>
                                <span class="item__main__text">ヶ月</span>
                            </div>
                        </div>
                        <div class="edu__content__list__item">
                            <div class="item__badge">
                                <figure class="item__badge__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge/rewards.png" alt="">
                                </figure>
                                <span class="item__badge__name">資格取得報奨金</span>
                            </div>
                            <div class="item__main">
                                <span class="item__main__text">最大</span>
                                <span class="item__main__number">20</span>
                                <span class="item__main__text">万円</span>
                            </div>
                        </div>
                        <div class="edu__content__list__item">
                            <div class="item__badge">
                                <figure class="item__badge__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge/people.png" alt="">
                                </figure>
                                <span class="item__badge__name">OJT制度</span>
                            </div>
                            <div class="item__main">
                                <div class="item__main__text">あり</div>
                            </div>
                            <div class="item__comment">
                                研修後もOJTを行い、実務を通じて学びを支援します。皆さんに近い立場からのサポートで、業務だけでなく会社に対する不安も解消できます。
                            </div>
                        </div>
                        <div class="edu__content__list__item">
                            <div class="item__badge">
                                <figure class="item__badge__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge/message.png" alt="">
                                </figure>
                                <span class="item__badge__name">キャリアコンサルティング制度</span>
                            </div>
                            <div class="item__main">
                                <div class="item__main__text">あり</div>
                            </div>
                            <div class="item__comment">
                                1年に1度、上司と面談を実施。これまでのキャリアを振り返り、将来どうなりたいか、その実現に向けてどう進めていくかを一緒に考えます。
                            </div>
                        </div>
                    </div>
                    <div class="edu__content__title text-center m-edu__title-2">
                        <div class="edu__content__title__main">プライベートの充実を推奨。</div>
                        <div class="edu__content__title__sub">社員一人ひとりが心地よく働くための制度と、それを実行する社風が根付いています。</div>
                    </div>
                    <div class="edu__content__list">
                        <div class="edu__content__list__item">
                            <div class="item__badge">
                                <figure class="item__badge__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge/time.png" alt="">
                                </figure>
                                <span class="item__badge__name">残業時間／月</span>
                            </div>
                            <div class="item__main">
                                <span class="item__main__number">13</span>
                                <span class="item__main__text">時間</span>
                            </div>
                        </div>
                        <div class="edu__content__list__item">
                            <div class="item__badge">
                                <figure class="item__badge__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge/music.png" alt="">
                                </figure>
                                <span class="item__badge__name">有給休暇取得率</span>
                            </div>
                            <div class="item__main">
                                <span class="item__main__number">79</span>
                                <span class="item__main__text">%</span>
                            </div>
                        </div>
                        <div class="edu__content__list__item">
                            <div class="item__badge">
                                <figure class="item__badge__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge/people.png" alt="">
                                </figure>
                                <span class="item__badge__name">特別連続休暇</span>
                            </div>
                            <div class="item__main">
                                <div class="item__main__text">年間</div>
                                <div class="item__main__number">5</div>
                                <div class="item__main__text">日</div>
                            </div>
                        </div>
                        <div class="edu__content__list__item">
                            <div class="item__badge">
                                <figure class="item__badge__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge/heart.png" alt="">
                                </figure>
                                <span class="item__badge__name">ボランティア休暇</span>
                            </div>
                            <div class="item__main">
                                <div class="item__main__text">年間</div>
                                <div class="item__main__number">5</div>
                                <div class="item__main__text">日</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="vision">
            <div class="vision__header">
                <figure class="vision__header__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/vision.png" alt="">
                </figure>
                <div class="vision__header__text">
                    <div class="vision__header__text__main">VISION</div>
                    <div class="vision__header__text__sub">求める人物像 </div>
                </div>
            </div>
            <div class="container">
                <div class="vision__content">
                    <div class="vision__content__item">
                        <figure class="item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/girl-1.png" alt="">
                        </figure>
                        <div class="item__main">
                            <div class="item__main__title">やり抜く力と謙虚さを兼ね備えた人が成長できる</div>
                            <div class="item__main__detail">
                                建設業は、成熟期を迎えた今の日本経済では飛躍的な拡大は難しい状況ですが、人々の生活を良くしたり、地域の防災や災害復旧活動など、なくてはならないものです。選ばれ続けるためには技術力や製品の品質を高める必要があると考えます。そのためには社員一人ひとりの成長が必要不可欠です。西田興産では、自分の考えをしっかりと持ちながらも、物事を柔軟に考えられる、やり抜く力と謙虚さをバランスよく持つことを意識する人が成長できると考えています。建設などのものづくりは何十人もの人たちと一つのゴールを目指すものです。技術的なことは入社後でも十分身に付きます。資格取得のための費用負担など技術向上のためのバックアップ体制も用意しています。また、勉強やサークルなど何でもいいので、学生時代に頑張ったこと、やりとげたことがある人は、その経験が生かさせることでしょう。
                            </div>
                        </div>
                    </div>
                    <div class="vision__content__item">
                        <figure class="item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/girl-2.png" alt="">
                        </figure>
                        <div class="item__main">
                            <div class="item__main__title">やり抜く力と謙虚さを兼ね備えた人が成長できる</div>
                            <div class="item__main__detail">
                                建設業は、成熟期を迎えた今の日本経済では飛躍的な拡大は難しい状況ですが、人々の生活を良くしたり、地域の防災や災害復旧活動など、なくてはならないものです。選ばれ続けるためには技術力や製品の品質を高める必要があると考えます。そのためには社員一人ひとりの成長が必要不可欠です。西田興産では、自分の考えをしっかりと持ちながらも、物事を柔軟に考えられる、やり抜く力と謙虚さをバランスよく持つことを意識する人が成長できると考えています。建設などのものづくりは何十人もの人たちと一つのゴールを目指すものです。技術的なことは入社後でも十分身に付きます。資格取得のための費用負担など技術向上のためのバックアップ体制も用意しています。また、勉強やサークルなど何でもいいので、学生時代に頑張ったこと、やりとげたことがある人は、その経験が生かさせることでしょう。
                            </div>
                        </div>
                    </div>
                    <div class="vision__content__item">
                        <figure class="item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/girl-3.png" alt="">
                        </figure>
                        <div class="item__main">
                            <div class="item__main__title">やり抜く力と謙虚さを兼ね備えた人が成長できる</div>
                            <div class="item__main__detail">
                                建設業は、成熟期を迎えた今の日本経済では飛躍的な拡大は難しい状況ですが、人々の生活を良くしたり、地域の防災や災害復旧活動など、なくてはならないものです。選ばれ続けるためには技術力や製品の品質を高める必要があると考えます。そのためには社員一人ひとりの成長が必要不可欠です。西田興産では、自分の考えをしっかりと持ちながらも、物事を柔軟に考えられる、やり抜く力と謙虚さをバランスよく持つことを意識する人が成長できると考えています。建設などのものづくりは何十人もの人たちと一つのゴールを目指すものです。技術的なことは入社後でも十分身に付きます。資格取得のための費用負担など技術向上のためのバックアップ体制も用意しています。また、勉強やサークルなど何でもいいので、学生時代に頑張ったこと、やりとげたことがある人は、その経験が生かさせることでしょう。
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