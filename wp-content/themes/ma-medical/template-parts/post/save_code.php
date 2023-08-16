<?php global $theme_uri;
include_once('search.php'); ?>
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
                        <?php
                        $tax = isset($_GET['tag']) ? $_GET['tag'] : '';
                        $key = isset($_GET['s']) ? $_GET['s'] : '';
                        if(($tax == '') && ($key == '')) {
                            echo do_shortcode('[result_doctor_list]'); 
                        } else {
                            $args_tax = array(
                                'post_type'      => 'doctor',
                                'posts_per_page' => -1,
                                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                                'post_status'    => 'publish',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'specialized-field',
                                        'field'    => 'slug', 
                                        'terms'    => $tax,
                                        'operator' => 'IN'    
                                    ),
                                ),
                            );
                            $args_key = array(
                                'post_type'      => 'doctor',
                                'posts_per_page' => -1,
                                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                                'post_status'    => 'publish',
                                'meta_query'     => array(
                                    'relation' => 'OR', 
                                    array(
                                        'key'     => 'numerical_order',
                                        'value'   => $key,
                                        'compare' => 'LIKE'
                                    ),
                                    array(
                                        'key'     => 'organization',
                                        'value'   => $key,
                                        'compare' => 'LIKE',
                                    ),
                                    array(
                                        'key'     => 'qualifications_awards',
                                        'value'   => $key,
                                        'compare' => 'LIKE'
                                    ),
                                    array(
                                        'key'     => 'self-introduce',
                                        'value'   => $key,
                                        'compare' => 'LIKE',
                                    ),
                                ),
                            );

                            $args_key ? $query = new WP_Query($args_key) : $query = new WP_Query($args_tax);

                            if ($query->have_posts()) {
                                $redirect_url = home_url('/result');
                            } else {
                                $redirect_url = home_url('/no-result');
                            }
                            
                            echo '<script>window.location.href = "' . $redirect_url . '";</script>';
                            exit;
                            ?>
                        <div class="pagingNav hira">
                            <ul class="pagi_nav_list">
                                <?php
                                // Lấy số trang hiện tại
                                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                // Lấy số trang tối đa
                                $max_pages = $query->max_num_pages;
                                // Hiển thị thẻ li trang đầu tiên
                                if ($paged > 1) {
                                    echo '<li class="p-control"><a href="' . get_pagenum_link(1) . '">表紙></li>';
                                }
                                // Hiển thị thẻ li trang trước
                                if ($paged > 1) {
                                    echo '<li class="p-control prev"><a href="' . get_pagenum_link($paged - 1) . '">前</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    <?php } ?>    
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