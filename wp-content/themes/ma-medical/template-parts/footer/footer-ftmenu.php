<?php global $theme_uri; ?>
<div class="ftMenu">
    <?php
    wp_nav_menu([
        'theme_location' => "footer_1",
        'container' => false,
        'menu_class' => 'horizontal-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
        'fallback_cb' => false
    ]);

    wp_nav_menu([
        'theme_location' => "footer_2",
        'container' => false,
        'menu_class' => 'horizontal-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
        'fallback_cb' => false
    ]);


    wp_nav_menu([
        'theme_location' => "footer_3",
        'container' => false,
        'menu_class' => 'horizontal-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
        'fallback_cb' => false
    ]);


    ?>
    <!-- <ul class="menu">
        <li><a href="#">TOP</a></li>
    </ul>
    <ul class="menu">
        <li><a href="#">MAオンライン・セカンドオピニオンサービスとは</a></li>
        <li><a href="#">医師へのメール相談サービスとは</a></li>
        <li><a href="#">ご利用の流れ</a></li>
        <li><a href="#">ご利用料金</a></li>
        <li><a href="#">お客様の声</a></li>
        <li><a href="#">医師へのご相談・面談予約・お問合せ</a></li>
    </ul>
    <ul class="menu">
        <li><a href="#">医師一覧</a></li>
        <li><a href="#">よくある質問</a></li>
        <li><a href="#">運営会社</a></li>
        <li><a href="#">プライバシーポリシー</a></li>
        <li><a href="#">利用規約</a></li>
    </ul> -->
</div>