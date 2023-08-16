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
                    <div class="listResult">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="listResult">
                                    <div class="resultItem">
                                        <div class="resultLeft">
                                            <p class="resultNum">
                                                <span class="numLabel">医師No.</span>
                                                <span class="numNumber"><?php the_field('numerical_order'); ?></span>
                                            </p>
                                            <?php
                                            $gender = get_field('image_doctor'); // Lấy giá trị của trường ACF Radio Button
                                            $image_src = ''; // Biến lưu trữ đường dẫn ảnh
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
                                            <?php } else {
                                                // Hiển thị một hình ảnh mặc định nếu không có đường dẫn ảnh tương ứng
                                            ?>
                                            <?php } ?>

                                            <?php
                                            $field_key = 'group_64cdeba6637a2'; // Thay thế field_1234567890 bằng key của trường Select trong ACF của bạn
                                            $field_value = get_field('doctor_name'); // Thay thế your_field_name bằng tên của trường Select trong ACF của bạn
                                            $display_value = '';
                                            switch ($field_value) {
                                                case 'S':
                                                    $display_value = 'S';
                                                    break;
                                                case 'T':
                                                    $display_value = 'T';
                                                    break;
                                                case 'Y':
                                                    $display_value = 'Y';
                                                    break;
                                                    // Thêm các trường hợp ánh xạ khác tại đây
                                                default:
                                                    $display_value = $field_value; // Giữ giá trị gốc nếu không có ánh xạ tương ứng
                                            }
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
                                </div>
                                <!-- HTML LOOP -->
                            <?php endwhile; ?>
                            <!-- HTML PAGI -->
                            <?php global $wp_query; ?>
                            <div class="pagingNav hira">
                                <ul class="pagi_nav_list">
                                    <?php
                                    // Lấy số trang hiện tại
                                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                    // Lấy số trang tối đa
                                    $max_pages = $wp_query->max_num_pages;
                                    // Hiển thị thẻ li trang đầu tiên
                                    if ($paged > 1) {
                                        echo '<li class="p-control"><a href="' . get_pagenum_link(1) . '">表紙></li>';
                                    }
                                    // Hiển thị thẻ li trang trước
                                    if ($paged > 1) {
                                        echo '<li class="p-control prev"><a href="' . get_pagenum_link($paged - 1) . '">前</a></li>';
                                    }
                                    // Hiển thị các nút phân trang
                                    for ($i = 1; $i <= $max_pages; $i++) {
                                        if ($i == $paged) {
                                            echo '<li class="active"><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
                                        } else {
                                            echo '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
                                        }
                                    }
                                    // Hiển thị thẻ li trang kế tiếp
                                    if ($paged < $max_pages) {
                                        echo '<li class="p-control prev"><a href="' . get_pagenum_link($paged + 1) . '">次へ</a></li>';
                                    }
                                    // Hiển thị thẻ li trang cuối cùng
                                    if ($paged < $max_pages) {
                                        echo '<li class="p-control next"><a href="<' . get_pagenum_link($max_pages) . '">最後</a></li>';
                                    } ?>
                                </ul>
                            </div>
                        <?php else : ?>
                            <?php echo 'không' ?>;
                            <!-- HTML NO POST -->
                        <?php endif; ?>
                    </div>
                    <div class="boxBook">
                        <h3 class="titleBook">医師の詳細なプロフィールは<br>医師への相談・面談予約<br class="sp">お申込み時に<br class="sp">ご確認いただけます。
                        </h3>
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

    </html>