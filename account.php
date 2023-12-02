<?php /* Template Name: account */ ?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head> 
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo("pingback_url") ?>">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: "shabnam";
            direction: rtl;
            color: #707070;
            font-size: 11px;
        }

        @font-face {
            font-family: "shabnam";
            src: url("./assets/font/Shabnam.woff") format("woff");
        }

        html {
            scroll-behavior: smooth;
        }

        body{
            background-color: #F5F5F5;
        }

        .woocommerce{
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-direction: column;
        }
        
        .woocommerce a{
            width : 100% !important;
        }

        .woocommerce-MyAccount-content{
            width: 83%;
            position: absolute;
            z-index: -1;
            left: 0;
        }

        .search{
            width: 250px;
            height: 35px;
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
        }
        
        .search input[type=text]{
            width: 200px;
            border: none;
            height: 30px;
            cursor: pointer;
            outline: none;
        }

       .search .icon-search{
            width: 40px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            background: none;
       }

       .fa-solid, .fas {
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
        }

        .header-container .header-top .box .search .icon-search .fa-magnifying-glass::before {
            font-size: 14px;
            cursor: pointer;
            transition: all ease 2s;
        }
        
        .icon{
            color: #ffffff;
            font-size: 16px;
        }

        .icon-box{
            color: rgb(21 128 61);
            font-size: 16px;
            margin-right: 10px;
        }

        .woocommerce-info{
            width: 100% !important;
        }

        .woocommerce-info::before {
            color: #ff0000 !important;
        }

        .woocommerce-info .button {
            width: 150px !important;
            height: 30px;
            display: flex !important;
            justify-content: center;
            align-items: center;
            border-radius: 10px !important;
            margin-top: 4px;
            margin-right: 6px;
            background-image: linear-gradient(315deg, #ff7878 0%, #ff0000 74%) !important;
            color: #FFFFFF !important;
        }

        .table {
            border-spacing: 0 15px;
        }

        table tbody tr:nth-child(n+2){
            background: #fff;
        }

        i {
            font-size: 1rem !important;
        }

        .text-box{
            font-weight: bold;
            font-size: 14px;
        }

        .woocommerce-Button{
            width: 150px !important;
            height: 30px;
            display: flex !important;
            justify-content: center;
            align-items: center;
            border-radius: 10px !important;
            margin-top: 4px;
            margin-right: 6px;
            background-image: linear-gradient(315deg, #ff7878 0%, #ff0000 74%) !important;
            color: #FFFFFF !important;
        }

        .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit, .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button, .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button, .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button, :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce #respond input#submit, :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce a.button, :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce button.button, :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce input.button{
            width: 150px !important;
            height: 30px;
            display: flex !important;
            justify-content: center;
            align-items: center;
            border-radius: 10px !important;
            margin-top: 4px;
            margin-right: 6px;
            background-image: linear-gradient(315deg, #ff7878 0%, #ff0000 74%) !important;
            color: #FFFFFF !important;
        }

        .woocommerce-breadcrumb{
            margin: 0 !important;
        }

        .woocommerce-breadcrumb a{
            color: #FF0000 !important;
        }

        .post .image img{
            width: 100% !important;
            height: 110px !important;
            border-radius: 1rem;
        }

        .woocommerce .woocommerce-customer-details, .woocommerce .woocommerce-order-details, .woocommerce .woocommerce-order-downloads{
            width: 98.5%;
            margin-right: 1.25rem;
            margin-top: 1.25rem;
        }

        .woocommerce-order-details__title{
            margin-bottom: 1rem;
        }

        .woocommerce-column__title{
            margin-bottom: 1rem;
        }

    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    height:{
                        'screen': 'calc(100vh - 3rem)',
                        '128' : '30rem'
                    },
                    width:{
                        '11/12': '96%'
                    }
                }
            }
        }
    </script>
    <?php wp_head(); ?>
    <body>
        <?php echo do_shortcode('[woocommerce_my_account]') ?>
        <?php wp_footer(); ?>
    </body>
</html>