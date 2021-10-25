<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mazurkatarzyna
 */

?>



	<footer id="colophon" class="site-footer w-full">
		<div class="footer-top flex items-center justify-between flex-col xl:flex-row pb-16">
			<div class="footer-menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'footer-menu',
							'orderby' => 'menu_order',
							'container'            => 'nav',
						)
					);
				?>
			</div>
			<div class="social-media flex">
				<?php get_template_part( 'template-parts/partials/contact-icons'); ?>
			</div>
		</div>

		<div class="footer-bottom text-center text-xs pb-16">
			<div class="site-info">
				copyrights - Katarzyna Mazur | <?php echo date("Y"); ?>
			</div><!-- .site-info -->
		</div>

	</footer><!-- #colophon -->
	</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
