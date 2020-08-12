<?php 


get_header();?>
<!--<h1>this is index.php</h1> -->

<div id="blog-page">
    
   

     <?php
       
      $args = array(
		'paged' => get_query_var('paged', 1),
        'post_type' => 'post',
        'posts_per_page' => 3,
      );
          
      $blogposts = new WP_Query($args);
    
      while($blogposts->have_posts()){
          $blogposts->the_post();
      
    ?>
    
    
<div class="blog-card">
    <header class="bg-accent-color">
        <h2><?php the_title(); ?></h2>
    </header>
    <div class="blog-card-imgdiv">
        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
    </div>
    <div class="blog-card-content">
        <div class="post-meta">posted on <?php the_time('F j, Y'); ?>
        </div>
         <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
        <a class="red-btn bg-accent-color" href="<?php the_permalink(); ?>">Read Post</a>
    </div>
</div>

  
  
 <?php } 
    wp_reset_query(); 
  ?>
  
</div>
 <div class="blog-pagination">
     <?php	echo paginate_links(array(
    'total' => $blogposts->max_num_pages)); ?>
</div>   

<?php get_footer();?>