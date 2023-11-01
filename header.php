<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head> 
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo("pingback_url") ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header-container">
        <div class="header-top">
            <div class="top">
                <?php get_template_part("/inc/template/header/header_top/logo"); ?>
                <div class="box">
                    <?php get_template_part("/inc/template/header/header_top/search"); ?>
                    <?php get_template_part("/inc/template/header/header_top/basket"); ?>
                    <?php get_template_part("/inc/template/header/header_top/card"); ?>
                    <?php get_template_part("/inc/template/header/header_top/account"); ?>
                </div>
            </div>
        </div>
        <div class="header-bottom"> 
            <div class="bottom">
                <?php get_template_part("/inc/template/header/header_bottom/mega_menu"); ?>
                <?php get_template_part("/inc/template/header/header_bottom/menu"); ?>
                <?php get_template_part("/inc/template/header/header_bottom/festival"); ?>
            </div>
        </div>
    </header>