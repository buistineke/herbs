<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HerbsHabitsHappiness
 */

?>

	<footer class="site-footer">
		<div class="container">
			<div class="site-info">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				endif; ?>
			</div><!-- .site-info -->
			<div class="footer-widget-area">
					<?php dynamic_sidebar( 'footer-area-1' ); ?>
					<?php dynamic_sidebar( 'footer-area-2' ); ?>
					<?php dynamic_sidebar( 'footer-area-3' ); ?>
					<?php dynamic_sidebar( 'footer-area-4' ); ?>
			</div>
			<div class="colophon">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'herbs_theme' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'herbs_theme' ), 'WordPress' );
					?>
				</a>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'herbs_theme' ), 'herbs_theme', '<a href="http://www.herbshabitshappiness.com">Ineke Buist</a>' );
					?>
			</div><!-- #colophon -->
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
