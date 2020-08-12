<?php get_header();?>
<h1>this is archive.php</h1>

<div class="container">
  <div class="row">
    
    <div class="col-sm-12">
      
      <h1><?php single_cat_title();?></h1>
      
      <?php if(have_posts()) : while(have_posts()) : the_post();?>
        
        <div class="card">
            <div class="card-body">
           <h3><?php the_title();?></h3>
           <?php the_excerpt();?>
        <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
              </div>
          </div>  
            
      <?php endwhile; endif;?>
      
      
      </div>
      
    
    
    
    </div>


</div>

<?php get_footer();?>