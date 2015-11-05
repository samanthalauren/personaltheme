<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link href='https://fonts.googleapis.com/css?family=Nobile:400,700,400italic|Work+Sans:400,200,300,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/sass/Hover-master/css/hover.css">
   <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/flickity.min.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home" class="title">
        <?php bloginfo( 'name' ); ?>
      </a>
      <p class="tagline"><?php bloginfo('description') ?></p>
    </h1>
  
  <div class="menu">
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
   <!--  hvr-underline-from-left -->
  </div>
  </div> <!-- /.container -->
</header><!--/.header-->

