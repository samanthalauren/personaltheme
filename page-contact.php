<?php get_header();  ?>

<div class="main">
      <?php // Start the loop ?>
      <div class="contactHeader"> <?php the_content(); ?> </div>
      <div class="content">
     <div class="contactFirst">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
       <p><?php the_field('paragraph'); ?></p>
      </div>

      <div class="form">
        <?php the_field('contact'); ?>
      </div>
      <?php endwhile; // end the loop?>

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>