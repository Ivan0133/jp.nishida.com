<?php 
/**
* Template Name: home
*/
get_header();?>
<?php 
    global $wpdb, $table_prefix, $post;
    $the_query = new WP_Query(
                array(
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,                
                )
    );
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
                    <div class="entry__content__item__detail">技術的なことは入社後でかまわない。新しい事に意欲的にチャレンジすれば、仲間と一緒にきっと大きく成長できる。</div>
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
        <div class="background-img">
            <img class="big-screen" src="<?php echo get_template_directory_uri(); ?>/assets/img/background.png" alt="">
            <img class="mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile.png" alt="">
        </div>
        <!-- container -->
        <section class="category top-container">
            <div class="section-content">
                <div class="category-search">
                    <?php 
                    if ($the_query->have_posts()){
                        while( $the_query->have_posts() ){
                            $the_query->the_post(); 
                    ?>
                    <a href="<?php echo get_post_permalink();?>" target="blank">
                        <div class="category-title">
                            <span class="category-date"><?php the_modified_time('Y'); ?></span>
                            <span class="category-text"><?php echo get_the_category()[0]->name; ?></span>
                        </div>                    
                        <div class="news-title"><?php the_title();?></div>        
                    </a>            
                    <?php
                        }}
                    ?>
                    </div>
                <div class="category-btn-group">
                    <input type="hidden" class="news_cnt" value="1">
                    <input type="hidden" class="news_status" value="start">
                    <div class="category-btn">                        
                        <div class="btn-contain news_alter prev start" data-role="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="category-btn">                        
                        <div class="btn-contain news_alter next" data-role="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about top-container">
            <div class="section-content">
                <div class="about-title">
                    西田興産は７０年の歴史を紡ぐ建設関連総合サービス会社。<br>
                    誰か一人の力だけではなく、社員全員の力で築き上げました。<br>
                    その技術力・サービス力をあなたへ受け継ぎたい。
                </div>
                <div class="about-content">
                    私たち西田興産は、戦後間もない1948年、豊かな自然と歴史・文化を誇る肱川流域で創業しました。もともと建設業とそれに欠かせない生コンの製造販売が中心でしたが、時代の変化とともに事業領域を拡大。特に30年程前にスタートしたＰＣ（プレキャスト・コンクリート）事業は、今や当社の屋台骨を担うまでに成長しています。<br>
                    <br>
                    建物の外壁やバルコニー、階段などのコンクリート部分を現場で造るのではなく、あらかじめ工場でパーツとして仕上げて現場で組み立てていくPC工法は、コスト削減や環境への配慮などのメリットから、今では大規模建設に欠かせない工法。四国にいながら大都市圏の駅ビルや大型ホテル、大学病院、庁舎など、大規模なプロジェクトに携わることができるのも大きな特徴です。また、長年培った実績と信頼から大手ゼネコンとの取引や官公庁発注の公共工事も多く、地域のインフラを支える大きなやりがいを持って働くことができます。
                </div>
            </div>
        </section>
        <section class="special-content">
            <div class="top-container">
                <div class="special-content-title">SPECIAL CONTENTS</div>
                <div class="special-content-group">
                    <div class="special-content-item">
                        <div class="img-mark">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special-mark.png" alt="">
                        </div>
                        <div class="special-item-title">
                            <div class="top">プロジェクト</div>
                            <div class="bottom">ストーリー</div>
                        </div>
                        <div class="img-main">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spec-content-1.png" alt="">
                            <a href="#">
                                <div class="special-link-btn">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="special-content-item">
                        <div class="img-mark">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special-mark.png" alt="">
                        </div>
                        <div class="special-item-title">
                            <div class="top">独身寮の</div>
                            <div class="bottom">紹介</div>
                        </div>
                        <div class="img-main">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spec-content-2.png" alt="">
                            <a href="#">
                                <div class="special-link-btn">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="special-content-item">
                        <div class="img-mark">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special-mark.png" alt="">
                        </div>
                        <div class="special-item-title">
                            <div class="top">愛媛で暮らす</div>
                            <div class="bottom">生活マップ</div>
                        </div>
                        <div class="img-main">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spec-content-3.png" alt="">
                            <a href="#">
                                <div class="special-link-btn">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="special-content-item">
                        <div class="img-mark">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special-mark.png" alt="">
                        </div>
                        <div class="special-item-title">
                            <div class="top">求める</div>
                            <div class="bottom">人物像</div>
                        </div>
                        <div class="img-main">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spec-content-4.png" alt="">
                            <a href="#">
                                <div class="special-link-btn">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="special-content-item">
                        <div class="img-mark">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special-mark.png" alt="">
                        </div>
                        <div class="special-item-title">
                            <div class="top">WEB動画</div>
                            <div class="bottom">説明会</div>
                        </div>
                        <div class="img-main">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spec-content-5.png" alt="">
                            <a href="#">
                                <div class="special-link-btn">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="selection-system">
            <div class="top-container">
                <div class="section-content">
                    <div class="system-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection-system.png" alt="">
                    </div>
                    <div class="system-detail">
                        <div class="title-en">SELECTION SYSTEM</div>
                        <div class="title-jp">
                            状況に応じた柔軟な選考体制
                        </div>
                        <div class="detail-content">
                            新型コロナの影響や、他県からのご応募、現在就業中などの理由で応募を迷っていませんか？西田興産では皆さんの状況に応じた柔軟な選考体制を整えています。<br>
                            この他にも何か求職活動に関する悩みがあり応募を迷っていらっしゃる方は遠慮なくご相談ください。<br>
                            あなたの未来を切り開くために、西田興産は全力でサポートします。
                        </div>
                        <a href="#" class="selection-flow">
                            選考フロー
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="recruit">
            <div class="recruit-graduate">
                <figure class="img">
                    <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/graduate.png" alt="">
                </figure>
                <div class="recruit-content">
                    <div class="recruit-content-contain">
                        <div class="title">新卒採用</div>
                        <div class="sub-title">
                            技術的なことは入社後でかまわない。<br>
                            新しい事に意欲的にチャレンジすれば、<br>
                            仲間と一緒にきっと大きく成長できる。
                        </div>
                        <div class="recruit-detail">
                            建設などのモノづくりは、何十人もの人たちと一緒に一つのゴールを目指す仕事です。自分の考えをしっかりと持ちながらも物事を柔軟に考えられる方や、新しい事に意欲的にチャレンジできる方であれば、仲間と一緒にきっと大きく成長できます。技術的なことは入社後でも十分身に付きますし、資格取得のための費用負担などスキルアップのためのサポート体制もしっかりと整っていますので、安心してチャレンジしてください。誠実に責任を持って取り組めば、どんな仕事でも必ず面白さを発見でき「やりがい」へと繋がります。私たちと「共に働く」喜びを感じてみませんか？
                        </div>
                        <div class="recruit-btn-group">
                            <a href="#" class="goto-page">中途採用ページ</a>
                            <div class="sub-btn-group">
                                <a href="#" class="sub-btn recruit-app">募集要項</a>
                                <a href="#" class="sub-btn recruit-qa">QA</a>
                                <a href="#" class="sub-btn recruit-flow">選考フロー</a>
                            </div>
                            <a href="#" class="entry">
                                ENTRY
                                <div class="entry-mark">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entry-mark.png" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recruit-mid">
                <figure class="img">
                    <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/mid.png" alt="">
                </figure>
                <div class="recruit-content">
                    <div class="recruit-content-contain">
                        <div class="title">新卒採用</div>
                        <div class="sub-title">
                            技術的なことは入社後でかまわない。<br>
                            新しい事に意欲的にチャレンジすれば、<br>
                            仲間と一緒にきっと大きく成長できる。
                        </div>
                        <div class="recruit-detail">
                            建設などのモノづくりは、何十人もの人たちと一緒に一つのゴールを目指す仕事です。自分の考えをしっかりと持ちながらも物事を柔軟に考えられる方や、新しい事に意欲的にチャレンジできる方であれば、仲間と一緒にきっと大きく成長できます。技術的なことは入社後でも十分身に付きますし、資格取得のための費用負担などスキルアップのためのサポート体制もしっかりと整っていますので、安心してチャレンジしてください。誠実に責任を持って取り組めば、どんな仕事でも必ず面白さを発見でき「やりがい」へと繋がります。私たちと「共に働く」喜びを感じてみませんか？
                        </div>
                        <div class="recruit-btn-group">
                            <a href="#" class="goto-page">中途採用ページ</a>
                            <div class="sub-btn-group">
                                <a href="#" class="sub-btn recruit-app">募集要項</a>
                                <a href="#" class="sub-btn recruit-qa">QA</a>
                                <a href="#" class="sub-btn recruit-flow">選考フロー</a>
                            </div>
                            <a href="#" class="entry">
                                ENTRY
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="carousel top-container">
            <div class="logo-background">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/co-logo-blue.png" alt="">
            </div>
            <div class="hero-carousel">
                <?php echo do_shortcode('[bottom_carousol]')?>
            </div>
        </section>
    </main>
<?php get_footer();?>