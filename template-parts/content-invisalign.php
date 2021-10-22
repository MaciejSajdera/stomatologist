<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazurkatarzyna
 */
$section_1 = get_field("section_1");
$section_1_content_1 = $section_1['content_1'];
$section_1_content_2 = $section_1['content_2'];
$section_1_image = $section_1['image'];
$section_1_icon = $section_1['icon'];


$section_2 = get_field("section_2");

$section_2_title = $section_2['title'];
$section_2_image_1 = $section_2['image_1'];
$section_2_image_2 = $section_2['image_2'];
$section_2_icon = $section_2['icon'];
$section_2_content_1 = $section_2['content_1'];
$section_2_content_2 = $section_2['content_2'];
$section_2_content_3 = $section_2['content_3'];

$section_3 = get_field("section_3");
$section_3_title = $section_3['title'];
$section_3_icon = $section_3['icon'];
$section_3_icon_subtitle = $section_3['icon_subtitle'];
$section_3_content_1 = $section_3['content_1'];
$section_3_content_2 = $section_3['content_2'];
$section_3_benefits = $section_3['benefits'];

$section_3_benefit_1 = $section_3_benefits['benefit_1'];
$section_3_benefit_1_icon = $section_3_benefit_1['icon'];
$section_3_benefit_1_icon_subtitle = $section_3_benefit_1['icon_subtitle'];
$section_3_benefit_1_content = $section_3_benefit_1['content'];

$section_3_benefit_2 = $section_3_benefits['benefit_2'];
$section_3_benefit_2_icon = $section_3_benefit_2['icon'];
$section_3_benefit_2_icon_subtitle = $section_3_benefit_2['icon_subtitle'];
$section_3_benefit_2_content = $section_3_benefit_2['content'];

$section_3_benefit_3 = $section_3_benefits['benefit_3'];
$section_3_benefit_3_icon = $section_3_benefit_3['icon'];
$section_3_benefit_3_icon_subtitle = $section_3_benefit_3['icon_subtitle'];
$section_3_benefit_3_content = $section_3_benefit_3['content'];

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
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title text-center text-2xl xl:text-5xl 2xl:text-6xl font-bold uppercase mb-24">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content ">

		<section class="flex flex-col items-center justify-between w-full">

			<h2 class="mb-16 decoration-color text-center max-w-xl font-bold">
				
				<?php echo $section_1_content_1 ?>
				<div class="h-px bg-white mb-0.5 max-w-sm m-auto transform -translate-x-1.5 mt-6"></div>
				<div class="h-px bg-white max-w-sm m-auto transform translate-x-1.5 mb-6"></div>
				<?php echo $section_1_content_2 ?>
		
			</h2>


			<div class="mb-16 max-w-screen-sm m-auto">
				<img class="object-contain px-36" src="<?php echo $section_1_image['url'] ?>">
			</div>

			<div class="text-center max-w-lg">

				<div class="mb-16 text-left">
					<?php
						the_content();
					?>
				</div>

				<img class="m-auto mb-8 max-w-xs" src="<?php echo $section_1_icon['url'] ?>">

			</div>

		</section>

		<section>

			<div class="mb-24 py-12" style="
								background-image: url(<?php echo $section_2_image_1['url'] ?>);
								background-size: 75%;
								background-repeat: no-repeat;
								min-height: <?php echo $section_2_image_1['height'] ?>px
								"
								>

				<div class="text-center text-2xl text-black w-full transform translate-x-1/4 mb-24">
					<p class="w-max m-auto py-4 px-8 decoration-background font-bold"><?php echo $section_2_title ?></p>
				</div>

				<p class="w-1/2 ml-auto text-justify px-16">
					<?php echo $section_2_content_1 ?>
				</p>
			</div>

			<div class="xl:flex xl:flex-row xl:justify-between">

				<div class="xl:w-1/2">
					<img class="m-auto object-contain rounded-full" src="<?php echo $section_2_image_2['url'] ?>" />
				</div>

				<div class="xl:w-1/2">
					<p class="">
						<?php echo $section_2_content_2 ?>
					</p>
					<img class="m-auto object-contain" src="<?php echo $section_2_icon['url'] ?>" />

					<p class="">
						<?php echo $section_2_content_3 ?>
					</p>
				</div>
			</div>

		</section>

		<div class="h-px bg-white mb-0.5 max-w-sm m-auto transform -translate-x-1.5 mt-6"></div>
		<div class="h-px bg-white max-w-sm m-auto transform translate-x-1.5 mb-6"></div>

		<section>
			<p class="text-center text-2xl mb-16 decoration-color "><?php echo $section_3_title ?></p>

			<div class="flex flex-col justify-center items-center mb-24">

				<img class="mb-6" src="<?php echo $section_3_icon['url'] ?>" />
				<p class="font-bold text-center mb-6"><?php echo $section_3_icon_subtitle ?></p>
				<p class="text-center mb-6"><?php echo $section_3_content_1 ?></p>
				<p class="text-center"><?php echo $section_3_content_2 ?></p>

			</div>

			<div class="flex flex-col xl:flex-row justify-between items-stretch">

				<div class="flex flex-col items-center mb-12 xl:mb-0 xl:w-3/12">
					<img class="mb-6 w-20 h-20 object-contain" src="<?php echo $section_3_benefit_1_icon['url'] ?>" />
					<p class="font-bold text-center mb-12"><?php echo $section_3_benefit_1_icon_subtitle ?></p>
					<p class="text-center mb-6"><?php echo $section_3_benefit_1_content ?></p>
				</div>

				<div class="flex flex-col items-center mb-12 xl:mb-0 xl:w-3/12">
					<img class="mb-6 w-20 h-20 object-contain" src="<?php echo $section_3_benefit_2_icon['url'] ?>" />
					<p class="font-bold text-center mb-12"><?php echo $section_3_benefit_2_icon_subtitle ?></p>
					<p class="text-center mb-6"><?php echo $section_3_benefit_2_content ?></p>
				</div>

				<div class="flex flex-col items-center mb-12 xl:mb-0 xl:w-3/12">
					<img class="mb-6 w-20 h-20 object-contain" src="<?php echo $section_3_benefit_3_icon['url'] ?>" />
					<p class="font-bold text-center mb-12"><?php echo $section_3_benefit_3_icon_subtitle ?></p>
					<p class="text-center mb-6"><?php echo $section_3_benefit_3_content ?></p>
				</div>

			</div>

		</section>

		<section>
			<div class="mb-36 flex flex-col xl:flex-row">

				<div class="mt-auto mb-16 xl:w-7/12">
					<img class="mb-8 xl:ml-auto pr-6" src="<?php echo $section_4_subsection_1_logo['url'] ?>" alt="<?php echo $section_4_subsection_1_logo['alt'] ?>" />
					<p class="border-2 border-decoration-color py-4 px-8">
						<?php echo $section_4_subsection_1_content ?>
					</p>
				</div>

				<div class="xl:w-5/12 relative">
					<img class="image--overflowing" src="<?php echo $section_4_subsection_1_image['url'] ?>" alt="<?php echo $section_4_subsection_1_image['alt'] ?>" />
				</div>


			</div>

			<div class="mb-36 flex flex-col xl:flex-row">

				<div class="xl:w-5/12 relative flex flex-row-reverse">
					<img class="image--overflowing" src="<?php echo $section_4_subsection_2_image['url'] ?>" alt="<?php echo $section_4_subsection_2_image['alt'] ?>" />
				</div>

				<div class="mt-auto mb-16 xl:w-7/12">
					<img class="mb-8 xl:ml-auto pr-6" src="<?php echo $section_4_subsection_2_logo['url'] ?>" alt="<?php echo $section_4_subsection_2_logo['alt'] ?>" />
					<p class="border-2 border-decoration-color py-4 px-8">
						<?php echo $section_4_subsection_2_content ?>
					</p>
				</div>



			</div>

		</section>

		<section>

			<div class="relative flex flex-col justify-between items-center xl:flex-row">

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
