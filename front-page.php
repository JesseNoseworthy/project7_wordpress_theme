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

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
