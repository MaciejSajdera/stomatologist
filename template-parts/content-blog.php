<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazurkatarzyna
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mb-8">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title decoration-color text--600 font-bold mb-4">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title decoration-color text--600 font-bold mb-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				echo 'Autor: ';
				echo get_the_author_meta('first_name');
				echo ' ';
				echo get_the_author_meta('last_name');
				echo ' | ';
				echo get_the_date();

				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="flex flex-col xl:flex-row xl:gap-x-8">

			<div class="xl:w-4/12">
				<?php mazurkatarzyna_post_thumbnail(); ?>
			</div>

			<div class="entry-content xl:w-8/12 flex flex-col justify-between">
				<?php
				the_excerpt();
				?>

				<a class="decoration-color mt-4 readmore" href="<?php echo get_permalink(); ?>">Czytaj dalej </a>

			</div><!-- .entry-content -->

	</div>


	<footer class="entry-footer">
		<!-- <?php mazurkatarzyna_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
