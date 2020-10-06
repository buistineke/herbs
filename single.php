<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Herbs
 */

get_header();
?>
<div class="content-sidebar">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<svg width="24px" height="10px" viewBox="0 0 24 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					    <title>arrow-left</title>
					    <g id="arrow-left" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					        <g id="arrow" transform="translate(12.000000, 5.000000) scale(-1, 1) translate(-12.000000, -5.000000) " fill="#000000" fill-rule="nonzero">
					            <polygon id="Path" points="22.64 4.485 22.64 5.735 0 5.735 0 4.485"></polygon>
					            <polygon id="Path" points="18.5 10 17.65 9.10958904 22.16 5 17.65 0.900195695 18.5 0 24 5"></polygon>
					        </g>
					    </g>
					</svg><span class="nav-subtitle">' . esc_html__( 'Previous:', 'herbs' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<svg width="24px" height="10px" viewBox="0 0 24 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					    <title>arrow-right</title>
					    <g id="arrow-right" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					        <polygon id="Path" fill="#000000" fill-rule="nonzero" points="22.64 4.485 22.64 5.735 0 5.735 0 4.485"></polygon>
					        <polygon id="Path" fill="#000000" fill-rule="nonzero" points="18.5 10 17.65 9.10958904 22.16 5 17.65 0.900195695 18.5 0 24 5"></polygon>
					    </g>
					</svg><span class="nav-subtitle">' . esc_html__( 'Next:', 'herbs' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
