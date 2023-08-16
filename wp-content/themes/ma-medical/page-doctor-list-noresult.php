<?php session_start();  ?>
<?php 
/* 
Template Name: Page Doctor List NoResult
*/
?>
<?php global $theme_uri; ?>
<?php get_header(); ?>
<?php 
?>
    <!-- #header -->
    <?php get_template_part('template-parts/page/page','breadcrum') ?>
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
                    <h3 class="areaTitleLead">登録いただいている医師一覧</h3>
                    <p class="areaText">MAメディカル相談サービスでセカンドオピニオンを受けられる<br>登録医師をご紹介いたします。</p>
                </div>
            </div>
            <!-- .doctorIntro -->
            <?php

            // Kiểm tra xem truy vấn tìm kiếm có tồn tại trong session hay không
            if (isset($_SESSION['tax']) || isset($_SESSION['s'])) {
                // Lấy truy vấn tìm kiếm từ session
                $searchTax = $_SESSION['tax'];
                $searchKey = $_SESSION['s'];
                // Xóa truy vấn tìm kiếm trong session sau khi sử dụng (tuỳ chọn)
                unset($_SESSION['tax']);
                unset($_SESSION['key']);
            } else {
                echo "Không có truy vấn tìm kiếm trong session.";
            }
            ?>
            <div class="formSearch noResult">
                <div class="inner">
                    <div class="formSearchBox">
                        <h3 class="formTitle">検索結果</h3>
                        <h4 class="textLg">該当する医師は見つかりませんでした</h4>
                        <p class="textSm">条件を変更して再度検索<br class="sp">してください</p>
                        <ul class="areaSpecialized">
                            <li><span class="label">専門分野:　</span><br class="sp"><span class="value"><?= $searchTax; ?></span></li>
                            <li><span class="label">対応可能な疾患:　</span><br class="sp"><span class="value"><?= $searchKey; ?></span></li>
                        </ul>
                        <p class="btnSpecialized"><a href="<?php echo esc_url(home_url('/doctor-list')); ?>" class="hover">違う条件で再検索する</a></p>
                    </div>
                </div>
            </div>
            <!-- .formSearch -->
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

</html>