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
        <div class="image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content">
            <p>
                <?php the_content(); ?>
            </p>
        </div>
    </div>
    <div class="categor-cantainer">
        <?php the_category(',') ?>
    </div>
    <div class="comment_conatiner">
        <?php comments_template(); ?>
    </div>
<?php get_footer(); ?>