<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
     <div class="first">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      </div>
    </div>
    </div>
      <div class="about"><?php the_field('title'); ?>
      </div>
      <div class="content container">
      <div class="aboutBlurbs">
         <div>
          <?php the_field('services'); ?>
        </div>
         <div>
          <?php the_field('tools'); ?>
        </div>
        <div>
          <?php the_field('personal'); ?>
        </div>
      </div>
    </div>
    <?php do_shortcode('[ap_instagram_slider]'); ?>
      <?php endwhile; // end the loop?>

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>