<?php global $theme_uri; ?>
<?php

?>
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
        <!-- .formSearch -->
        <div class="formResult">
            <div class="inner">
                <?php
                $searchTax = isset($_GET['tax']) ? $_GET['tax'] : '';
                $searchKey = isset($_GET['s']) ? $_GET['s'] : '';
                if ($searchTax || $searchKey) {
                    $args = array(
                        'post_type'      => 'doctor',
                        'posts_per_page' => POSTS_PER_PAGE,
                        'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                        'post_status'    => 'publish',
                        'order'          => 'ASC',
                    );
                }
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
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'organization',
                            'value'   => $searchKey,
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'qualifications_awards',
                            'value'   => $searchKey,
                            'compare' => 'LIKE',
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
                if ($search_query->have_posts() && $found_posts > 0) : ?>
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
                    <?php while ($search_query->have_posts()) : $search_query->the_post(); ?>
                        <div class="listResult">
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
                                    $field_key = 'group_64cdeba6637a2'; 
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
                        </div>
                    <?php endwhile; ?>
                    <?php echo custom_pagination($search_query); ?>
                <?php else : ?> 
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
                <?php endif; ?>
            </div>
            <div class="boxBook">
                <h3 class="titleBook">医師の詳細なプロフィールは<br>医師への相談・面談予約<br class="sp">お申込み時に<br class="sp">ご確認いただけます。
                </h3>
                <p class="btnBook"><a href="#" class="hover">医師への相談・<br class="sp">面談予約をする</a></p>
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