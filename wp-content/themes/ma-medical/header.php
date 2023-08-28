<?php global $theme_uri; ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php the_title() ?></title>
    <meta name="description" content=" content " />
    <meta name="keywords" content=" content " />
    <meta name="author" content=" content " />
    <meta name="robots" content=" all " />
    <meta name="googlebot" content=" all ">
    <!-- <link rel="icon" type="image/png" href="favicon.png" /> -->
    <?php wp_head(); ?>
   
</head>

<body>
    <div id="header">
        <?php get_template_part('template-parts/header/header', 'bar'); ?>
        <?php get_template_part('template-parts/header/header', 'main-menu'); ?>
    </div>
    <div id="fixH" style="height: 65px !important;"></div>