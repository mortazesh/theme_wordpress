<div class="w-1/2 h-auto bg-white rounded-2xl">
    <div class="w-full h-20 border-b border-solid border-gray-300 flex justify-start items-center">
		<p class="mr-2 font-bold text-xl">
		    آخرین مقالات
		</p>
	</div>
	<div class="w-full h-auto mt-4 flex justify-start items-center flex-col gap-2">
        <?php 
            $arage = array(
                'post_type' => 'post',
                'posts_per_page' => '3'
            );
            $the_query = new WP_Query($arage);     
            if($the_query->have_posts()){
                while($the_query->have_posts()){
                        $the_query->the_post();
                    ?>
                        <a class="w-11/12 h-44 flex justify-start items-center gap-3 no-underline pointer-events-auto mb-2 post" href="<?php the_permalink(); ?>">
                            <div class="w-3/12 h-40 rounded-2xl mr-2 image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="w-9/12 h-40 mt-9">
                                <h2 class="text-lg font-bold mb-2"><?php the_title(); ?></h2>
                                <p class="w-11/12 mr-3 text-justify">
                                    <?php echo wp_trim_words(get_the_content(),40,'...'); ?>
                                </p>
                                <div class="w-11/12 flex justify-start items-center mr-4">
                                    <div class="w-60 h-12 flex justify-start items-center">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p class="mr-3 mt-2"><?php the_date(); ?></p>
                                    </div>
                                    <div class="w-60 h-12 flex justify-start items-center">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="mr-3 mt-2"><?php echo get_the_author(); ?></p>
                                    </div>
                                </div>
                            </div>
                            </a>
                    <?php
                }
            }   
        ?>
	</div>		
</div>