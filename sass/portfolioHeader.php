<div class="main">
  <div class="container">
 	<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
  <div class="portfolio-header" style="background: linear-gradient(rgba(4,11,26,0.5), rgba(4,11,26,0.5)), url('<?php echo $background[0]; ?>'); ?> ; background-size: cover;">
    <div class="portfolio-header-title">
      <h1><?php  echo get_the_title(); ?></h1>
    </div>
  </div>


  </div> <!-- /.container -->
</div> <!-- /.main -->