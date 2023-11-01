<a href="<?php esc_url(home_url('/')); ?>" class="logo">
    <?php if(get_theme_mod('choose-logo')) { ?>
        <img src="<?php get_theme_mod('choose-logo'); ?>" title="" alt=""/>
    <?php }
    else{ ?>
        <img src="<?php bloginfo('template_url'); ?>/assets/image/logo.png" title="" alt="">
    <?php } ?>
</a>