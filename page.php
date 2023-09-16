<?php get_header(); ?>
<div class="map-conatiner">
        <div class="map">
            <p>
                صفحه اصلی / <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?><a></span>
            </p>
        </div>
</div>
<div class="page-container">
    <div class="page">
        <?php the_content(); ?>
    </div>
</div>
<?php get_footer(); ?>