<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
     <div class="portfolioFirst">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <div class="portfolio-gallery" >
        <?php while( has_sub_field('portfolio')): ?>
         
          <div class="gallery-cell">
            <div class="description">
            <a href="index.php?page_id=122" class="portfoliolink">
              <img src="<?php the_sub_field('pitem'); ?>" alt="">
            </a>
            <p class="titleTwo"><?php the_sub_field('ptools'); ?></p>
            <p><?php the_sub_field('pblurb'); ?></p>
            <a href="#" class="view"><?php the_sub_field('live'); ?></a>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
      
      <?php endwhile; // end the loop?>

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>