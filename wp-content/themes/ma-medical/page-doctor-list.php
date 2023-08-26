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
                <div class="listResult">
                    <?php
                    $args = array(
                        'post_type' => 'doctor',
                        'posts_per_page' => POSTS_PER_PAGE,
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Số trang hiện tại
                        'orderby' => 'date',  // Sắp xếp theo ngày tạo bài viết
                        'order' => 'ASC',
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) : ?>
                        <?php
                        while ($loop->have_posts()) :
                            $loop->the_post();
                        ?>
                            <div class="resultItem">
                                <div class="resultLeft">
                                    <p class="resultNum">
                                        <span class="numLabel">医師No.</span>
                                        <span class="numNumber"><?php the_field('numerical_order'); ?></span>
                                    </p>
                                    <?php
                                    $gender = get_field('image_doctor'); 
                                    $image_src = '';
                                    if ($gender === 'Male') {
                                        $image_src = get_template_directory_uri() . '/assets/images/doctor/ava-men.jpg';; // Đường dẫn ảnh nam
                                    } elseif ($gender === 'Female') {
                                        $image_src = get_template_directory_uri() . '/assets/images/doctor/ava-women.jpg';
                                    }

                                    if (!empty($image_src)) {
                                    ?>
                                        <p class="resultAvatar">
                                            <a href="<?= get_the_permalink(get_the_ID()); ?>">
                                                <img src="<?php echo $image_src; ?>" alt="">
                                            </a>
                                        </p>
                                    <?php } ?>
                                    <?php
                                    $display_value = get_field('doctor_name');
                                    ?>
                                    <p class="resultName"><?= $display_value;
                                         the_field('name'); ?></p>
                                </div>
                                <div class="resultRight">
                                    <div class="resultField">
                                        <h3 class="rFTitle">専門分野</h3>
                                        <ul class="rFList">
                                            <?php if (have_rows('specialized_field')) : ?>
                                                <?php while (have_rows('specialized_field')) : the_row(); ?>
                                                    <li><?php the_sub_field('specialty'); ?></li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="resultField">
                                        <h3 class="rFTitle">資格・受賞歴</h3>
                                        <p class="rFText"><?php the_field('qualifications_awards'); ?></p>
                                    </div>
                                    <div class="resultField">
                                        <h3 class="rFTitle">経験年数・経歴など</h3>
                                        <p class="rFText"><?php the_field('years_of_experience'); ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        echo custom_pagination($loop);
                    endif;
                    // Khôi phục dữ liệu bài viết gốc
                    wp_reset_postdata();
                    ?>
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