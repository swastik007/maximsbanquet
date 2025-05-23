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
    	
    	<!-- top-slider section area --> 
		
    	<!-- top-slider section area --> 
    	<?php get_template_part( 'template-parts/hero-section', 'none' ); ?>
    	<!-- top-slider section area --> 

    	<!-- top-slider section area --> 
    	
		<?php get_template_part( 'template-parts/try-about', 'none' ); ?>
    	<!-- top-slider section area --> 
		
    	<!-- top-slider section area --> 
    	<?php get_template_part( 'template-parts/banner', 'none' ); ?>
    	<!-- top-slider section area --> 

		<?php get_template_part( 'template-parts/services', 'none' ); ?>
		<?php get_template_part( 'template-parts/services-overview', 'none' ); ?>
		<?php get_template_part( 'template-parts/special-section', 'none' ); ?>
		<?php get_template_part( 'template-parts/menu-section', 'none' ); ?>
		<?php get_template_part( 'template-parts/try-hero-section', 'none' ); ?>
		<?php get_template_part( 'template-parts/gallery', 'none' ); ?>
		<?php get_template_part( 'template-parts/intro-text', 'none' ); ?>
		<?php get_template_part( 'template-parts/testimonials', 'none' ); ?>
		
		<?php get_template_part( 'template-parts/', 'none' ); ?>


	</main><!-- #main -->

<?php
get_footer();
