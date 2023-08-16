<?php get_header(); ?>
<!-- #header -->
<?php get_template_part('template-parts/page/page', 'breadcrum') ?>
<!-- #breadCrumb -->
<div id="content">
    <div class="areaFaq pageBG">
        <div class="inner">
            <h3 class="areaTitleLead">よくある質問</h3>
            <div class="listFaq">
                <?php if (have_rows('faq_repeater')) : ?>
                    <?php while (have_rows('faq_repeater')) : the_row(); ?>
                        <div class="itemFaq">
                            <div class="question">
                                <p class="numQ"><?php the_sub_field('number'); ?></p>
                                <h4 class="titlequestion"><?php the_sub_field('question'); ?><br class="pc"><?php the_sub_field('question_2'); ?></h4>
                            </div>
                            <div class="anwser">
                                <p class="iconA"><?php the_sub_field('num_anwser'); ?></p>
                                <p class="subQuestion"><?php the_sub_field('content_answer'); ?><br class="pc"><?php the_sub_field('answer_2'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- #content -->
<script type="text/javascript">
    $('.question').click(function() {
        $(this).next('.anwser').stop().slideToggle();
        $(this).toggleClass('changeArrs');
    });
</script>
<?php get_template_part('template-parts/content/areaContact'); ?>
<!-- #areaContact -->
<?php get_template_part('template-parts/content/fixedSection'); ?>
<!-- #fixedSection -->
<?php get_footer(); ?>
<!-- #footer -->
</body>

</html>