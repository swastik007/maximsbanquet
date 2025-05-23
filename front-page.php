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
		<?php get_template_part( 'template-parts/hero-section', 'none' ); ?>
		
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
	</main><!-- #main -->

<?php
get_footer();
