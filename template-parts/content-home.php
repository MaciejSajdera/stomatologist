<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazurkatarzyna
 */
$section_1 = get_field("section_1");
$section_1_image = $section_1['image'];
$section_1_icon = $section_1['icon'];
$section_1_title = $section_1['title'];
$section_1_header = $section_1['header'];


$section_2 = get_field("section_2");
$section_2_title = $section_2['title'];
$section_2_icon_1 = $section_2['icon_1'];
$section_2_icon_2 = $section_2['icon_2'];
$section_2_content_1 = $section_2['content_1'];
$section_2_content_2 = $section_2['content_2'];

$section_3 = get_field("section_3");
$section_3_content = $section_3['content'];

$section_4 = get_field("section_4");

$section_4_subsection_1 = $section_4['subsection_1'];
$section_4_subsection_1_image = $section_4_subsection_1['image'];
$section_4_subsection_1_logo = $section_4_subsection_1['logo'];
$section_4_subsection_1_content = $section_4_subsection_1['content'];

$section_4_subsection_2 = $section_4['subsection_2'];
$section_4_subsection_2_image = $section_4_subsection_2['image'];
$section_4_subsection_2_logo = $section_4_subsection_2['logo'];
$section_4_subsection_2_content = $section_4_subsection_2['content'];

$section_5 = get_field("section_5");
$section_5_image = $section_5['image'];
$section_5_icon_1 = $section_5['icon_1'];
$section_5_icon_2 = $section_5['icon_2'];
$section_5_content_1 = $section_5['content_1'];
$section_5_content_2 = $section_5['content_2'];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content ">

		<section class="flex items-center justify-between flex-col gap-y-12 xl:flex-row xl:gap-x-12 w-full">

			<div class="text-center max-w-lg xl:w-2/3 xl:order-2">

				<img class="m-auto mb-8" src="<?php echo $section_1_icon['url'] ?>">

				<p class="mb-4 decoration-color"> <?php echo $section_1_title ?> </p>
				<h2 class="mb-12 decoration-color text--600 font-bold"><?php echo $section_1_header ?> </h2>
				<div class="text-left">
					<?php
						the_content();
					?>
				</div>

			</div>

			<div class="xl:w-1/3 xl:order-1">
				<img src="<?php echo $section_1_image['url'] ?>">
			</div>


		</section>


		<section class="reveal-from__trigger">
			<p class="text-center text-2xl mb-16 decoration-color "><?php echo $section_2_title ?></p>

			<div class="flex flex-col lg:flex-row justify-center reveal-from__element reveal-from--bottom">

				<div class="px-8 mx-auto max-w-sm mb-24 xl:w-1/2 xl:mb-0">
					<div class="text-center">
						<img class="m-auto mb-12 h-20 w-20 object-contain" src="<?php echo $section_2_icon_1['url'] ?>" />
						<p>
							<?php
								echo $section_2_content_1;
							?>
						</p>
					</div>
				</div>

				<div class="px-8 mx-auto max-w-sm xl:w-1/2">
					<div class="text-center">
						<img class="m-auto mb-12 h-20 w-20 object-contain" src="<?php echo $section_2_icon_2['url'] ?>" />
						<p>
							<?php
								echo $section_2_content_2;
							?>
						</p>
					</div>
				</div>
			</div>

		</section>


		<section class="quote my-36 xl:my-40">
			<blockquote class="p-4 quote">
				<div class="blockquote-icons">
					<div class="blockquote-background">
						<p class="p-8 border-2 border-dashed border-white text-center text--800 text-black font-extrabold">
							<span></span>
							<span></span>
							<?php echo $section_3_content  ?>
						</p>
					</div>
				</div>
			</blockquote>
		</section>

		<section>
			<div class="flex mb-16 flex-col xl:flex-row xl:mb-36 reveal-from__trigger">

				<div class="mt-auto mb-16 xl:w-7/12">
					<img class="mb-8 m-auto xl:mr-0 xl:ml-auto xl:pr-6" src="<?php echo $section_4_subsection_1_logo['url'] ?>" alt="<?php echo $section_4_subsection_1_logo['alt'] ?>" />
					<div class="border-2 border-decoration-color py-4 px-8">
						<?php echo $section_4_subsection_1_content ?>
					</div>
				</div>

				<div class="xl:w-5/12 relative">
					<img class="image--overflowing reveal-from__element reveal-from--right" src="<?php echo $section_4_subsection_1_image['url'] ?>" alt="<?php echo $section_4_subsection_1_image['alt'] ?>" />
				</div>


			</div>

			<div class="mb-36 flex flex-col xl:flex-row reveal-from__trigger">

				<div class="mt-auto mb-16 xl:order-2 xl:w-7/12">
					<div class="border-2 border-decoration-color py-4 px-8">
						<?php echo $section_4_subsection_2_content ?>
					</div>
				</div>

				<div class="relative flex flex-row-reverse xl:order-1 xl:w-5/12 ">
					<img class="image--overflowing reveal-from__element reveal-from--left" src="<?php echo $section_4_subsection_2_image['url'] ?>" alt="<?php echo $section_4_subsection_2_image['alt'] ?>" />
				</div>


			</div>

		</section>

		<section>

			<div class="reveal-from__trigger">

				<div class="relative flex flex-col justify-between items-center xl:flex-row reveal-from__element reveal-from--bottom">

					<div class="mb-12 xl:mb-0 xl:w-5/12 xl:order-2">
						<img src="<?php echo $section_5_image['url'] ?>" />
					</div>

					<div class="flex flex-col justify-between mb-6 xl:mb-0 xl:w-3/12 xl:order-1">

						<div class="h-full flex flex-col">
							<p class="text-center">
								<?php echo $section_5_content_1?>
							</p>
				
							<!-- <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-full h-fullmx-auto mt-auto" src="<?php echo $section_5_icon_1['url'] ?>" /> -->
						</div>

					</div>

					<div class=" flex flex-col justify-between mb-6 xl:mb-0 xl:w-3/12 xl:order-3">

						<div class="h-full flex flex-col">
							<p class="text-center">
								<?php echo $section_5_content_2?>
							</p>
				
							<!-- <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-full mx-auto mt-auto" src="<?php echo $section_5_icon_2['url'] ?>" /> -->
						</div>


					</div>

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
