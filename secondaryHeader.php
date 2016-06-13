<div class="main">
<?php  
  if ( is_page() ) {
   $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
  <div class="secondary-header" style="background: linear-gradient(rgba(4,11,26,0.5), rgba(4,11,26,0.5)), url('<?php echo $background[0]; ?>'); background-size: cover;">
    <div class="secondary-header-title"> 
      <h1><?php  echo get_the_title(); ?></h1>
    </div>
  </div>
  <?php
  } elseif ( is_home() ) {
  	 $background = wp_get_attachment_image_src( get_post_thumbnail_id( get_option( 'page_for_posts' ) ), 'full' ); ?>
  	<div class="secondary-header" style="background: linear-gradient(rgba(4,11,26,0.5), rgba(4,11,26,0.5)), url('<?php echo $background[0]; ?>'); background-size: cover;">
  	  <div class="secondary-header-title"> 
  	    <h1><?php  echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?></h1>
  	  </div>
  	</div> <?php
  }
  ?>
 	

</div> <!-- /.main -->