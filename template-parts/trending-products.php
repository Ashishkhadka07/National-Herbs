<?php
// Define product arrays manually
$new_arrivals = [
  ['name' => 'Scar Shine Combo', 'img' => get_template_directory_uri() . '/assets/images/products/scar_shine_skin_care_combo_sets.jpg', 'rating' => 5],
  ['name' => 'Aloe Neem Face Wash', 'img' => get_template_directory_uri() . '/assets/images/products/aloeneem_facewash.jpg', 'rating' => 5],
  ['name' => 'Chiuree Neem with Turmeric', 'img' => get_template_directory_uri() . '/assets/images/products/chiuree_neem.jpg', 'rating' => 5],
  ['name' => 'Danta Kawach Herbal Toothpaste', 'img' => get_template_directory_uri() . '/assets/images/products/danta_kawach.jpg', 'rating' => 5],
  ['name' => 'Gastric Care Herbal Tea', 'img' => get_template_directory_uri() . '/assets/images/products/gastric_care_herbal_tea.jpg', 'rating' => 5],
  ['name' => 'Ginger Onion Shampoo', 'img' => get_template_directory_uri() . '/assets/images/products/ginger_onion_shamoo.jpg', 'rating' => 5],
  ['name' => 'Premium Multani Mitti', 'img' => get_template_directory_uri() . '/assets/images/products/multani_mitti.jpg', 'rating' => 5],
  ['name' => 'Kesh Yog Hair Care Oil', 'img' => get_template_directory_uri() . '/assets/images/products/keshyog_haircare_oil.jpg', 'rating' => 5],
];

// Bestseller products
$bestseller = [
  ['name' => 'Onion Hair Oil', 'img' => get_template_directory_uri() . '/assets/images/products/onion_hairoil.jpg', 'rating' => 5],
  ['name' => 'Organic Green Tea', 'img' => get_template_directory_uri() . '/assets/images/products/organic_green_tea.jpg', 'rating' => 5],
  ['name' => 'Pain Relief Massage Oil', 'img' => get_template_directory_uri() . '/assets/images/products/painrelief_massage_oil.jpg', 'rating' => 5],
  ['name' => 'Rosemary Hair Oil', 'img' => get_template_directory_uri() . '/assets/images/products/rosemary_hair_oil.jpg', 'rating' => 5],
  ['name' => 'Scar Shine Antimarks Soap', 'img' => get_template_directory_uri() . '/assets/images/products/scarshine_antimarks_soap.jpg', 'rating' => 5],
  ['name' => 'Scar Shine Whitening Cream', 'img' => get_template_directory_uri() . '/assets/images/products/scarshine_antimarks_whitening_cream.jpg', 'rating' => 5],
  ['name' => 'Scar Shine Face Wash', 'img' => get_template_directory_uri() . '/assets/images/products/scarshine_facewash.jpg', 'rating' => 5],
  ['name' => 'Scar Shine Vitamin-C Serum', 'img' => get_template_directory_uri() . '/assets/images/products/scarshine_vitaminc_serum.jpg', 'rating' => 5],
];

// Special products
$special = [
  ['name' => 'Scar Shine Moisturizing Cream', 'img' => get_template_directory_uri() . '/assets/images/products/scarshine_mosturizing_cream.jpg', 'rating' => 5],
  ['name' => 'Slim Plus Jadibuti Tea', 'img' => get_template_directory_uri() . '/assets/images/products/slimplus_jadibuti_tea.jpg', 'rating' => 5],
  ['name' => 'Sun Screen Cream SPF-40', 'img' => get_template_directory_uri() . '/assets/images/products/sunscreen_cream_spf40.jpg', 'rating' => 5],
  ['name' => 'Sun Screen Cream SPF-50', 'img' => get_template_directory_uri() . '/assets/images/products/sunscreen_cream_spf50.jpg', 'rating' => 5],
  ['name' => 'Tulsi Herbal Tea', 'img' => get_template_directory_uri() . '/assets/images/products/tulsi_herbal_tea.jpg', 'rating' => 5],
];

function render_products($products) {
  foreach ($products as $product) {
    ?>
    <div class="col-6 col-sm-4 col-md-3">
      <div class="product-card text-center">
        <!-- <?php if ($product['discount']): ?>
          <div class="product-badge"><?php echo $product['discount']; ?> OFF</div>
        <?php endif; ?> -->
        <img src="<?php echo esc_url($product['img']); ?>" alt="<?php echo esc_attr($product['name']); ?>">
        <h5 class="product-name"><?php echo esc_html($product['name']); ?></h5>
        <div class="rating">
          <?php echo str_repeat('★', $product['rating']); ?>
          <?php echo str_repeat('☆', 5 - $product['rating']); ?>
        </div>
        <!-- <div class="price">
          <span class="new-price">$<?php echo $product['price']; ?></span>
          <span class="old-price">$<?php echo $product['old_price']; ?></span>
        </div> -->
      </div>
    </div>
    <?php
  }
}
?>

<section class="trending-products-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" alt="logo" class="section-icon mb-3">
      <h2 class="section-title">Trending Products</h2>
      <p class="section-subtitle text-muted">Browse our most loved products</p>
    </div>

    <!-- Tabs -->
    <div class="tabs mb-4 text-center">
      <button class="tab-btn active" data-tab="new">New Arrivals</button>
      <button class="tab-btn" data-tab="bestseller">Bestseller</button>
      <button class="tab-btn" data-tab="special">Special</button>
    </div>

    <!-- Tab Content -->
    <div class="tab-content">
      <div class="tab-panel active" id="new">
        <div class="row g-4 justify-content-center">
          <?php render_products($new_arrivals); ?>
        </div>
      </div>
      <div class="tab-panel" id="bestseller">
        <div class="row g-4 justify-content-center">
          <?php render_products($bestseller); ?>
        </div>
      </div>
      <div class="tab-panel" id="special">
        <div class="row g-4 justify-content-center">
          <?php render_products($special); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const tabs = document.querySelectorAll('.tab-btn');
  const panels = document.querySelectorAll('.tab-panel');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(btn => btn.classList.remove('active'));
      panels.forEach(panel => panel.classList.remove('active'));

      tab.classList.add('active');
      document.getElementById(tab.dataset.tab).classList.add('active');
    });
  });
});
</script>
