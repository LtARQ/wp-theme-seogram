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
</head>
<body <?php body_class(); ?>>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="300">
      <div class="container">
        <a href="#" class="navbar-brand"><img src="<?php echo get_header_image([0]); ?>" alt="logo" height"30" width="150"></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapsed" id="navbarContent">
        <?php 
                wp_nav_menu(
                    array(
                        'theme_location'=>'primary_menu',
                    )
                    );
            
            ?>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="<?php site_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active"><?php wp_title(); ?></li>
              </ul>
            </nav>
            <h1 class="text-center"><?php wp_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </header>