<?php global  $theme_uri;  ?>
<div class="headerBar">
    <div class="inner">
        <div class="logo">
            <a class="hover" href="<?php echo home_url(); ?>"><img src="<?= $theme_uri; ?>/images/common/logo.svg" alt=""></a>
        </div>
        <?php get_template_part('template-parts/navigation/menu', 'top');?>
        <div class="hamburger sp">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>