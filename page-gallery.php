<?php get_header(); ?>

<!-----  GALLERY SECTION ---->
<div id="image-sec" class="bg-gray">
    <?php
      $args = array(
		'paged' => get_query_var('paged', 1),
        'post_type' => 'image',
        'posts_per_page' => 12
      );
          
      $imageposts = new WP_Query($args);
    
      while($imageposts->have_posts()){
          $imageposts->the_post();
    ?>

 <div class="image-post">
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-post'); ?> </a>  
    
 </div>
    <?php } 
   wp_reset_postdata();
  ?>
</div>

 <div class="blog-pagination">
     <?php	echo paginate_links(array(
    'total' =>  $imageposts->max_num_pages)); ?>
</div>  
	

<?php get_footer();?>

