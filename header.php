<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head> 

    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header-container">
        <div class="header-top">
            <div class="top">
                <div class="logo">
                    <?php if(get_theme_mod('choose-logo')) { ?>
                        <img src="<?php get_theme_mod('choose-logo'); ?>" title="" alt=""/>
                    <?php }
                    else{ ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/image/logo.png" title="" alt="">
                    <?php } ?>
                </div>
                <div class="box">
                    <div class="search">
                        <input type="text" placeholder="جستجوی محصول،برند و ...">
                        <div class="icon-search">
                        </div>
                    </div>
                    <div class="basket">
                        <img src="" alt="" title=""/>
                    </div>
                    <div class="card">
                        <img src="" alt="" title=""/>
                    </div>
                    <div class="account">
                        <p>
                            حساب کاربری
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="bottom">
                <?php
                    wp_nav_menu();
                ?>
                <div class="festival">
                    <div class="icon-festival">
                        <img src="" alt="" title="" />
                    </div>
                    <div class="text-festival">
                        <p>
                            جشنواره فروش ویژه
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>