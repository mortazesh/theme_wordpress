<div class="w-1/2 h-auto bg-white rounded-2xl">
    <div class="w-full h-20 border-b border-solid border-gray-300 flex justify-start items-center">
		<p class="mr-2 font-bold text-xl">
			آخرین محصولات
		</p>
	</div>	
    <div class="w-full h-auto flex justify-start items-center flex-col gap-2">
        <div class="w-full col-span-12">
            <div class="overflow-auto lg:overflow-visible">
                <table class="w-full table text-gray-400 border-separate space-y-6 text-sm p-2">
                    <thead class="bg-sky-100 text-gray-500">
                        <tr class="h-20">
                            <th class="p-3 text-right">عنوان محصول</th>    
                            <th class="p-3 text-right">تاریخ انتشار</th>
                            <th class="p-3 text-right">قیمت محصول</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
						<tr>
                            <?php 
                                $arage = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => '5'
                                );
                                $the_query = new WP_Query($arage);
                                if($the_query->have_posts()){
                                    while($the_query->have_posts()){
                                        $the_query->the_post(); ?>
                                            <td class="p-3">
                                                <?php the_title(); ?>
							                </td>
                                            <td class="p-3">
                                                <?php the_date(); ?>
                                            </td>
                                            <td class="p-3 font-bold">
                                                <?php woocommerce_template_loop_price(); ?>
                                            </td>
                                            <td class="p-3">
                                                <a href="<?php the_permalink(); ?>" class="text-gray-400 hover:text-gray-100 mr-2">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        <?php
                                    }
                                }
                            ?>
						</tr>
					</tbody>
                </table>
            </div>
        </div>
    </div>	
</div>