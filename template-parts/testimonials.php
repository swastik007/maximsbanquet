<section id="testimonials" class="testimonials-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home.jpg');">
  <div class="overlay"></div>

  <div class="container section-title mb-5" data-aos="fade-up">
    <span class="subtitle">Testimonials</span>
    <h2 class="title">What Peoples Say!</h2>
  </div>  

  <div class="container position-relative text-center">
    <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="testimonial-content">
            <i class="fas fa-quote-left quote-icon"></i>
            <p class="testimonial-text">
              <em>Ambience – The hall is really spacious to accommodate 450-500 people. The decorations are really nice!</em>
            </p>
            <div class="testimonial-author-block">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aseem.jpg" alt="Aseem Kapoor" class="testimonial-img">
              <h5 class="testimonial-author">Aseem Kapoor</h5>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="testimonial-content">
            <i class="fas fa-quote-left quote-icon"></i>
            <p class="testimonial-text">
              <em>Excellent food and exceptional service! Truly a memorable experience.</em>
            </p>
            <div class="testimonial-author-block">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/neha.jpg" alt="Neha Sharma" class="testimonial-img">
              <h5 class="testimonial-author">Neha Sharma</h5>
            </div>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="custom-carousel-btn"><i class="fas fa-arrow-left"></i></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="custom-carousel-btn"><i class="fas fa-arrow-right"></i></span>
      </button>
    </div>
  </div>
</section>
