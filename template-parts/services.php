<section class="services" id="services">
  <div class="container">
    <div class="section-title">
      <span class="subtitle">We Provide</span>
      <h2 class="title">One-stop Solution</h2>
    </div>

    <div class="services-wrapper">
      <div class="swiper services-slider">
        <div class="swiper-wrapper services-cards">
          <!-- Card 1 -->
          <div class="swiper-slide service-card">
            <div class="icon">🛕</div>
            <h3>Mandap Setup</h3>
            <p>We ensure all religious aspects are in place and magnificently presented.</p>
          </div>

          <!-- Card 2 -->
          <div class="swiper-slide service-card">
            <div class="icon">🌸</div>
            <h3>Flower Decoration</h3>
            <p>Beautiful setups to reflect your style and theme across all areas.</p>
          </div>

          <!-- Card 3 -->
          <div class="swiper-slide service-card">
            <div class="icon">💡</div>
            <h3>Lighting Setup</h3>
            <p>Our designers add magical lighting effects to your space.</p>
          </div>

          <!-- Card 4 -->
          <div class="swiper-slide service-card">
            <div class="icon">🍽️</div>
            <h3>Catering Services</h3>
            <p>High-quality food and service delivered anywhere you host your event.</p>
          </div>

          <!-- Card 5 -->
          <div class="swiper-slide service-card">
            <div class="icon">🎵</div>
            <h3>DJ & Music</h3>
            <p>Full audio-visual setup with a professional DJ and sound engineer.</p>
          </div>

          <!-- Card 6 -->
          <div class="swiper-slide service-card">
            <div class="icon">🅿️</div>
            <h3>Valet Parking</h3>
            <p>Ample parking space with organized valet service for all guests.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="highlights">
      <h3>Event Highlights</h3>
      <ul>
        <li><strong>Spacious hall</strong> with capacity up to 1000 guests</li>
        <li><strong>Beautiful garden</strong> for various events</li>
        <li><strong>Centrally located</strong> & easily accessible</li>
        <li><strong>Hygienic food</strong> & professional staff</li>
        <li><strong>Ample parking</strong> space available</li>
        <li><strong>Full DJ & sound</strong> with dance floor</li>
        <li><strong>Outstanding hospitality</strong> & many more…</li>
      </ul>
    </div>
  </div>
</section>

<!-- Swiper CSS (add to your header or enqueue) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Swiper JS (add before </body>) -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.services-slider', {
    loop: false,
    grabCursor: true,
    spaceBetween: 30,
    slidesPerView: 'auto',
    centeredSlides: false,
    autoplay: false,
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
</script>
