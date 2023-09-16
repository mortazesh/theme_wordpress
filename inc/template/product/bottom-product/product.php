<?php 
    $arage = array(
        'post_type' => 'product',
        'post_per_page' => 4
    );
    $the_query = new WP_Query($arage);
    if($the_query->have_posts()){
        while($the_query->have_posts()){
            $the_query->the_post(); 
            global $product;
            ?>
            <a>
                <div class="image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <?php echo $product->get_price_html(); ?>
                    </p>
                </div>
            </a>
            <?php
        }
    }
    wp_reset_postdata();
?>