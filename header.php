<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <div class="top-nav">
      <ul class="top-nav-title">
        <a href="<?php echo home_url( '/' ); ?>">
          <li><span class="top-nav-title-first">J</span>S</li>
        </a>
      </ul>
     <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
    </div>
    <div class="hero">
      <div class="hero-content">
        <div class="hero-name">
          <h1>John Smith</h1>
        </div>
        <div class="hero-title">
          <h1>Front-end Web Developer</h1>
        </div>
      </div>
    </div>
  </div>
</header><!--/.header-->

