<?php get_header('pages'); ?>

<div class="container">
    <h1><?php the_title(); ?></h1>
    <h6><?php the_excerpt(); ?></h6>

    <div class="container">
        <?php
            the_post_thumbnail(array(100,100));   
        ?>
        <?php

            $imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');

            echo '<pre>';
            print_r($imgsrc);
            echo '</pre>';
        ?>

    </div>
    <?php the_content();  ?>

    <img src="<?php echo $imgsrc[0]; ?>" alt="abc"/>
</div>
<div class="container">
    <?php get_sidebar();  ?>
</div>

<?php get_footer(); ?>