<?php get_header(); ?>

  <!-- Top Service area of the front page -->
  <?php get_template_part( 'components/home/home', 'top_service' ); ?>

  <!-- About Section Area of the Home Page. Link from about_section template -->
  <?php get_template_part( 'components/home/home', 'about' ); ?>

  <!-- More sub service area of the home page -->
  <?php get_template_part( 'components/home/home', 'bottom_service' ); ?>

  <div class="page-section banner-seo-check">
    <div class="wrap bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg_pattern.svg);">
      <div class="container text-center">
        <div class="row justify-content-center wow fadeInUp">
          <div class="col-lg-8">
            <h2 class="mb-4">Check your Website SEO</h2>
            <form action="#">
              <input type="text" class="form-control" placeholder="E.g google.com">
              <button type="submit" class="btn btn-success">Check Now</button>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Pricing Plan</div>
        <h2 class="title-section">Choose plan the right for you</h2>
        <div class="divider mx-auto"></div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">Basic</div>
              <div class="price">
                <span class="dollar">$</span>
                <h1>39<span class="suffix">.99</span></h1>
              </div>
              <h5>Per Month</h5>
            </div>
            <div class="body">
              <p>25 Analytics <span class="suffix">Campaign</span></p>
              <p>1,300 Change <span class="suffix">Keywords</span></p>
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">Optimization</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-pricing btn-block">Subscribe</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing marked">
            <div class="header">
              <div class="pricing-type">Standar</div>
              <div class="price">
                <span class="dollar">$</span>
                <h1>59<span class="suffix">.99</span></h1>
              </div>
              <h5>Per Month</h5>
            </div>
            <div class="body">
              <p>25 Analytics <span class="suffix">Campaign</span></p>
              <p>1,300 Change <span class="suffix">Keywords</span></p>
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">Optimization</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-pricing btn-block">Subscribe</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">Professional</div>
              <div class="price">
                <span class="dollar">$</span>
                <h1>99<span class="suffix">.99</span></h1>
              </div>
              <h5>Per Month</h5>
            </div>
            <div class="body">
              <p>25 Analytics <span class="suffix">Campaign</span></p>
              <p>1,300 Change <span class="suffix">Keywords</span></p>
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">Optimization</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-pricing btn-block">Subscribe</a>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!-- Banner info -->
  <div class="page-section banner-info">
    <div class="wrap bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg_pattern.svg);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
            <h2 class="title-section">SEO to Improve Brand <br> Visibility</h2>
            <div class="divider"></div>
            <p>We're an experienced and talented team of passionate consultants who breathe with search engine marketing.</p>
            
            <ul class="theme-list theme-list-light text-white">
              <li>
                <div class="h5">SEO Content Strategy</div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
              </li>
              <li>
                <div class="h5">B2B SEO</div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <div class="img-fluid text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner_image_2.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->

  <!-- Blog -->
  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our Blog</div>
        <h2 class="title-section">Read Latest News</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5">

        <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '3'));
        // echo $query->found_posts;
        // var_dump($query);
        if($query->have_posts()) {
          while($query->have_posts()) : $query->the_post();
            // echo the_title();
            // echo "<br>";      
        ?>
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-1.jpg" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>
        
        <?php
        endwhile;
          
          wp_reset_postdata();
        }
        ?>

        <div class="col-12 mt-4 text-center wow fadeInUp">
          <a href="blog.html" class="btn btn-primary">View More</a>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>