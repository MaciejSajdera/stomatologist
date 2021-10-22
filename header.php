<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mazurkatarzyna
 */
$menu = wp_get_nav_menu_object('menu-1');
$header_image = get_field("header_image", $menu);

// var_dump($header_image);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site m-auto lg:mt-12">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mazurkatarzyna' ); ?></a>

	<style scoped>

		<?php
			$aspect_ratio = $header_image['height'] / $header_image['width'] * 100;
		?>


			.site-header__background {
				background-image: url(<?php echo $header_image['url'] ?>);
				/* min-height: <?php echo $header_image['height']  ?>px; */
				padding-top: <?php echo $aspect_ratio ?>%;
			}
		
	</style>

	<header id="masthead" class="site-header bg-no-repeat bg-contain bg-top relative"
>
		<div class="site-header__background" 
		style="background-image: url(<?php echo $header_image['url'] ?>);
						  		background-size: contain;
								background-repeat: no-repeat;
		">

			<?php
				if (is_front_page()) {
					echo '
					<h1 class="text-2xl xl:text-5xl 2xl:text-6xl font-bold uppercase text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 lg:-translate-y-3/4">
						<span class="uppercase whitespace-nowrap">Twój uśmiech</span>
						<br />
						<span class="artistic-font decoration-color">moja pasja</span>
					</h1>
					';
				}

			?>
		</div>


		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<div class="span-wrapper">
				<span class="burger-menu-piece"></span>
				<span class="burger-menu-piece"></span>
				<span class="burger-menu-piece"></span>
			</div>
		</button>

		<div class="site-header__content absolute top-8 left-8">

			<div class="site-branding w-1/2 lg:w-auto">
				<?php
					the_custom_logo();
				?>
			</div><!-- .site-branding -->

			<div id="site-navigation" class="main-navigation px-4 mt-12">

				<div class="desktop-menu-container">

				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'desktop-menu',
							'orderby' => 'menu_order',
							'container'            => 'nav',
						)
					);
				?>

				</div>


				<div class="mobile-menu-container">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'mobile-menu',
						'orderby' => 'menu_order',
						'container'            => 'nav',
					)
				);
				?>
				</div>

			</div><!-- #site-navigation -->

		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content px-4 lg:px-4 xl:px-32">