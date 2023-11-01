<div class="mega_menu">
    <p>دسته بندی</p>
    <div class="item_mage_menu">
        <?php

            $mage_menu = wp_nav_menu(
                array(
                    'theme_loaction' => 'mega_menu',
                    'container' => 'false'
                )
            );
            if(has_nav_menu($mage_menu)){
                echo wp_kses_post($mage_menu);
            }

        ?>
    </div>
</div>