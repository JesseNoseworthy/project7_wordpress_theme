<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include 'secondaryHeader.php' ?>

<div class="main">
  <div class="container">
    <div class="content blog">
		<div class="blog-intro">
			<?php 
			  $page_title = get_the_title( get_option('page_for_posts', true) );
			  $page_title_print = ucwords($page_title);
			?>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas sapiente iste quas incidunt facere, repudiandae vero cumque ratione unde, placeat est blanditiis nihil tempore eum odio. Necessitatibus sit ipsum repudiandae?</p>
		</div>
    		<?php if(have_posts()) {
				while(have_posts()) {
					the_post();
				?>
					<article class="blog-post">

					<h2><?php the_title(); ?></h2>
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						<div class="post-image-head" style="background: url(' <?php echo $thumb['0']; ?> '); background-size: cover; background-position-y: 45%;"></div>
						<p>Posted on <?php the_time("F d, Y");  ?></p>
						<?php echo get_excerpt(500); ?>
					</article>
				<?php 
				}
			}	?>
    </div> <!--/.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>