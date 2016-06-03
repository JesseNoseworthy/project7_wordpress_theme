<?php get_header(); ?>

<div class="main">
  <div class="container">
  <?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
  <div class="hero" style="background: linear-gradient(rgba(4,11,26,0.5), rgba(4,11,26,0.5)), url('<?php echo $background[0]; ?>'); ?> ; background-size: cover;">
    <div class="hero-content">
      <div class="hero-name">
        <h1><?php echo get_bloginfo( 'title' ) ?></h1>
      </div>
      <div class="hero-title">
        <h1><?php echo get_bloginfo( 'description' ) ?></h1>
      </div>
    </div>
  </div>
    <div class="portfolio-head">
      <h1>Portfolio</h1>
    </div>
    <div class="content portfolio-gallery">
        <?php
           global $post;
           $myposts = get_posts('numberposts=6&category=1');
           foreach($myposts as $post) :
         ?>
       <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <div class="blog-article" style="background-image: url('<?php echo $image[0]; ?>'); background-size: cover;">
      <div class="portfolio-content">  
        <h3><?php the_title(); ?></h3>
        <?php echo get_excerpt(500); ?>
        </div>
      </div>
     <?php endforeach; ?>
  </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
