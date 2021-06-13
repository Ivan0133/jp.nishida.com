<?php 
/**
* Template Name: selection
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection/banner.png" alt="">
                <div class="breadcrumb">採用情報ホーム / 選考フロー</div>
            </figure>
            <div class="banner-title">
                SELECTION PROGRESS
                <div class="sub-title">選考フロー</div>
            </div>
        </section>
        <section class="selection">
            <div class="tabs">
                <a href="javascript:;" class="tab__item active" id="tab1">
                    新卒採用
                </a>
                <a href="javascript:;" class="tab__item" id="tab2">
                    中途採用
                </a>
            </div>
            <div class="tab-panels">
                <div class="tab-panel__item active container" id="tab-panel1">
                    <div class="timelines">
                        <div class="dots"></div>
                        <div class="timeline__main">
                            <div class="timeline__item yellow">
                                <div class="item__header">
                                    <div class="item__header__text1 text-en">STEP1</div>
                                    <div class="item__header__title">
                                        マイナビ登録
                                        <div class="underline"></div>
                                    </div>
                                    <div class="item__header__text2 text-en">STEP1</div>
                                </div>
                                <div class="item__body">
                                    <div class="item__body__text text-center">まだマイナビへ登録していない方はこちらから登録ください。</div>
                                    <div class="timeline__link">
                                        <a href="#" class="btn-white">マイナビ新規登録ページへ</a>
                                    </div>
                                    <div class="item__body__text text-center">既に登録されている方はSTEP2をご確認ください。</div>
                                </div>
                            </div>
                            <div class="timeline__item green">
                                <div class="item__header">
                                    <div class="item__header__text1 text-en">STEP2</div>
                                    <div class="item__header__title">
                                        エントリー
                                        <div class="underline"></div>
                                    </div>
                                    <div class="item__header__text2 text-en">STEP2</div>
                                </div>
                                <div class="item__body">
                                    <div class="item__body__text text-center">まだマイナビへ登録していない方はこちらから登録ください。</div>
                                    <div class="timeline__link">
                                        <a href="#" class="btn-white">マイナビ新規登録ページへ</a>
                                    </div>
                                    <div class="item__body__text text-center">マイページをお持ちの方はSTEP3をご確認ください。</div>
                                </div>
                            </div>
                            <div class="timeline__item blue">
                                <div class="item__header">
                                    <div class="item__header__text1 text-en">STEP3</div>
                                    <div class="item__header__title">
                                        会社説明会
                                        <div class="underline"></div>
                                    </div>
                                    <div class="item__header__text2 text-en">STEP3</div>
                                </div>
                                <div class="item__body">
                                    <div class="item__body__text text-center">以下２種類の中から選択してください。</div>
                                    <div class="item__body__step">
                                        <div class="step__title">1.WEB会社説明会</div>
                                        <div class="step__body">
                                            <div class="step__body__text">
                                                遠隔でつなげる説明会です。<br>
                                                遠方にお住まいの方、来社が難しい方はもちろん、ご興味のある方は、ぜひお気軽にご予約をお願いいたします。<br>
                                                視聴完了後、エントリーご希望の方はバナーより選考予約をお願い致します。<br>
                                            </div>
                                            <div class="step__body__btn">
                                                <a href="#">WEB会社説明会予約ページ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item__body__step">
                                        <div class="step__title">2.見学説明会に参加</div>
                                        <div class="step__body">
                                            <div class="step__body__text">
                                                社員の仕事風景・会社の雰囲気を感じ取っていただける見学説明会です。
                                            </div>
                                            <div class="step__body__btn">
                                                <a href="#">見学説明会予約ページへ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item purple">
                                <div class="item__header">
                                    <div class="item__header__text1 text-en">STEP4</div>
                                    <div class="item__header__title">
                                        会社見学
                                        <div class="underline"></div>
                                    </div>
                                    <p class="item__header__subtitle">ーWEB会社説明会を選んだ方のうち希望者のみ</p>
                                    <div class="item__header__text2 text-en">STEP4</div>
                                </div>
                                <div class="item__body">
                                    <div class="item__body__text text-center">WEB会社説明会を選んだ方のうち希望者は会社見学が可能です。</div>
                                </div>
                            </div>
                            <div class="timeline__item blue">
                                <div class="item__header">
                                    <div class="item__header__text1 text-en">STEP5</div>
                                    <div class="item__header__title">
                                        面接
                                        <div class="underline"></div>
                                    </div>
                                    <div class="item__header__text2 text-en">STEP5</div>
                                </div>
                                <div class="item__body">
                                    <div class="item__body__text text-center">
                                        対面面接またはWEB面接を行います。<br>
                                        新型コロナ感染症の状況によっては、WEB面接のみに限定させて頂く可能性があります。
                                    </div>
                                    <div class="item__body__step">
                                        <div class="step__title">1.WEB面接</div>
                                        <div class="step__body">
                                            <div class="step__body__text">
                                                WEB面接には、「使用ソフト名称」を使用します。PCでもスマホでもご利用頂けますなどの説明テキスト。
                                            </div>
                                            <div class="step__body__wizard">
                                                <div class="wizard__item wizard-1">
                                                    <div class="arrow"></div>
                                                    <span>準備</span>
                                                </div>
                                                <div class="wizard__item wizard-2">
                                                    <div class="arrow"></div>
                                                    <span>ルームIDや接続先URLのご連絡など</span>
                                                </div>
                                                <div class="wizard__item wizard-3">
                                                    <span>面接当日</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item__body__step">
                                        <div class="step__title">2.対面面接</div>
                                        <div class="step__body">
                                            <div class="step__body__text">
                                                面接当日の朝に検温をお願いします。37.5℃以上の熱や倦怠感など、体に不調がある方は面接を延期しますので0893-25-0211（採用窓口担当：矢野）までお電話ください。西田興産は安心・安全に働ける職場環境を目指しています。面接日を延期することによって、選考結果に影響はありませんのでご安心ください。
                                                また、過去２週間以内に海外や他県を訪れた方は事前にご連絡ください。坊門先に沿った面接日をご連絡するかWEB面接に変更させて頂きます。
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item red">
                                <div class="item__header">
                                    <div class="item__header__text1 text-en">STEP6</div>
                                    <div class="item__header__title">
                                        内定
                                        <div class="underline"></div>
                                    </div>
                                    <div class="item__header__text2 text-en">STEP6</div>
                                </div>
                                <div class="item__body">
                                    <div class="item__body__text text-center">面接から〇営業日以内に、〇〇でご連絡します。</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-panel__item container" id="tab-panel2">
                    <div class="timelines">
                        <div class="dots"></div>
                        <div class="timeline__main">
                            <div class="timeline__item red">
                                <div class="item__header">
                                    <div class="item__header__text1 text-en">STEP1</div>
                                    <div class="item__header__title">
                                        マイナビ登録
                                        <div class="underline"></div>
                                    </div>
                                    <div class="item__header__text2 text-en">STEP1</div>
                                </div>
                                <div class="item__body">
                                    <div class="item__body__text text-center">まだマイナビへ登録していない方はこちらから登録ください。</div>
                                    <div class="timeline__link">
                                        <a href="#" class="btn-white">マイナビ新規登録ページへ</a>
                                    </div>
                                    <div class="item__body__text text-center">既に登録されている方はSTEP2をご確認ください。</div>
                                </div>
                            </div>
                            <div class="timeline__item blue">
                                <div class="item__header">
                                    <div class="item__header__text1 text-en">STEP2</div>
                                    <div class="item__header__title">
                                        エントリー
                                        <div class="underline"></div>
                                    </div>
                                    <div class="item__header__text2 text-en">STEP2</div>
                                </div>
                                <div class="item__body">
                                    <div class="item__body__text text-center">まだマイナビへ登録していない方はこちらから登録ください。</div>
                                    <div class="timeline__link">
                                        <a href="#" class="btn-white">マイナビ新規登録ページへ</a>
                                    </div>
                                    <div class="item__body__text text-center">マイページをお持ちの方はSTEP3をご確認ください。</div>
                                </div>
                            </div>
                            <div class="timeline__item green">
                                <div class="item__header">
                                    <div class="item__header__text1 text-en">STEP3</div>
                                    <div class="item__header__title">
                                        会社見学
                                        <div class="underline"></div>
                                    </div>
                                    <p class="item__header__subtitle">ーWEB会社説明会を選んだ方のうち希望者のみ</p>
                                    <div class="item__header__text2 text-en">STEP3</div>
                                </div>
                                <div class="item__body">
                                    <div class="item__body__text text-center">WEB会社説明会を選んだ方のうち希望者は会社見学が可能です。</div>
                                </div>
                            </div>
                        </div>
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