<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maxims_Banquet
 */

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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'maxims-banquet' ); ?></a>

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
  

  <!-- Overlay for Darkening (optional) -->
  <div class="hero-overlay"></div>

  <!-- Navigation/Header -->
  <nav class="navbar navbar-expand-lg navbar-dark container-fluid py-3 position-absolute top-0 start-0 w-100 d-none">
    <div class="container">
      <a class="navbar-brand" href="#">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/maxims-logo.png" />
		</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Content -->
  <div class="hero-content text-center text-white position-absolute top-50 start-50 translate-middle px-3">
	<img style="width: 300px; height: 300px; object-fit: contain;"  src="<?php echo get_template_directory_uri(); ?>/assets/images/maxims-icon-logo.png" />
    <h1 class="display-3 fw-bold" style="color: gold!important;">Maxims Banquet</h1>
    <p class="lead">Experience the difference with our solution.</p>
    <a href="#about" class="btn btn-primary btn-lg mt-3">Get Started</a>
  </div>
</header>
