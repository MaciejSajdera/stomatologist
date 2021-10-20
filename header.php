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
<div id="page" class="site m-auto lg:mt-12" style="max-width: <?php echo $header_image['width']  ?>px;">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mazurkatarzyna' ); ?></a>

	<header id="masthead" class="site-header bg-no-repeat bg-contain bg-top p-12"
						  style="background-image: url(<?php echo $header_image['url'] ?>);
						  		 min-height: <?php echo $header_image['height']  ?>px;
						  ">
		<div class="site-branding">
			<?php
				the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation px-4 mt-12">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mazurkatarzyna' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->


		<?php

		if (is_front_page()) {
			echo '
			<h1 class="text-7xl font-bold text-center">
				<span class="uppercase">Twój uśmiech</span>
				<br />
				<span class="artistic-font">moja pasja</span>
			</h1>
			';
		}

		?>


	</header><!-- #masthead -->

	<div id="content" class="site-content p-16">