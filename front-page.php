<?php get_header(); ?>

<div class="main">
  <div class="container">
  <div class="hero">
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