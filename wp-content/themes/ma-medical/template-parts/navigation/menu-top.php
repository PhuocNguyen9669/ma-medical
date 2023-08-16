   <?php wp_nav_menu([
        'theme_location' => "top-bar",
        'container' => false,
        'menu_class' => 'horizontal-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s listLang">%3$s</ul>',
        'fallback_cb' => false
    ]); ?>
 