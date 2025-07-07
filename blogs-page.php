<?php
// Template Name: Blogs
get_header();
?>

<div class="blogs-page">
  <section class="products-hero-section position-relative py-5">
    <div class="container text-center">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/herbo-icon.png" alt="Herbo Icon" class="herbo-icon-bg d-none d-md-block">
    
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" alt="logo" class="section-icon">
      <h1 class="hero-title mb-3">Our Blogs</h1>
      <p class="hero-subtext text-muted mb-0">
        Latest news and updates from National Herbs
      </p>
    </div>
  </section>

  <section class="blogs-list container">
    <article class="blog-card">
      <div class="blog-thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog1.jpg" alt="Basil Blog">
      </div>
      <div class="blog-content">
        <h2 class="blog-title">5 Amazing Benefits of Basil</h2>
        <p class="blog-meta">June 15, 2025 • Herbal Remedies</p>
        <p class="blog-excerpt">
          Discover how basil can help boost immunity, reduce inflammation, and improve digestion in natural ways.
        </p>
        <a href="#" class="read-more">Read More →</a>
      </div>
    </article>

    <article class="blog-card">
      <div class="blog-thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog2.jpg" alt="Turmeric Blog">
      </div>
      <div class="blog-content">
        <h2 class="blog-title">Turmeric: Nature’s Golden Healer</h2>
        <p class="blog-meta">June 10, 2025 • Ayurveda</p>
        <p class="blog-excerpt">
          Learn about the anti-inflammatory properties of turmeric and how to incorporate it into your daily life.
        </p>
        <a href="#" class="read-more">Read More →</a>
      </div>
    </article>
  </section>
</div>

<?php get_footer(); ?>
