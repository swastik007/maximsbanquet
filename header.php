<?php
/**
 * The header for Maxims Banquet & Events theme
 *
 * Displays all of the <head> section and the header layout
 *
 * @package Maxims_Banquet
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<<<<<<< HEAD
	<header id="masthead" class="site-header d-none">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$maxims_banquet_description = get_bloginfo( 'description', 'display' );
			if ( $maxims_banquet_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $maxims_banquet_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'maxims-banquet' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
<!-- Hero Section -->
<header class="hero-section position-relative">
  <!-- Video Background -->
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-video.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  
=======
<header id="site-header" class="main-header sticky-header">
  <div class="container d-flex align-items-center justify-content-between py-3">
    <!-- Logo -->
    <div class="site-logo">
      <a href="<?php echo esc_url( home_url('/') ); ?>">
        <?php the_custom_logo(); ?>
      </a>
    </div>
>>>>>>> 84015567f22b8e7ae6c40d30b9df8629b1b29edb

    <!-- Nav -->
    <nav class="main-nav d-none d-lg-flex">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'container' => false,
          'menu_class' => 'nav-list d-flex gap-4 m-0 p-0',
        ));
      ?>
    </nav>

    <!-- Book Now Button -->
    <div class="header-btn d-none d-lg-block">
      <a href="#booking" class="btn">Book Now</a>
    </div>

<<<<<<< HEAD
  <!-- Hero Content -->
  <div class="hero-content text-center text-white position-absolute top-50 start-50 translate-middle px-3">
	<img style="width: 300px; height: 300px; object-fit: contain;"  src="<?php echo get_template_directory_uri(); ?>/assets/images/maxims-icon-logo.png" />
    <h1 class="display-3 fw-bold" style="color: gold!important;">Maxims Banquet</h1>
    <p class="lead">Experience the difference with our solution.</p>
    <a href="#about" class="btn btn-primary btn-lg mt-3">Get Started</a>
  </div>
</header>
=======
    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-toggle d-lg-none" aria-label="Toggle menu">
      <span class="burger"></span>
    </button>
  </div>

  <!-- Mobile Nav -->
  <div class="mobile-nav d-lg-none">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'container' => false,
        'menu_class' => 'mobile-nav-list list-unstyled',
      ));
    ?>
    <a href="#booking" class="btn btn-gold w-100 mt-3">Book Now</a>
  </div>
</header>
<script>
	// JS to toggle sticky
window.addEventListener('scroll', function () {
  const header = document.getElementById('site-header');
  if (window.scrollY > 100) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
});
</script>
>>>>>>> 84015567f22b8e7ae6c40d30b9df8629b1b29edb
