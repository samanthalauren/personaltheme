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
         
          <div class="cell">
            <div class="description">
            <a href="index.php?page_id=122" class="portfoliolink">
              <img src="<?php the_sub_field('pitem'); ?>" alt="">
            </a>
            <p class="titleTwo"><?php the_sub_field('ptools'); ?></p>
            <p><?php the_sub_field('pblurb'); ?></p>
            <p  class="tool"><?php the_sub_field('utilized'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
           <a href="http://www.samanthacross.ca/samcross_week7/" class="view">View Live</a>
           <a href="http://www.samanthacross.ca/fab/" class="view two">View Live</a>
           <a href="http://www.samanthacross.ca/petfinder-app/" class="view three">View Live</a>
           <a href="http://www.samanthacross.ca/delphinos/" class="view four">View Live</a>
        </div>
      </div>
      
      <?php endwhile; // end the loop?>

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>