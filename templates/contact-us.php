<?php
/**
 * template name:Contact us
*/
get_header(); ?>
<?php
	// Start the Loop.
	while ( have_posts() ) : the_post(); ?>	
<section class="contact-details py-lg-5 pb-3 pt-md-5 pt-4">
  <div class="container pt-md-0 pt-2">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="contact-details-item text-center py-5 px-4 rounded shadow mb-4 mb-lg-0">
        <div class="contact-details-icon mb-3">
         	<i class="fas fa-map-marked-alt"></i>
        </div>
        <div class="contact-details-content">
          <h4>Address</h4>
          <p><?php echo get_theme_mod('address');?></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="contact-details-item text-center py-5 px-4 rounded shadow mb-4 mb-lg-0">
        <div class="contact-details-icon mb-3">
          <i class="fas fa-envelope-open-text"></i>
        </div>
        <div class="contact-details-content">
          <h4>Email Address</h4>
          <p><a class="text-dark" href="mailto:<?php echo get_theme_mod('email');?>"><?php echo get_theme_mod('email');?></a></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="contact-details-item text-center py-5 px-4 rounded shadow mb-4 mb-lg-0">
        <div class="contact-details-icon mb-3">
       		<i class="fas fa-phone-volume"></i>
        </div>
        <div class="contact-details-content">
          <h4>Phone</h4>
          <p><a class="text-dark" href="tel:<?php echo get_theme_mod('phone_number');?>"><?php echo get_theme_mod('phone_number');?></a></p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="contact-form py-md-5 bg-light pt-5 pb-4">
  <div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6">
      <div class="google-map h-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26374123.22046753!2d-113.77054417486771!3d36.20310182395501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1632743956124!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
	</div>
	<div class="col-lg-6 col-md-6 pt-4 pt-lg-0">
      <div class="form">
         <?php the_content();?>
        <div class="contact-form-wrap">
         <?php echo do_shortcode('[contact-form-7 id="56" title="Contact form 1"]');?>
        </div>
      </div>
	</div>
  </div>
  </div>
 </section>
	
	
<?php 	
	endwhile;
?>


<?php
get_footer();

