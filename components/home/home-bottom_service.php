<?php
/*
* Bottom services area of the home page
*
*@package evs_seogram
*/
?>
<div class="page-section bg-light">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our services</div>
        <h2 class="title-section">How SEO Team Can Help</h2>
        <div class="divider mx-auto"></div>
      </div>
        <div class="row">
          <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '8'));
          if($query->have_posts()){
            while ($query->have_posts()) : $query->the_post();
            $imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');

          ?>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3 d-flex mx-auto" style="overflow: hidden; justify-content:center;">
                <!-- <span class="mai-business"></span> -->
                <img src="<?php echo $imgsrc[0]; ?>" alt="">
              </div>
              <h5><?php the_title(); ?></h5>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
          <?php endwhile; } ?>
    </div> <!-- .container -->
  </div> <!-- .page-section -->