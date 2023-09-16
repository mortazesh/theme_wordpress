<?php get_header(); ?>
<!-- start silder -->
<section class="silder-container">
    <?php get_template_part("/inc/template/silder/silder"); ?>
    <?php get_template_part("/inc/template/silder/banner"); ?>
</section>
<!-- end silder -->
<!-- start product shop -->
<section class="product-conatiner">
    <?php get_template_part("/inc/template/product/top-product/title"); ?>
    <div class="bottom-product">
        <?php get_template_part("/inc/template/product/bottom-product/product"); ?>
    </div>
</section>
<!-- end product shop -->
<!-- start product discount shop -->
<section class="product-discount-container">
        <div class="discount">
            <div class="content-discount">
                <div class="text">
                    <h2>
                        تخفیفات ویژه
                    </h2>
                    <p>
                        اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.
                    </p>
                </div>
                <div class="timer">
                    <div>
                        <p>14</p>
                        <p>ثانیه</p>
                    </div>
                    <div>
                        <p>25</p>
                        <p>دقیقه</p>
                    </div>
                    <div>
                        <p>19</p>
                        <p>ساعت</p>
                    </div>
                </div>
            </div>
            <div class="product-discount">
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
                                <a href=<?php the_permalink(); ?>>
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
            </div>
        </div>
    </section>
<!-- end product discount shop -->
<!-- start product shop -->
<section class="product-conatiner">
    <?php 
        get_template_part("/inc/template/product/top-product/title"); 
    ?>
    <div class="bottom-product">
        <?php get_template_part("/inc/template/product/bottom-product/product"); ?>
    </div>
</section>
<!-- end product shop -->
<!-- start banner -->
<section class="banner-conatiner">
        <div class="banner">
            <img src="" alt="" title="">
        </div>
</section>
<!-- end banner -->
<!-- start new product shop -->
<section class="product-conatiner-new">
        <div class="top-product">
            <p>جدیدترین محصولات</p>
            <div class="line"></div>
            <p>محصولات بیشتر</p>
        </div>
        <div class="bottom-product-new">
            <?php 
                    $arage = array(
                        'post_type' => 'product',
                        'post_per_page' => 8
                    );
                    $the_query = new WP_Query($arage);
                    if($the_query->have_posts()){
                        while($the_query->have_posts()){
                            $the_query->the_post(); 
                            global $product;
                            ?>
                                <a href=<?php the_permalink(); ?>>
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
        </div>
    </section>
<!-- end new product shop -->
<!-- start banner -->
<section class="banner-bottom-conatiner">
        <div class="banner">
            <img src="" alt="" title="">
        </div>
        <div class="banner">
            <img src="" alt="" title="">
        </div>
    </section>
<!-- end banner -->
<!-- start article -->
<section class="article-video-conatiner">
        <div class="article-video">
            <div class="article">
                <div class="top-article">
                    <p>مقالات</p>
                    <div class="line"></div>
                    <a href="">مقالات بیشتر</a>
                </div>
                <div class="bottom-article">
                    <?php
                        $arage = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        );
                        $the_query = new WP_Query($arage);
                        if($the_query->have_posts()){
                            while($the_query->have_posts()){
                                $the_query->the_post(); ?>
                                    <div>
                                        <div class="image">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <a class="content" href="<?php the_permalink(); ?>">
                                                <h2>
                                                    <?php the_title(); ?>
                                                </h2>
                                                <p>
                                                    <?php echo wp_trim_words(get_the_content(),40,'...'); ?>
                                                </p>
                                                <div class="icon">
                                                    <div>
                                                        <i></i>
                                                        <p><?php the_date(); ?></p>
                                                    </div>
                                                    <div>
                                                        <i></i>
                                                        <p><?php echo get_the_author(); ?></p>
                                                    </div>
                                                </div>
                                            </a>    
                                    </div>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="video">
                <div class="top-video">
                    <p>ویدیوها</p>
                    <div class="line"></div>
                    <p>ویدیو بیشتر</p>
                </div>
                <div class="bottom-video">
                    <div class="box-video">

                    </div>
                    <div class="boxes-video">
                        <div>
                            <div class="image">
                                <img src="" alt="" title="">
                            </div>
                            <div class="content">
                                <h2>
                                    لورم ساز چیست؟
                                </h2>
                                <div class="icon">
                                    <div class="timer">

                                    </div>
                                    <div class="play">
                                        <i></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="image">
                                <img src="" alt="" title="">
                            </div>
                            <div class="content">
                                <h2>
                                    لورم ساز چیست؟
                                </h2>
                                <div class="icon">
                                    <div class="timer">

                                    </div>
                                    <div class="play">
                                        <i></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="image">
                                <img src="" alt="" title="">
                            </div>
                            <div class="content">
                                <h2>
                                    لورم ساز چیست؟
                                </h2>
                                <div class="icon">
                                    <div class="timer">

                                    </div>
                                    <div class="play">
                                        <i></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- end article -->
<!-- start brand -->
<section class="barnd-container">
    <div class="barnd">
        <div class="top-barnd">
                <p>برندهای محصولات</p>
                <div class="line"></div>
                <p>برندهای بیشتر</p>
            </div>
            <div class="bottom-barnd">
                <?php 
                    $arage = array(
                        'post_type' => 'barnd',
                        'posts_per_page' => 7
                    );
                    $the_query = new WP_Query($arage);
                    if($the_query->have_posts()){
                        while($the_query->have_posts()){
                            $the_query->the_post(); ?>
                                <div>
                                    <?php the_post_thumbnail('barnd_thumbnail'); ?>
                                </div>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                ?>
        </div>
    </div>   
</section>
<!-- end brand -->
<?php get_footer(); ?>