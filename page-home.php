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
      <p class="homeTitle">Front end development + Design</p>
      <?php the_field('blurb'); ?>
      <a href="index.php?page_id=15"><button>Learn More</button></a>
    </div>
    <div class="block">
    <h2>Packages</h2>
    <div class="packages">
      <div class="content">
        <?php the_field('service_one'); ?>
        <?php the_field('service_two'); ?>
        <?php the_field('service_three'); ?>
      </div>
    </div>
    </div> <!-- block -->
    <div class="working"><p><?php the_field('quote'); ?></p></div>
    <div class="touch"><a href="index.php?page_id=19"><?php the_field('touch'); ?></a></div>
    <?php endwhile; // end the loop?>
</div> <!-- /.main -->

<?php get_footer(); ?>