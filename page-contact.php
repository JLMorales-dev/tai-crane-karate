<?php 
/* 
Template Name: Full-width layout
*/ 
?>
<?php get_header(); ?>

<div id="contact-section">
<?php if(have_posts()) : while(have_posts()) : the_post();?>

	
<div id="form-wrapper">
<h1><?php the_title(); ?></h1>
<div class="headline-divider align"></div>
<?php the_content(); ?> 
</div>	
 <?php endwhile; endif;?>
    





</div>
<?php get_footer();?>