<?php get_header(); ?>
<div class="notfound_container">
        <div class="notfound">
            <div class="image">
                <img src="<?php bloginfo("template_url") ?>/assets/image/page-not-found.png" alt="" title="" />
            </div>
            <div class="search-container">
                <p>صفحه‌ای که دنبال آن بودید پیدا نشد!</p>
                <form action="<?php echo esc_html(home_url('/')) ?>" method="get" class="search">
                    <input type="text" name="s" placeholder="جستجوی محصول،برند و ...">
                    <button type="sumbit" class="icon-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>>
<?php get_footer(); ?>