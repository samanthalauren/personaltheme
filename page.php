<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

      <h2>Featured Work </h2>

      <?php $portfolioQuery = new WP_query (
            array (
                'post_type' => 'portfolio'
              )
      ); ?>

      <?php if ($portfolioQuery->have_posts()): ?>
        <?php while($portfolioQuery->have_posts()): $portfolioQuery->the_post(); ?>

    </div> <!-- /,content -->
    <p>ON THIS PAGE</p>

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>