<?php get_header();?>

<!--<h1>single.php</h1>-->

<div class="container">
  
    <div class="wrapper">
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
			 <h2><?php the_title();?></h2>
		     <div class="headline-divider"></div>
             <img class="img-drop-shadow" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
		     <p class="post-meta align">posted on <?php the_time('F j, Y'); ?></p>
             <?php the_content();?>
         <?php endwhile; endif;?>
    </div>
      
</div>

<?php get_footer();?>