<?php
/**
 * Template Name: Distributors
 *
 * @package YourThemeName
 */

get_header();
?>

<!-- Hero Section -->
<section class="distributors-hero-section position-relative py-5">
  <div class="container text-center position-relative">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/herbo-icon.png" alt="Herbo Icon" class="herbo-icon-bg d-none d-md-block">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" alt="logo" class="section-icon">
    <h1 class="hero-title mb-3">Our Global Distributors</h1>
    <p class="hero-subtext text-muted mb-0">Meet our trusted partners bringing herbal wellness to the world.</p>
  </div>
</section>

<!-- Distributors Grid -->
<section class="distributors-grid-section py-5">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h2 class="section-title">Our Trusted Partners</h2>
      <p class="text-muted">Bringing nature’s best to every corner of the globe</p>
    </div>

    <div class="row g-4">

      <!-- Distributor 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="distributor-card p-4 text-center shadow rounded">
          <h5 class="distributor-location text-success mb-2">Toronto, Canada</h5>
          <h3 class="distributor-name mb-3">Green Essence</h3>
          <p class="distributor-desc">Experts in organic herbal remedies across Canada, specializing in cold-climate herbs.</p>
          <a href="#" class="btn btn-success mt-3">Visit Website</a>
        </div>
      </div>

      <!-- Distributor 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="distributor-card p-4 text-center shadow rounded">
          <h5 class="distributor-location text-success mb-2">Barcelona, Spain</h5>
          <h3 class="distributor-name mb-3">Ayurvida Global</h3>
          <p class="distributor-desc">Trusted Mediterranean distributor of Ayurvedic teas and oils. Partnered since 2020.</p>
          <a href="#" class="btn btn-outline-success mt-3">Read More</a>
        </div>
      </div>

      <!-- Distributor 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="distributor-card p-4 text-center shadow rounded">
          <h5 class="distributor-location text-success mb-2">Auckland, New Zealand</h5>
          <h3 class="distributor-name mb-3">Herbal Union</h3>
          <p class="distributor-desc">Eco-friendly packaging and sustainable sourcing of herbal supplements.</p>
          <a href="#" class="btn btn-success mt-3">Visit Website</a>
        </div>
      </div>

      <!-- Add more distributor cards as needed -->

    </div>
  </div>
</section>

<!-- World Map Placeholder -->
<section class="distributors-map-section py-5">
  <div class="container text-center">
    <h2 class="section-title mb-4">Our Global Presence</h2>
    <div class="map-placeholder rounded shadow overflow-hidden">
      <iframe
        src="https://www.google.com/maps/d/embed?mid=1abcdEFGHIJKLMNOPQRstuVWXYZ" 
        width="100%" 
        height="500"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"></iframe>
    </div>
  </div>
</section>

<?php get_footer(); ?>
