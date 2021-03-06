<?php get_header();  ?>
<?php include 'secondaryHeader.php' ?>

<div class="main">
  <div class="container">

    <div class="content about">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      	<?php $image = get_field('bio_image'); ?>
		<img class="bio-image" src="<?php echo $image['sizes']['medium'] ?>">
      	<div class="bio">
        <p><?php the_field('bio'); ?></p>
         <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'secondary'
        )); ?>
        </div>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>