<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazurkatarzyna
 */
$section_1 = get_field("section_1");
$section_1_subheader = $section_1['subheader'];
$section_1_contact_info = $section_1['contact_info'];

$section_1_contact_info_1 = $section_1_contact_info['info_1'];
$section_1_contact_info_2 = $section_1_contact_info['info_2'];
$section_1_contact_info_3 = $section_1_contact_info['info_3'];

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title text-center text-2xl xl:text-5xl 2xl:text-6xl font-bold uppercase">', '</h1>' ); ?>
		<h2 class="text-center text-2xl mb-16 decoration-color "><?php echo $section_1_subheader ?></h2>
		<?php  ?>
	</header><!-- .entry-header -->

	<div class="entry-content ">

		<section class="flex flex-col xl:flex-row items-stretch justify-between w-full">

			<div class="map xl:order-2">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.3651993186936!2d19.96550541593441!3d50.07944902190812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165addf71b2c67%3A0xc4bd10e4a9f75961!2zUGnEmWtuYSwgMzEtNDM1IEtyYWvDs3c!5e0!3m2!1spl!2spl!4v1635160737099!5m2!1spl!2spl" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

			</div>


			<div class="contact-info xl:order-1">

				<div class="contact-info__location mb-8">
					<p class="text-white uppercase font-bold mb-8"><?php echo $section_1_contact_info_1['title'] ?></p>
					<p class="text-black mb-8"><?php echo $section_1_contact_info_1['data_1'] ?></p>
					<p class="text-black mb-8"><?php echo $section_1_contact_info_1['data_2'] ?></p>
				</div>

				<div class="contact-info__phone mb-8">
					<p class="text-white uppercase font-bold mb-8"><?php echo $section_1_contact_info_2['title'] ?></p>
					<p class="text-black mb-8"><a href="tel:<?php echo $section_1_contact_info_2['data_1'] ?>"><?php echo $section_1_contact_info_2['data_1'] ?></a></p>
				</div>

				<div class="contact-info__email mb-8">
					<p class="text-white uppercase font-bold mb-8"><?php echo $section_1_contact_info_3['title'] ?></p>
					<p class="text-black mb-8"><a href="mailto:<?php echo $section_1_contact_info_3['data_1'] ?>"><?php echo $section_1_contact_info_3['data_1'] ?></a></p>
				</div>

			</div>


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
