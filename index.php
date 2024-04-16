<?php get_header('pages');
wp_head();
// $abc = array('name' =>'value');

// foreach ($abc as $key => $value) {
//     echo $key;
//     echo "<br>";
//     echo $value;
//     die;
// }
?>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <form action="<?php get_template_directory_uri( ) ?>" method="POST" class="form-search-blog">
            <div class="input-group">
              <div class="input-group-prepend">
                <select name="categories" id="categories" class="custom-select bg-light">
                  <option value="all">All Categories</option>
                  
                  <?php 
          
                    $cat = get_categories(array('taxonomy' => 'category'));
                     foreach ($cat as $catvalue ) {

                    ?>
                    <option value="<?php  echo $catvalue->name; ?>"><?php  echo $catvalue->name;?></option>
           
                    <?php }  ?>
                </select>
              </div>
              <input type="text" class="form-control" placeholder="Enter keyword..">
            </div>
            <div class="col-sm-2 text-sm-right">
              <button class="btn btn-secondary" name="serachbtn">Filter <span class="mai-filter"></span></button>
            </div>
          </form>
        </div>
        <div class="col-sm-2 text-sm-right">
          <button class="btn btn-secondary">Filter <span class="mai-filter"></span></button>
        </div>
      </div>

      <div class="row my-5">


      <?php 
       if(have_posts()){
        while(have_posts()){
          the_post();    
          
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
          
      ?>
        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="<?php echo $image[0]; ?>" alt="image">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <div class="text"><?php the_excerpt(); ?></div>
              <div class="post-date">Posted on <a href="#"><?php echo get_the_date(); ?></a></div>
            </div>
          </div>
        </div>
        
<?php  }} ?>

      </div>
      
      <nav aria-label="Page Navigation">
        <ul class="pagination justify-content-center">
        <?php post_pagination(); ?>
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

    </div>
  </div>

  <?php get_footer();
  
  ?>