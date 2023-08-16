<?php
/* 
Template Name: Page Doctor List
*/
?>
<?php global $theme_uri; ?>
<?php get_header(); ?>
<!-- #header -->
<?php get_template_part('template-parts/page/page', 'breadcrum') ?>
<!-- #breadCrumb -->
<div id="main">
    <div class="inner">
        <h2 class="pageTitle">医師一覧</h2>
    </div>
</div>
<!-- #main -->
<div id="content">
    <div class="areaListDoctor pageBG">
        <div class="doctorIntro">
            <div class="inner">
                <h3 class="areaTitleLead">医師一覧</h3>
                <p class="txtDoc">MAメディカル相談サービス</p>
                <ul class="listDoc">
                    <li>MAオンライン・セカンドオピニオンサービス（医師とオンライン面談）</li>
                    <li>MA医師との相談サービス（医師とメール相談）</li>
                </ul>
                <p class="txtDoc">を受けられる医師をご紹介いたします。</p>
            </div>
        </div>
        <!-- .doctorIntro -->
        <?php get_search_form(); ?>
        <!-- .formSearch -->
        <div class="formResult">
            <div class="inner">
                <div class="inner">
                    <?php echo do_shortcode('[result_doctor_list]'); ?>
                    <div class="boxBook">
                        <h3 class="titleBook">医師の詳細なプロフィールは<br>医師への相談・面談予約<br class="sp">お申込み時に<br class="sp">ご確認いただけます。</h3>
                        <p class="btnBook"><a href="#" class="hover">医師への相談・<br class="sp">面談予約をする</a></p>
                    </div>
                </div>
            </div>
            <!-- .formResult -->
        </div>
        <!-- .areaListDoctor -->
    </div>
    <!-- #content -->
    <?php get_template_part('template-parts/content/areaContact'); ?>
    <!-- #areaContact -->
    <?php get_template_part('template-parts/content/fixedSection'); ?>
    <!-- #fixedSection -->
    <?php get_footer(); ?>
    <!-- #footer -->
    </body>
    </body>

    </html>