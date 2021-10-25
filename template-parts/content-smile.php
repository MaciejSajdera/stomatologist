<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazurkatarzyna
 */
$section_1 = get_field("section_1");
$section_1_title = $section_1['title'];
$section_1_icon = $section_1['icon'];
$section_1_link = $section_1['link'];


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title text-center text-2xl xl:text-5xl 2xl:text-6xl font-bold uppercase mb-24">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content ">

		<section class="flex flex-col items-center justify-between w-full">

			<div class="text-center max-w-xl">

				<div class="mb-16 text-justify">
					<?php
						the_content();
					?>
				</div>

			</div>

			<h2 class="text-center text-2xl mb-16 decoration-color "><?php echo $section_1_title ?></h2>

			<a href="<?php echo $section_1_link ?>" class="button button--standard"> <img src="<?php echo $section_1_icon['url'] ?>" /> </a>

		</section>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'mazurkatarzyna' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
