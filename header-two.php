<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head> 
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/header-two.css">
    <link rel="pingback" href="<?php bloginfo("pingback_url") ?>">
    <?php wp_head(); ?>
</head>
<body>
    <?php 
        $prefix = 'netelites';
        if(!get_post_meta(get_the_ID(), $prefix . '_header_checkbox', true)){
            ?>
                <header class="header-container">
                    <div class="header-top">
                        <div class="top">
                            <div class="logo">
                                <img src="" title="" alt=""/>
                            </div>
                            <div class="boxing">
                                <div class="category">
                                    
                                </div>
                                <div class="search">
                                    <input type="text" placeholder="جستجوی محصول،برند و ...">
                                    <div class="icon-search">
                                        <img src="" alt="" title=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="account">
                                    <div class="icon-account">
                                        <img src="" alt="" title="" />
                                    </div>
                                    <div class="text-account">
                                        <p>
                                            <span>مرتضی</span> عزیز خوش آمدید
                                        </p>
                                    </div>
                                </div>
                                <div class="basket">
                                    <img src="" alt="" title=""/>
                                </div>
                                <div class="card">
                                    <img src="" alt="" title=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="bottom">
                            <ul class="menu">
                                <li>
                                    <a href="">
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        محصولات
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        شعبه ها
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        اخبار
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        تماس با ما
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        راهنمای خرید
                                    </a>
                                </li>
                            </ul>
                            <div class="festival">
                                <div class="icon-festival">
                                    <img src="" alt="" title="" />
                                </div>
                                <div class="text-festival">
                                    <p>جشنواره فروش</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            <?php
        }
        else{
            ?>

            <?php
        }
    ?>