<?php global $theme_uri; ?>
<?php get_header(); ?>
<!-- #header -->
<?php get_template_part('template-parts/page/page', 'breadcrum') ?>
<!-- #breadCrumb -->
<div id="main">
    <div class="inner">
        <h2 class="mainTitle acumin">Specialist Doctors profile</h2>
    </div>
</div>
<!-- #main -->
<?php if (have_posts()) :
    while (have_posts()) : the_post();  ?>
        <div id="content">
            <div class="areaDetail">
                <div class="inner">
                    <div class="boxDetail">
                        <p class="resultNum">
                            <span class="numLabel">医師No.</span>
                            <span class="numNumber"><?php the_field('numerical_order', get_the_ID()); ?></span>
                        </p>
                        <h3 class="titleDetail"><?php the_field('name', get_the_ID()); ?><span class="small">医師</span></h3>
                        <div class="boxInfor">
                            <p class="imageInfor"><img src="<?= $theme_uri; ?>/images/doctor/detail-photo.jpg" alt=""></p>
                            <div class="detailInfor">
                                <div class="itemInfor">
                                    <h4 class="titleInfor">所属医療機関・役職</h4>
                                    <p class="subInfor sub21"><?php the_field('organization', get_the_ID()); ?></p>
                                </div>
                                <div class="itemInfor">
                                    <h4 class="titleInfor">所在地</h4>
                                    <p class="subInfor"><?php the_field('address', get_the_ID()); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="listInfor">
                            <div class="itemInfor">
                                <h4 class="titleInfor">専門分野</h4>
                                <ul class="rFList">
                                    <?php if (have_rows('specialized_field')) : ?>
                                        <?php while (have_rows('specialized_field')) : the_row(); ?>
                                            <li><?php the_sub_field('specialty', get_the_ID()); ?></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="itemInfor">
                                <h4 class="titleInfor">資格・受賞歴</h4>
                                <p class="subInfor sub16"><?php the_field('qualifications_awards', get_the_ID()); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="boxContent">
                        <div class="itemContent">
                            <h4 class="titleContent">自己紹介</h4>
                            <p class="subContent"><?php the_field('self-introduce', get_the_ID()); ?></p>
                        </div>
                        <div class="itemContent">
                            <h4 class="titleContent">専門分野</h4>
                            <ul class="rFList">
                                <?php if (have_rows('specialized_field')) : ?>
                                    <?php while (have_rows('specialized_field')) : the_row(); ?>
                                        <li><?php the_sub_field('specialty', get_the_ID()); ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="itemContent">
                            <h4 class="titleContent">対応可能な疾患</h4>
                            <ul class="rFList">
                                <?php if (have_rows('diseases_that_can_be_treated')) : ?>
                                    <?php while (have_rows('diseases_that_can_be_treated')) : the_row(); ?>
                                        <li><?php the_sub_field('diseases_can_be_treated', get_the_ID()); ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="itemContent">
                            <h4 class="titleContent">資格・受賞歴</h4>
                            <p class="subContent"><?php the_field('qualifications_awards', get_the_ID()); ?></p>
                        </div>
                        <div class="itemContent">
                            <h4 class="titleContent">所属学会</h4>
                            <p class="subContent"><?php the_field('academic_association_member', get_the_ID()); ?></p>
                        </div>
                        <div class="itemContent">
                            <h4 class="titleContent">所属学会</h4>
                            <div class="tableContent">
                                <table>
                                    <?php if (have_rows('academic_association_member_2', get_the_ID())) : ?>
                                        <?php while (have_rows('academic_association_member_2', get_the_ID())) : the_row(); ?>
                                            <tr>
                                                <th><?php the_sub_field('date', get_the_ID()); ?></th>
                                                <td><?php the_sub_field('description', get_the_ID()); ?></td>
                                            </tr>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>
                        <div class="itemContent">
                            <h4 class="titleContent">経験年数</h4>
                            <p class="subContent"><?php the_field('years_of_experience', get_the_ID()); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- #content -->
<?php get_template_part('template-parts/content/areaContact'); ?>
<!-- #areaContact -->
<?php get_template_part('template-parts/content/fixedSection'); ?>
<!-- #fixedSection -->
<?php get_footer(); ?>
<!-- #footer -->
</body>

</html>