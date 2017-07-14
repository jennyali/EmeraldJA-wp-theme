<?php
/**
 * Template part for displaying portfolio custom post type posts
 *
 *
 * @package EmeraldJA
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="category-gallery__item">

        <?php if( has_post_thumbnail() ) : ?>

            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive">

        <?php else : ?>

            <img src="http://localhost/emeraldJA-wp/wp-content/uploads/2017/07/frog-1.png" class="img-responsive">

        <?php endif; ?>

        <div class="category-gallery__item__overlay">
            <a href="<?php echo esc_url( get_permalink() ) ?>">
                <h4><?php the_title(); ?><span class="icon-arrow-68 btn-custom-3" ></span></h4>
            </a>
        </div><!-- .category-gallery__item__overlay -->

    </div><!-- .category-gallery__item -->

</article><!-- #post-<?php the_ID(); ?> -->