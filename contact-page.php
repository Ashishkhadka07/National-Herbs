<?php
/**
 * Template Name: Contact Page
 *
 * @package National Herbs
 */

get_header();
?>

<section class="contact-hero-section position-relative py-5">
  <div class="container text-center position-relative">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/herbo-icon.png" alt="Herbo Icon" class="herbo-icon-bg d-none d-md-block">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" alt="logo" class="section-icon">
    <h1 class="hero-title mb-3">Get in Touch with National Herbs</h1>
    <p class="hero-subtext text-muted mb-0">Nature’s best solutions, crafted for your health & wellness — we’d love to hear from you!</p>
  </div>
</section>

<!-- Contact & Info -->
<div class="container py-5">
  <div class="row g-5">
    <!-- Contact Form -->
    <div class="col-lg-6">
      <h2 class="section-title text-center mb-4">Send Us a Message</h2>
      <form action="#" method="post" class="contact-form bg-dark text-white p-4 rounded shadow">
        <div class="row g-3">
          <div class="col-md-6">
            <label for="name" class="form-label">Name *</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Your name">
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email Address *</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="Your email">
          </div>
          <div class="col-md-6">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
          </div>
          <div class="col-12">
            <label for="message" class="form-label">Message *</label>
            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Type your message"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-warning mt-4">Submit</button>
      </form>
    </div>

    <!-- Contact Details -->
    <div class="col-lg-6">
      <h2 class="section-title text-center mb-4">Contact Information</h2>
      <div class="bg-dark text-white p-4 rounded shadow mb-4">
        <h5 class="text-warning">Call Us</h5>
        <p>Have questions? Call our office anytime.<br><strong>+91-9829885383</strong></p>
      </div>
      <div class="bg-dark text-white p-4 rounded shadow mb-4">
        <h5 class="text-warning">Visit Us</h5>
        <p>Head Office:<br>D2/2 - 2nd Floor, Sorakhutte, Kathmandu, Nepal</p>
        <p>Sub Office:<br>Kupondole-2, Lalitpur, Nepal</p>
      </div>
      <div class="bg-dark text-white p-4 rounded shadow">
        <h5 class="text-warning">Email Us</h5>
        <p>info@nationalherbo.com</p>
      </div>
    </div>
  </div>

  <!-- Google Map -->
  <div class="my-5">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.234567890123!2d85.30936!3d27.71866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190123456789%3A0xabcdef1234567890!2sSorakhutte%2C%20Kathmandu%2C%20Nepal!5e0!3m2!1sen!2snp!4v1715600000000"
      width="100%"
      height="400"
      style="border:0; border-radius:8px;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

  <!-- FAQ Section -->
  <div class="my-5">
    <div class="section-header text-center mb-4">
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="text-muted">Find answers to common queries about our products and services</p>
    </div>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item bg-dark text-white mb-2">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            How can I place a bulk order?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">You can contact us directly through the form above or call our office to discuss bulk orders and pricing.</div>
        </div>
      </div>

      <div class="accordion-item bg-dark text-white mb-2">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            Do you ship internationally?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">Yes, we offer international shipping for many of our herbal and ayurvedic products. Contact us for details.</div>
        </div>
      </div>

      <div class="accordion-item bg-dark text-white mb-2">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            Are your products certified?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">All of our products are manufactured in certified facilities adhering to high-quality standards.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

