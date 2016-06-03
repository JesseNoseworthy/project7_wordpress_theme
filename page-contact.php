<?php /*
Template Name: Contact Page
*/
?>
<?php get_header();  ?>
<?php include 'secondaryHeader.php' ?>

<div class="main">
  <div class="container">

    <div class="content contact">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      	<?php $image = get_field('bio_image'); ?>
		<img class="bio-image" src="<?php echo $image['sizes']['medium'] ?>">
      	<p class="bio"><?php the_field('bio'); ?></p>
        <p><?php the_excerpt(50) ?></p>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>