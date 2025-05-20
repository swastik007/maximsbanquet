<section id="menu" class="menu section bg-dark text-light py-5">
  <div class="container section-title mb-5" data-aos="fade-up">
    <span class="subtitle">Menu</span>
    <h2 class="title">Check Our Tasty Menu</h2>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <ul class="nav justify-content-center mb-4" role="tablist">
      <?php
      $categories = ['All', 'Starters', 'Main Course', 'Specialty'];
      foreach ($categories as $i => $cat) {
        $active = $i === 0 ? 'active' : '';
        echo "<li class='nav-item mx-2' role='presentation'>
                <button class='nav-link $active' id='menu-tab-$i' data-bs-toggle='tab' data-bs-target='#menu-content-$i' type='button' role='tab'>$cat</button>
              </li>";
      }
      ?>
    </ul>

    <div class="tab-content">
      <?php
      $menu_items = [
        'All' => [
          ['title' => 'Chicken Momo', 'desc' => 'Steamed dumplings filled with minced chicken and spices', 'price' => 'रु 250', 'img' => 'momo.jpg'],
          ['title' => 'Veg Samosa', 'desc' => 'Crispy pastry filled with spiced potatoes and peas', 'price' => 'रु 120', 'img' => 'samosa.jpg'],
          ['title' => 'Chicken Sekuwa', 'desc' => 'Char-grilled marinated chicken cubes with Nepali herbs', 'price' => 'रु 350', 'img' => 'sekuwa.jpg'],
          ['title' => 'Paneer Butter Masala', 'desc' => 'Paneer in rich tomato cream sauce', 'price' => 'रु 480', 'img' => 'paneer.jpg'],
          ['title' => 'Chicken Biryani', 'desc' => 'Aromatic basmati rice with spiced chicken', 'price' => 'रु 550', 'img' => 'biryani.jpg'],
          ['title' => 'Dal Bhat Tarkari', 'desc' => 'Traditional Nepali meal with lentils, rice & vegetables', 'price' => 'रु 400', 'img' => 'dalbhat.jpg'],
          ['title' => 'Mutton Curry', 'desc' => 'Spicy tender mutton cooked in rich gravy', 'price' => 'रु 600', 'img' => 'mutton.jpg'],
        ],
        'Starters' => [
          ['title' => 'Chicken Momo', 'desc' => 'Steamed dumplings filled with minced chicken and spices', 'price' => 'रु 250', 'img' => 'momo.jpg'],
          ['title' => 'Veg Samosa', 'desc' => 'Crispy pastry filled with spiced potatoes and peas', 'price' => 'रु 120', 'img' => 'samosa.jpg'],
          ['title' => 'Chicken Sekuwa', 'desc' => 'Char-grilled marinated chicken cubes with Nepali herbs', 'price' => 'रु 350', 'img' => 'sekuwa.jpg'],
        ],
        'Main Course' => [
          ['title' => 'Paneer Butter Masala', 'desc' => 'Paneer in rich tomato cream sauce', 'price' => 'रु 480', 'img' => 'paneer.jpg'],
          ['title' => 'Chicken Biryani', 'desc' => 'Aromatic basmati rice with spiced chicken', 'price' => 'रु 550', 'img' => 'biryani.jpg'],
          ['title' => 'Dal Bhat Tarkari', 'desc' => 'Traditional Nepali meal with lentils, rice & vegetables', 'price' => 'रु 400', 'img' => 'dalbhat.jpg'],
        ],
        'Specialty' => [
          ['title' => 'Mutton Curry', 'desc' => 'Spicy tender mutton cooked in rich gravy', 'price' => 'रु 600', 'img' => 'mutton.jpg'],
          ['title' => 'Chicken Biryani', 'desc' => 'Aromatic basmati rice with spiced chicken', 'price' => 'रु 550', 'img' => 'biryani.jpg'],
        ]
      ];

      foreach ($categories as $i => $cat) {
        $active = $i === 0 ? 'show active' : '';
        echo "<div class='tab-pane fade $active' id='menu-content-$i' role='tabpanel'>
                <div class='row gy-4'>";
        foreach ($menu_items[$cat] as $item) {
          echo "<div class='col-md-6'>
                  <div class='menu-item d-flex align-items-center'>
                    <img src='" . get_template_directory_uri() . "/assets/images/{$item['img']}' alt='{$item['title']}' class='menu-img me-3'>
                    <div class='menu-content flex-grow-1'>
                      <h5 class='menu-title'>{$item['title']}</h5>
                      <p class='menu-desc'>{$item['desc']}</p>
                    </div>
                    <div class='menu-price ms-auto'>{$item['price']}</div>
                  </div>
                </div>";
        }
        echo "  </div>
              </div>";
      }
      ?>
    </div>
  </div>
</section>
