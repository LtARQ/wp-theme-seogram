<?php 
  get_header('single'); 
  the_post();
  
  ?>

  <div class="page-section pt-5">
    <div class="container">
      <nav aria-label="Breadcrumb">
        <ul class="breadcrumb p-0 mb-0 bg-transparent">
          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php ?>">Blog</a></li>
          <li class="breadcrumb-item active"><?php the_title(); ?></li>
        </ul>
      </nav>
      
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-single-wrap">
            <div class="header">
              <div class="post-thumb">
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
                <img src="<?php echo $image[0]; ?>" alt="">
              </div>
              <div class="meta-header">
                <div class="post-author">
                  <div class="avatar">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  by <a href="#"><?php the_author(); ?></a>
                </div>

                <div class="post-sharer">
                  <a href="#" class="btn social-facebook"><span class="mai-logo-facebook-f"></span></a>
                  <a href="#" class="btn social-twitter"><span class="mai-logo-twitter"></span></a>
                  <a href="#" class="btn social-linkedin"><span class="mai-logo-linkedin"></span></a>
                  <a href="#" class="btn"><span class="mai-mail"></span></a>
                </div>
              </div>
            </div>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="post-meta">
              <div class="post-date">
                <span class="icon">
                  <span class="mai-time-outline"></span>
                </span> <a href="#"><?php the_date(); ?></a>
              </div>
              <div class="post-comment-count ml-2">
                <span class="icon">
                  <span class="mai-chatbubbles-outline"></span>
                </span> <a href="#">4 Comments</a>
              </div>
            </div>
            <div class="post-content">
                <?php  the_content(); ?>
            </div>
          </div>
          <?php comments_template(); ?>
          

        </div>
        <div class="col-lg-4">
          <div class="widget">
            <!-- Widget search -->
            <div class="widget-box">
              <form action="#" class="search-widget">
                <input type="text" class="form-control" placeholder="Enter keyword..">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
              </form>
            </div>

            <!-- Widget Categories -->
            <div class="widget-box">
              <h4 class="widget-title">Category</h4>
              <div class="divider"></div>

              <ul class="categories">
                <li><a href="#">LifeStyle</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Healthy</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Entertainment</a></li>
              </ul>
            </div>

            <!-- Widget recent post -->
            <div class="widget-box">
              <h4 class="widget-title">Recent Post</h4>
              <div class="divider"></div>

              <div class="blog-item">
                  <a class="post-thumb" href="">
                    <img src="../assets/img/blog/blog-1.jpg" alt="">
                  </a>
                  <div class="content">
                    <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
              </div>

              <div class="blog-item">
                  <a class="post-thumb" href="">
                    <img src="../assets/img/blog/blog-2.jpg" alt="">
                  </a>
                  <div class="content">
                    <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
              </div>

              <div class="blog-item">
                  <a class="post-thumb" href="">
                    <img src="../assets/img/blog/blog-3.jpg" alt="">
                  </a>
                  <div class="content">
                    <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
              </div>

            </div>

            <!-- Widget Tag Cloud -->
            <div class="widget-box">
              <h4 class="widget-title">Tag Cloud</h4>
              <div class="divider"></div>

              <div class="tag-clouds">
                <a href="#" class="tag-cloud-link">Projects</a>
                <a href="#" class="tag-cloud-link">Design</a>
                <a href="#" class="tag-cloud-link">Travel</a>
                <a href="#" class="tag-cloud-link">Brand</a>
                <a href="#" class="tag-cloud-link">Trending</a>
                <a href="#" class="tag-cloud-link">Knowledge</a>
                <a href="#" class="tag-cloud-link">Food</a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3>SEOGram</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure.</p>

          <div class="social-media-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Help & Support</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Us</h5>
          <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
          <a href="#" class="footer-link">+00 1122 3344 5566</a>
          <a href="#" class="footer-link">seogram@temporary.com</a>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <p>Get updates, news or events on your mail.</p>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email..">
            <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
          </form>
        </div>
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2020. This template design and develop by <a href="https://macodeid.com/" target="_blank">MACode ID</a></p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>