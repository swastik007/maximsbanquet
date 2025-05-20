<?php
/**
 * Template Name: Gallery
 */
get_header();
?>

<section class="gallery-section bg-dark" id="gallery">
    <div class="container section-title mb-5" data-aos="fade-up">
        <span class="subtitle">Gallery</span>
        <h2 class="title">Captured the moments we lived for</h2>
    </div>
    <div class="container">

        <div class="swiper gallery-slider" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php
                $gallery_images = [
                    'gallery-1.jpg',
                    'gallery-2.jpg',
                    'gallery-3.jpg',
                    'gallery-7.jpg',
                    'gallery-4.jpg',
                    'gallery-6.jpg',
                    'gallery-7.jpg',
                ];

                foreach ($gallery_images as $image) :
                    $img_url = get_template_directory_uri() . '/assets/images/' . $image;
                ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url($img_url); ?>" alt="Event">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    new Swiper(".gallery-slider", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
        },
        loop: true,
        autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        }
    });

  AOS.init({
    duration: 800,
    delay: 400
  });
});
</script>