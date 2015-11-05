<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
     <div class="first">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <div class="portfolio-gallery" >
        <?php while( has_sub_field('portfolio')): ?>
          <div class="gallery-cell">
            <img src="<?php the_sub_field('pitem'); ?>" alt="">
            <p><?php the_sub_field('ptools'); ?></p>
            <p><?php the_sub_field('pblurb'); ?></p>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
      
      <?php endwhile; // end the loop?>

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>