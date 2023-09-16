<div class="swiper mySwiper silder">
        <div class="swiper-wrapper">
            <?php 
                $arage = array(
                    'post_type' => 'silder',
                    'posts_per_page' => 4
                ); 
                // the query
                $the_query = new WP_Query($arage);
                // the loop
                if($the_query->have_posts()){
                    while($the_query->have_posts()){
                        $the_query->the_post(); ?>
                            <div class="swiper-slide">
                                <?php the_post_thumbnail('slider-thumbnail'); ?>
                            </div>
                        <?php 
                    }
                }
                wp_reset_postdata();
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>