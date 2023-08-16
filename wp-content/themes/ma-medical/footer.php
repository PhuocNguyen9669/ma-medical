<?php global $theme_uri; ?>
<div id="footer">
    <div class="inner">
        <div class="ftWrapper">
            <?php get_template_part('template-parts/footer/footer', 'ftInfo'); ?>
            
            <!-- ftInfo -->
            <?php get_template_part('template-parts/footer/footer', 'ftmenu'); ?>
           
            <!-- ftMenu -->
        </div>
    </div>
</div>
<?php wp_footer(); ?>