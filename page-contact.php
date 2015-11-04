<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
     <div class="first">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
       <div class="contactHeader"> <?php the_content(); ?> </div>
      </div>

      <div class="form">
        <?php the_field('contact'); ?>
      </div>
      <?php endwhile; // end the loop?>

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>