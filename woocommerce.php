<?php get_header(); ?>
<!-- add style woocommerce with container -->
<div class="map-conatiner">
        <div class="map">
            <p>
                صفحه اصلی / محصولات  <?php 
                    if(is_shop()){
                        ?>
                        <span></span>
                        <?php
                    }else{
                        ?>
                        / <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?><a></span>
                        <?php
                    }
                ?>
            </p>
        </div>
</div>
<div class="woocommerce shop">  
    <div class="context">
        <?php woocommerce_content(); ?>
    </div>
</div>
<!-- add wocoomerce_content() structure default wordpress -->
<?php get_footer(); ?>