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
  <!-- Theme designed by Sylvia Nguyen -->
</head>

<?php 
  $blog_title = get_bloginfo( 'title' );
  $blog_explode = explode(" ", $blog_title);
?>

<body <?php body_class(); ?>>

<header>
  <div class="container">
    <div class="top-nav">
      <ul class="top-nav-title">
        <a href="<?php echo home_url( '/' ); ?>">
          <li>
          <span class="top-nav-title-first">
            <?php echo substr($blog_explode[0], 0, 1); ?>
          </span>
            <?php echo substr($blog_explode[1], 0, 1); ?>
          </li>
        </a>
      </ul>
     <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
    </div>
  </div>
</header><!--/.header-->

