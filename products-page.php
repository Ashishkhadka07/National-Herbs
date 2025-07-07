<?php
/**
 * Template Name: Products
 *
 * @package YourThemeName
 */

get_header();
?>

<section class="products-hero-section position-relative py-5">
  <div class="container text-center">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/herbo-icon.png" alt="Herbo Icon" class="herbo-icon-bg d-none d-md-block">
    
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" alt="logo" class="section-icon">
    <h1 class="hero-title mb-3">Explore Our Herbal Product Range</h1>
    <p class="hero-subtext text-muted mb-0">
      Nature’s finest blends — crafted for healthy skin, hair & holistic wellness.
    </p>
  </div>
</section>

<section class="product-grid-section py-5">
  <div class="container">

    <div class="section-header text-center mb-5">
      <h2 class="section-title">Our Herbal Products</h2>
      <p class="text-muted">Carefully crafted for your natural beauty and wellness</p>
    </div>

    <div class="row g-4">

      <?php
      $products = [
        ['Scar Shine Combo', 'scar_shine_skin_care_combo_sets.jpg'],
        ['Aloe Neem Face Wash', 'aloeneem_facewash.jpg'],
        ['Chiuree Neem with Turmeric', 'chiuree_neem.jpg'],
        ['Danta Kawach Herbal Toothpaste', 'danta_kawach.jpg'],
        ['Gastric Care Herbal Tea', 'gastric_care_herbal_tea.jpg'],
        ['Ginger Onion Shampoo', 'ginger_onion_shamoo.jpg'],
        ['Ginger Shampoo', 'ginger_shampoo.jpg'],
        ['Premium Multani Mitti', 'multani_mitti.jpg'],
        ['Kesh Yog Hair Care Oil', 'keshyog_haircare_oil.jpg'],
        ['Onion Hair Oil', 'onion_hairoil.jpg'],
        ['Organic Green Tea', 'organic_green_tea.jpg'],
        ['Pain Relief Massage Oil', 'painrelief_massage_oil.jpg'],
        ['Rosemary Hair Oil', 'rosemary_hair_oil.jpg'],
        ['Scar Shine Antimarks Soap', 'scarshine_antimarks_soap.jpg'],
        ['Scar Shine Antimarks Whitening Cream', 'scarshine_antimarks_whitening_cream.jpg'],
        ['Scar Shine Face Wash', 'scarshine_facewash.jpg'],
        ['Scar Shine Vitamin-C Serum', 'scarshine_vitaminc_serum.jpg'],
        ['Scar Shine Moisturizing Cream', 'scarshine_mosturizing_cream.jpg'],
        ['Slim Plus Jadibuti Tea', 'slimplus_jadibuti_tea.jpg'],
        ['Sun Screen Cream SPF-40', 'sunscreen_cream_spf40.jpg'],
        ['Sun Screen Cream SPF-50', 'sunscreen_cream_spf50.jpg'],
        ['Tulsi Herbal Tea', 'tulsi_herbal_tea.jpg'],
      ];

      foreach ($products as $product) :
      ?>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="product-card">
          <div class="product-img-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/<?php echo esc_attr($product[1]); ?>" alt="<?php echo esc_attr($product[0]); ?>">
          </div>
          <div class="product-body">
            <h5 class="product-title"><?php echo esc_html($product[0]); ?></h5>
            <p class="product-ingredients"><strong>Ingredients:</strong> Turmeric, Saffron, Coconut Oil</p>
            <p class="product-desc">Reduces scars and restores glowing skin naturally.</p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
