<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title><?php bloginfo('name'); wp_title(); if (is_front_page()){ echo' | '; bloginfo('description');}?></title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/maicons.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">

  <style>
    .home-banner {
        background: url(<?php echo get_theme_mod('bg_image', ''); ?>);
    }
  </style>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- Back to top button -->
  <div class="back-to-top"></div>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="<?php bloginfo('url'); ?>" class="navbar-brand"><img src="<?php echo get_header_image([0]); ?>" alt="logo" height="100" width="100"></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location'=>'primary_menu',
                    )
                    );
            
            ?>
          <!-- <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Free Analytics</a>
            </li>
          </ul> -->
        </div>
 
      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4"><?php echo get_theme_mod('top_heading', 'Here you can change the title and tag of the site.'); ?></h1>
            <p class="text-lg text-grey mb-5"><?php echo get_theme_mod('top_text', 'Ignite the most powerfull growth engine you have ever built for your company'); ?></p>
            <a href="<?php echo get_theme_mod('btn_link', 'blog'); ?>" class="btn btn-primary btn-split"><?php echo get_theme_mod('btn_text', 'Watch Video'); ?> <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner_image_1.svg" alt="">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>