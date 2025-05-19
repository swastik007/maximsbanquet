<section id="specials" class="specials section bg-dark text-light py-5">
  <div class="container section-title mb-5" data-aos="fade-up">
    <span class="subtitle">Specials</span>
    <h2 class="title">Check Our Specials</h2>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <!-- Tabs -->
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column" id="specialsTab" role="tablist">
          <?php
          $tabs = ['Wedding Package', 'Corporate Events', 'Birthday Specials', 'Cultural Gatherings', 'Custom Decorations'];
          foreach ($tabs as $i => $tab) {
            $active = $i === 0 ? 'active' : '';
            $id = 'specials-tab-' . ($i + 1);
            echo "<li class='nav-item' role='presentation'>
                    <button class='nav-link $active' id='{$id}-tab' data-bs-toggle='tab' data-bs-target='#{$id}' type='button' role='tab' aria-controls='{$id}' aria-selected='" . ($i === 0 ? 'true' : 'false') . "'>$tab</button>
                  </li>";
          }
          ?>
        </ul>
      </div>

      <!-- Tab Contents -->
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content" id="specialsTabContent">
          <?php
          $specials = [
            [
              'title' => 'Elegant Wedding Celebrations',
              'img' => 'wedding.jpg',
              'italic' => 'Crafted experiences with beautiful décor, catering, and seamless planning.',
              'text' => 'Celebrate your big day in style with our customizable wedding packages. From traditional to modern themes, we provide exquisite ambiance, gourmet menus, and full coordination to make your day unforgettable.',
            ],
            [
              'title' => 'Professional Corporate Events',
              'img' => 'corporate.jpg',
              'italic' => 'Impress your clients and team with our premium event solutions.',
              'text' => 'Whether it’s a seminar, conference, or corporate dinner, Maxims provides state-of-the-art audio-visuals, flexible seating, and top-tier catering. Elevate your brand with us.',
            ],
            [
              'title' => 'Birthday Bash Specials',
              'img' => 'birthday.jpg',
              'italic' => 'Fun-filled birthday parties for all ages with decoration, cake & more.',
              'text' => 'We offer exciting birthday themes, vibrant décor, entertainment options, and delicious menus. Let your loved ones enjoy their special day while we handle everything behind the scenes.',
            ],
            [
              'title' => 'Cultural & Family Gatherings',
              'img' => 'cultural.jpg',
              'italic' => 'From festivals to family milestones, we host it all.',
              'text' => 'Celebrate traditions and family values in a warm and accommodating venue. We cater to cultural needs with appropriate décor, music, and food arrangements tailored to your community.',
            ],
            [
              'title' => 'Customized Decorations & Add-ons',
              'img' => 'decor.jpg',
              'italic' => 'Add your personal touch with themed décor and curated elements.',
              'text' => 'From floral arrangements to custom lighting and stage setups, our décor team brings your vision to life. Personalize your event with elegance and creativity.',
            ]
          ];

          foreach ($specials as $i => $item) {
            $active = $i === 0 ? 'show active' : '';
            $id = 'specials-tab-' . ($i + 1);
            echo "<div class='tab-pane fade $active' id='$id' role='tabpanel' aria-labelledby='{$id}-tab'>
                    <div class='row align-items-center'>
                      <div class='col-lg-8 details order-2 order-lg-1'>
                        <h3>{$item['title']}</h3>
                        <p class='fst-italic text-gold'>{$item['italic']}</p>
                        <p>{$item['text']}</p>
                      </div>
                      <div class='col-lg-4 text-center order-1 order-lg-2'>
                        <img src='" . get_template_directory_uri() . "/assets/images/{$item['img']}' alt='{$item['title']}' class='img-fluid rounded'>
                      </div>
                    </div>
                  </div>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
