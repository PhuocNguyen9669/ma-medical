<?php 
/* 
Template Name: Page Page
*/
?>
<?php global $theme_uri; ?>
<?php get_header(); ?>
    <!-- #header -->
    <?php get_template_part('template-parts/page/page','breadcrum') ?>
    <!-- #breadCrumb -->
    <div id="main">
        <div class="inner">
            <h2 class="pageTitle">会社概要</h2>
        </div>
    </div>
    <!-- #main -->
    <div id="content">
        <div class="area pageBG">
            <div class="inner">
                <h3 class="areaTitleLead">登録いただいている医師一覧</h3>
                <p class="areaText">MAメディカル相談サービスでセカンドオピニオンを受けられる<br>登録医師をご紹介いたします。</p>
                <h3 class="areaTitle acumin">SERVICE</h3>
            </div>
        </div>
        <div style="height: 1934px;"></div>
    </div>
    <!-- #content -->
    <div id="areaContact">
        <div class="inner">
            <h3 class="contactTitle">お問合せ<small>は</small><span>お電話</span><small>または</small><br class="sp"><span>フォーム</span>でお気軽に</h3>
            <div class="boxPhone">
                <p class="boxPhoneHead">お客様専用電話窓口</p>
                <p class="phone acumin"><a href="tel:0120934844">0120-934-844</a></p>
                <p class="address">電話受付時間　平日9:00-17:00</p>
            </div>
            <p class="btnContact"><a href="#" class="hover">医師への相談・面談予約・<br class="sp">その他お問合せ</a></p>
        </div>
    </div>
    <!-- #areaContact -->
    <div id="fixedSection">
        <p class="fixedButton"><a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/common/fixed-button.svg" class="pc" alt=""><img src="<?= $theme_uri; ?>/images/common/fixed-button-sp.svg" class="sp" alt=""></a></p>
        <p class="scrollToTop"><a href="javascript:;" class="hover"><img src="<?= $theme_uri; ?>/images/common/ico-totop.svg" alt=""></a></p>
    </div>
    <!-- #fixedSection -->
    <div id="footer">
        <div class="inner">
            <div class="ftWrapper">
                <div class="ftInfo">
                    <div class="logo"><a href="index.html" class="hover"><img src="<?= $theme_uri; ?>/images/common/logo-footer.svg" alt=""></a></div>
                    <p id="copyright">© Associates Japan Co., Ltd. All Rights Reserved.</p>
                </div>
                <!-- ftInfo -->
                <div class="ftMenu">
                    <ul class="menu">
                        <li><a href="#">TOP</a></li>
                    </ul>
                    <ul class="menu">
                        <li><a href="#">オンラインセカンドオピニオンとは</a></li>
                        <li><a href="#">医師へのメール相談とは</a></li>
                        <li><a href="#">ご利用の流れ</a></li>
                        <li><a href="#">ご利用料金</a></li>
                        <li><a href="#">お客様の声</a></li>
                        <li><a href="#">面談予約・医師へのご相談・お問合せ</a></li>
                    </ul>
                    <ul class="menu">
                        <li><a href="#">医師一覧</a></li>
                        <li><a href="#">よくある質問</a></li>
                        <li><a href="#">運営会社</a></li>
                        <li><a href="#">プライバシーポリシー</a></li>
                        <li><a href="#">利用規約</a></li>
                    </ul>
                </div>
                <!-- ftMenu -->
            </div>
        </div>
    </div>
    <!-- #footer -->
</body>

</html>