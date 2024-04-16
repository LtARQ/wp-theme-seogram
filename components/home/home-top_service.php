<?php
/*
* Home page top service area Templates / section / components
*
*@package evs_seogram
*/
?>
<div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary"><?php echo get_theme_mod('service_1_heading', 'SEO Consultancy'); ?></h5>
              <p><?php echo get_theme_mod('sa_1_des', 'We help you define your SEO objective & develop a realistic strategy with you'); ?></p>
              <a href="<?php echo get_theme_mod('sa_1_btn_link', 'blog'); ?>" class="btn btn-primary"><?php echo get_theme_mod('sa_1_btn_text', 'Read More'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/service-2.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary"><?php echo get_theme_mod('service_2_heading', 'Content Marketing'); ?></h5>
              <p><?php echo get_theme_mod('sa_2_des', 'We help you define your SEO objective & develop a realistic strategy with you'); ?></p>
              <a href="<?php echo get_theme_mod('sa_2_btn_link', 'blog'); ?>" class="btn btn-primary"><?php echo get_theme_mod('sa_2_btn_text', 'Read More'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/service-3.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary"><?php echo get_theme_mod('service_3_heading', 'Keyword Research'); ?></h5>
              <p><?php echo get_theme_mod('sa_3_des', 'We help you define your SEO objective & develop a realistic strategy with you'); ?></p>
              <a href="<?php echo get_theme_mod('sa_3_btn_link', 'blog'); ?>" class="btn btn-primary"><?php echo get_theme_mod('sa_3_btn_text', 'Read More'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->