<?php
/**
 * This is homepage template
 *
 * @package Maxims_Banquet
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!-- top-slider section area -->
    	<?php get_template_part( 'template-parts/slider', 'none' ); ?>
    	<!-- top-slider section area --> 
		
    	<?php get_template_part( 'template-parts/about_us', 'none' ); ?>
    	<?php get_template_part( 'template-parts/slider', 'none' ); ?>
    	<?php get_template_part( 'template-parts/slider', 'none' ); ?>
	</main><!-- #main -->

<?php
get_footer();
