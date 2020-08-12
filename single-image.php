<?php 
get_header();?>

<!--<h1>single-image.php</h1>-->

<div class="container">
  
    <div class="wrapper">
        <?php if(have_posts()) : while(have_posts()) : the_post();?>

             <img class="img-drop-shadow" src="<?php echo the_post_thumbnail_url(); ?>" alt=""> 
             <?php the_content();?>
         <?php endwhile; endif;?>
    </div>
      
</div>

<?php get_footer();?>