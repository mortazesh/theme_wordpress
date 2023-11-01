
<div class="account-conatiner">
    <?php 
        $account_link = get_permalink(get_option('woocommerce_myaccount_page_id')) 
    ?>
    <div class="account">
        <?php 
            if(is_user_logged_in()){ ?>
                <a href="<?php echo $account_link; ?>">
                    حساب کاربری
                </a>     
                <ul class="menu-account">
                    <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
                    <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
                        <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php
            }
            else{ ?>
                <a href="<?php echo $account_link; ?>">
                    ورود و ثبت نام
                </a>  
                <?php
            }
        ?>
    </div>
</div>
