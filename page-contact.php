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
      	<?php $image = get_field('contact_image'); ?>
		<img class="contact-image" src="<?php echo $image['sizes']['large'] ?>">
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>