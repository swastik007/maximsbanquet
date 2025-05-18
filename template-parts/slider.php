<?php
/**
 * Slider Section Template
 *
 * @package Maxims_Banquet
 */
?>

<section class="main-slider">
    <div id="banquetSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.jpg" class="d-block w-100" alt="Banquet Hall">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Elegant Banquet Hall</h3>
                    <p>Make your events memorable</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide2.jpg" class="d-block w-100" alt="Catering">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Delicious Catering</h3>
                    <p>Fine dining at your service</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide3.jpg" class="d-block w-100" alt="Events">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Perfect Events</h3>
                    <p>Celebrate your special day in style</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#banquetSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#banquetSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
