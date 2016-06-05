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
      <?php $image = get_field('contact_image') ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="contact-image" style="background-image: url(' <?php echo $image['url']; ?> ');"> </div>
        <?php the_content() ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>