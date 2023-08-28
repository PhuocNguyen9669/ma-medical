<?php
$searchKey = isset($_GET['key']) ? $_GET['key'] : '';
$searchTax = isset($_GET['tax']) ? $_GET['tax'] : '';
$search_query = search_doctors($searchKey, $searchTax);
$found_posts = $search_query->found_posts;
?>
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
<div class="listResult">
    <?php while ($search_query->have_posts()) : $search_query->the_post(); ?>
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
    <?php endwhile; ?>
</div>