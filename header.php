<?php
/**
 * The header for Maxims Banquet & Events theme
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

<header id="site-header" class="main-header transparent-header">
  <div class="container d-flex align-items-center justify-content-between py-3">

    <!-- Left: Logo -->
    <div class="site-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php the_custom_logo(); ?>
      </a>
    </div>

    <!-- Center: Navigation -->
    <nav class="main-nav d-none d-lg-flex mx-auto">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-1',
          'container' => false,
          'menu_class' => 'nav-list d-flex gap-4 m-0 p-0',
        ));
      ?>
    </nav>

    <!-- Right: Book Now Button -->
    <div class="header-btn d-none d-lg-block">
      <a href="#booking" class="btn btn-gold">Book Now</a>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-toggle d-lg-none" aria-label="Toggle menu">
      <span class="burger"></span>
    </button>
  </div>

  <!-- Mobile Nav -->
  <div class="mobile-nav d-lg-none">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'menu-1',
        'container' => false,
        'menu_class' => 'mobile-nav-list list-unstyled',
      ));
    ?>
    <a href="#booking" class="btn btn-gold w-100 mt-3">Book Now</a>
  </div>
</header>

<script>
  window.addEventListener('scroll', function () {
    const header = document.getElementById('site-header');
    header.classList.toggle('sticky', window.scrollY > 100);
  });

  document.querySelector('.mobile-menu-toggle')?.addEventListener('click', () => {
    document.querySelector('.mobile-nav')?.classList.toggle('show');
  });
</script>
