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
	<header class="entry-header reveal-from__trigger">
		<?php
		if ( is_singular() ) :
			echo '<h1 class="entry-title text-center text--1200 font-bold uppercase mb-24 reveal-from__element reveal-from--transparent">'.get_the_title().'</h1>';
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta text-center">
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


	<div class="entry-content blog-post-container">

		<?php mazurkatarzyna_post_thumbnail(); ?>

		<div class="post-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mazurkatarzyna' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mazurkatarzyna_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
