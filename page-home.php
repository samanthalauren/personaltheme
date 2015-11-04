<?php get_header();  ?>

<div class="main">
    <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <!-- flickity -->
    <div class="main-gallery" >
      <?php while( has_sub_field('images')): ?>
        <div class="gallery-cell">
          <img src="<?php the_sub_field('image'); ?>" alt="">
        </div>
      <?php endwhile; ?>
    </div>
    <div class="aboutMe">
      <?php the_field('blurb'); ?>
    </div>
    <div class="block">
      <div class="recentWork">
          <div class="two-thirds">
            <img src="<?php the_field('large'); ?>" alt="">
          </div>
          <div class="one-third">
            <img src="<?php the_field('medium'); ?>" alt="">
          </div>
          <div class="half">
            <img src="<?php the_field('smaller'); ?>" alt="">
          </div>
          <div class="smaller-half">
            <img src="<?php the_field('smallest'); ?>" alt="">
          </div>
          <div class="button">
            <?php the_field('button'); ?>
          </div> <!-- button -->
      </div> <!-- recentWorks -->
    </div> <!-- block -->
    <div class="working"><p><?php the_field('quote'); ?></p></div>
    <?php endwhile; // end the loop?>
</div> <!-- /.main -->

<?php get_footer(); ?>