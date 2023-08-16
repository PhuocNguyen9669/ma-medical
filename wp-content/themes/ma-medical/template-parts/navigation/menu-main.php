<div class="inner">
    <ul class="menu">
        <li class="current-menu-item"><a href="<?= home_url(); ?>">TOP</a></li>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class' => 'menu',
            'container' => false,
            'item_wrap' => '<ul class="menu %2$s"  id="primary_menu_ul">%3$s</ul>',
            'fallback_cb' => false
        ]);
        ?>
    </ul>
</div>