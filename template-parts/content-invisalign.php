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

$section_4_tab_1 = $section_4['tab_1'];
$section_4_tab_2 = $section_4['tab_2'];
$section_4_tab_3 = $section_4['tab_3'];
$section_4_tab_4 = $section_4['tab_4'];

$section_4_content = $section_4['content'];
$section_4_image = $section_4['image'];

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
				<img class="object-contain px-12 xl:px-36" src="<?php echo $section_1_image['url'] ?>">
			</div>

			<div class="text-center max-w-lg">

				<div class="mb-16 text-justify">
					<?php
						the_content();
					?>
				</div>

				<img class="m-auto mb-8 max-w-xs" src="<?php echo $section_1_icon['url'] ?>">

			</div>

		</section>

		<section>

			<!-- Mobile only -->

			<div class="pb-12 xl:hidden xl:py-12">

				<div class="text-center text-2xl text-black w-full transform xl:translate-x-1/4 mb-12">
					<p class="m-auto py-4 px-4 decoration-background font-bold"><?php echo $section_2_title ?></p>
				</div>

				<p class="text-justify mb-12">
					<?php echo $section_2_content_1 ?>
				</p>

				<img src="<?php echo $section_2_image_1['url'] ?>" />

			</div>

			<!-- Desktop only -->

			<div class="hidden pb-12 xl:block mb-24 py-12 bg-image--75"
			
				style="
					background-image: url(<?php echo $section_2_image_1['url'] ?>);
					"
					>

				<div class="text-center text-2xl text-black w-full transform xl:translate-x-1/4 mb-24">
					<p class="m-auto py-4 px-4 decoration-background font-bold xl:px-8 xl:w-max"><?php echo $section_2_title ?></p>
				</div>

				<p class="text-justify px-16 xl:w-1/2 xl:ml-auto">
					<?php echo $section_2_content_1 ?>
				</p>

			</div>

			<div class="xl:flex xl:flex-row xl:justify-between">

				<div class="xl:w-1/2">
					<div class="text-justify">
						<?php echo $section_2_content_2 ?>
					</div>
					<img class="mx-auto my-12 object-contain w-24 h-24" src="<?php echo $section_2_icon['url'] ?>" />

					<div class="text-justify">
						<?php echo $section_2_content_3 ?>
					</div>
				</div>
				
				<div class="max-w-lg m-auto xl:mt-0 xl:w-1/2 xl:order-2 p-16">
					<div class="m-auto bg-cover bg-no-repeat rounded-full w-full h-auto"
					 	style="padding-top:100%; background-image: url(<?php echo $section_2_image_2['url'] ?>)">
					</div>
				</div>

			</div>

		</section>

		<div class="h-1 bg-white mb-2 max-w-xl m-auto transform -translate-x-3 mt-6"></div>
		<div class="h-1 bg-white max-w-xl m-auto transform translate-x-3 mb-12"></div>

		<section>
			<p class="text-center font-bold text-2xl mb-16 decoration-color "><?php echo $section_3_title ?></p>

			<div class="flex flex-col justify-center items-center mb-24">

				<img class="mb-6" src="<?php echo $section_3_icon['url'] ?>" />
				<p class="font-bold text-center mb-6"><?php echo $section_3_icon_subtitle ?></p>
				<p class="text-center mb-6"><?php echo $section_3_content_1 ?></p>
				<p class="text-center"><?php echo $section_3_content_2 ?></p>

			</div>

			<div class="flex flex-col xl:flex-row justify-between items-stretch">

				<div class="flex flex-col items-center mb-12 px-8 xl:mb-0 xl:w-4/12">
					<img class="mb-6 w-20 h-20 object-contain" src="<?php echo $section_3_benefit_1_icon['url'] ?>" />
					<p class="font-bold text-center mb-8"><?php echo $section_3_benefit_1_icon_subtitle ?></p>
					<p class="text-center mb-6"><?php echo $section_3_benefit_1_content ?></p>
				</div>

				<div class="flex flex-col items-center mb-12 px-8 xl:mb-0 xl:w-4/12">
					<img class="mb-6 w-20 h-20 object-contain" src="<?php echo $section_3_benefit_2_icon['url'] ?>" />
					<p class="font-bold text-center mb-8"><?php echo $section_3_benefit_2_icon_subtitle ?></p>
					<p class="text-center mb-6"><?php echo $section_3_benefit_2_content ?></p>
				</div>

				<div class="flex flex-col items-center mb-12 px-8 xl:mb-0 xl:w-4/12">
					<img class="mb-6 w-20 h-20 object-contain" src="<?php echo $section_3_benefit_3_icon['url'] ?>" />
					<p class="font-bold text-center mb-8"><?php echo $section_3_benefit_3_icon_subtitle ?></p>
					<p class="text-center mb-6"><?php echo $section_3_benefit_3_content ?></p>
				</div>

			</div>

		</section>

		<section class="mb-0">

			<div class="tabs-wrapper flex flex-col gap-y-1 m-auto">

				<div class="tab cursor-pointer">
					<div class="tab__title rounded-2xl font-black flex items-center justify-between w-full px-6 xl:px-12 py-4">
						<p class="">
							<?php echo $section_4_tab_1['title'] ?>
						</p>
						<div class="expand-arrow"></div>
					</div>
					<div class="tab__content rounded-2xl m-auto mb-12 px-6 xl:px-24 py-8">
						<p class="">
							<?php echo $section_4_tab_1['content'] ?>
						</p>
					</div>
				</div>

				<div class="tab cursor-pointer">
					<div class="tab__title rounded-2xl font-black flex items-center justify-between w-full px-6 xl:px-12 py-4">
						<p class="">
						<?php echo $section_4_tab_2['title'] ?>
						</p>
						<div class="expand-arrow"></div>
					</div>
					<div class="tab__content rounded-2xl m-auto mb-12 px-6 xl:px-24 py-8">
						<p class="">
						<?php echo $section_4_tab_2['content'] ?>
						</p>
					</div>
				</div>

				<div class="tab cursor-pointer">
					<div class="tab__title rounded-2xl font-black flex items-center justify-between w-full px-6 xl:px-12 py-4">
						<p class="">
							<?php echo $section_4_tab_3['title'] ?>
						</p>
						<div class="expand-arrow"></div>
					</div>
					<div class="tab__content rounded-2xl m-auto mb-12 px-6 xl:px-24 py-8">
						<p class="">
							<?php echo $section_4_tab_3['content'] ?>
						</p>
					</div>
				</div>

				<div class="my-12">
					<?php echo $section_4_content ?>
				</div>



				<div class="tab cursor-pointer">
					<div class="tab__title rounded-2xl font-black flex items-center justify-between w-full px-6 xl:px-12 py-4">
						<p class="">
							<?php echo $section_4_tab_4['title'] ?>
						</p>
						<div class="expand-arrow"></div>
					</div>
					<div class="tab__content rounded-2xl m-auto mb-12 px-6 xl:px-24 py-8">
						<p class="">
							<?php echo $section_4_tab_4['content'] ?>
						</p>
					</div>
				</div>

				<img class="px-12 m-auto mt-24" src="<?php echo $section_4_image['url'] ?>" />

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
