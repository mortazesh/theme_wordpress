<?php get_header(); ?>
    <div class="map-conatiner">
        <div class="map">
            <p>
                صفحه اصلی / مقالات / <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?><a></span>
            </p>
        </div>
    </div>
    <div class="article-container">
        <div class="title">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>
        <div class="box-article">
            <div>
                <i class="fal-solid fa-timer"></i>
                <p><?php echo get_the_date(); ?></p>
            </div>
            <div>
                <i class="fa-solid fa-user"></i>
                <p>ارسال شده توسط <?php echo get_the_author(); ?></p>
            </div>
            <div>
                <i class="fa-solid fa-folder"></i>
                <p></p>
            </div>
            <div>
                <i class="fa-sharp fa-solid fa-eye"></i>
                <p>17 بازدید</p>
            </div>
        </div>
        <div class="image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content">
            <p>
                <?php the_content(); ?>
            </p>
        </div>
    </div>
    <div class="comment_conatiner">
        <?php comments_template(); ?>
    </div>
<?php get_footer(); ?>