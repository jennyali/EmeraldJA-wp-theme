<?php
/**
 * Template part for displaying results in search pages
 *
 *
 * @package EmeraldJA
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-result'); ?>>
	<header class="entry-header search-result__title">
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php emerald_ja_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary search-result__excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<div class="pull-right">
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-default btn-custom-4 search-result__btn">Read More</a>
	</div>

	<footer class="entry-footer">
		<?php emerald_ja_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
