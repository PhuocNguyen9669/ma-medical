<?php session_start();
global $theme_uri;
$searchTax = isset($_SESSION['tax']) ? $_SESSION['tax'] : '';
$searchKey = isset($_SESSION['s']) ? $_SESSION['s'] : '';
//found_posts = isset($_SESSION['found_posts']) ? $_SESSION['found_posts'] : 0; ?>
<?php
/* 
Template Name: Page Doctor List Result
*/
?>

<?php
        $args = array(
            'post_type'      => 'doctor',
            'posts_per_page' => 5,
            'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
            'post_status'    => 'publish',
            'order'            => 'ASC',
        );
        if ($searchTax) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'specialized-field',
                    'field'    => 'slug',
                    'terms'    => $searchTax,

                ),
            );
        }
        if ($searchKey) {
            $args['meta_query'] = array(
                'relation' => 'OR',
                array(
                    'key'     => 'numerical_order',
                    'value'   => $searchKey,
                    'compare' => 'LIKE'
                ),
                array(
                    'key'     => 'organization',
                    'value'   => $searchKey,
                    'compare' => 'LIKE',
                ),
                array(
                    'key'     => 'qualifications_awards',
                    'value'   => $searchKey,
                    'compare' => 'LIKE'
                ),
                array(
                    'key'     => 'self-introduce',
                    'value'   => $searchKey,
                    'compare' => 'LIKE',
                ),
            );
        }
        $search_query = new WP_Query($args);
        $found_posts = $search_query->found_posts;
        // The Loop
        ?>
<!-- #header -->
<?php get_header(); ?>
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
                <h3 class="areaTitleLead">登録いただいている医師一覧</h3>
                <p class="areaText">MAメディカル相談サービスでセカンドオピニオンを受けられる<br>登録医師をご紹介いたします。</p>
            </div>
        </div>
        <!-- .doctorIntro -->

        <div class="formSearch result">
            <div class="inner">
                <div class="formSearchBox">
                    <h3 class="formTitle">検索結果</h3>
                    <h4 class="textLg"><?= $found_posts; ?> 名 見つかりました</h4>
                    <ul class="areaSpecialized">
                        <li><span class="label">専門分野:　</span><br class="sp"><span class="value"><?= $searchTax; ?></span></li>
                        <li><span class="label">対応可能な疾患:　</span><br class="sp"><span class="value"><?= $searchKey; ?></span></li>
                    </ul>
                    <p class="btnSpecialized"><a href="<?php echo esc_url(home_url('/doctor-list')); ?>" class="hover">違う条件で再検索する</a></p>
                </div>
            </div>
        </div>

        <div class="formResult">
            <div class="inner">
                <div class="listResult">
                    <?php if ($search_query->have_posts()) :
                        while ($search_query->have_posts()) : $search_query->the_post(); ?>
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
                    <?php
                        endwhile;
                    endif;
                    unset($_SESSION['tax']);
                    unset($_SESSION['key']);
                    unset($_SESSION['post_count']);
                    // Reset Post Data
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="pagingNav hira">
                    <ul class="pagi_nav_list">
                        <?php
                        // Lấy số trang hiện tại
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        // Lấy số trang tối đa
                        $max_pages = $search_query->max_num_pages;
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
            </div>
        </div>
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