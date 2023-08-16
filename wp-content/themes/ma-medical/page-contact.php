<?php
/* 
Template Name: Page Contact
*/
?>
<?php global $theme_uri; ?>
<?php get_header(); ?>
<!-- #header -->
<?php get_template_part('template-parts/page/page', 'breadcrum') ?>
<!-- #breadCrumb -->
<div id="main">
    <div class="inner">
        <h2 class="pageTitle">医師への相談・面談予約・その他お問合せはこちら</h2>
    </div>
</div>
<!-- #main -->
<div id="content">
    <div class="areaContact pageBG">
        <div class="contactIntro">
            <div class="inner">
                <p class="contactIntroText">医師への相談、MAオンライン・セカンドオピニオン面談予約、その他お問合せは<br class="pc">下記のフォームから承ります。<br>電話でのお問合せは、サービスの利用に関してのみとさせていただきます。</p>
                <div class="boxBlue">
                    <h3 class="bBTitle">お電話でのお問合せは</h3>
                    <p class="bBSub">お客様専用電話窓口</p>
                    <div class="boxPhone">
                        <p class="phone acumin"><a href="tel:0120934844">0120-934-844</a></p>
                        <p class="address">電話受付時間　平日9:00-17:00</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- .contactIntro -->
        <div class="contactForm">
            <div class="inner">
                <h2 class="contactTitle"><span>医師への相談・面談予約・<br class="sp">その他お問合せフォーム</span></h2>
                <div class="form">
                        <?php the_content(); ?>
                </div>
                <!-- .form -->
                <div class="contactThank">
                    <p class="contactText">ありがとうございます。 メールを送信いたしました。<br><br>通常、お問い合わせ後5営業日以内に <br class="sp">ご返答・ご対応させていただいております。<br> 1週間以上お返事が届かない場合は、<br class="sp">連絡先を誤って入力された可能性がございます。<br>その際は大変お手数ですが、再度ご連絡くださいますようお願い申し上げます。</p>
                </div>
                <!-- .contactThank -->
            </div>
        </div>
        <!-- .contactForm -->
    </div>
</div>
<!-- #content -->
<?php get_template_part('template-parts/content/areaContact'); ?>
<!-- #areaContact -->
<?php get_template_part('template-parts/content/fixedSection'); ?>
<!-- #fixedSection -->
<?php get_footer(); ?>
<!-- #footer -->
</body>

</html>