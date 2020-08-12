<?php get_header();?>


<!-----  HERO SECTION ---->
<div id="hero-container"  style="background-image: url(<?php the_field('hero_background_image'); ?>)">
<div id="hero">
    <div id="center-info">
        <h1><?php the_field('hero_headline'); ?></h1> 
        <h4><?php the_field('hero_subheadline'); ?></h4>
		<a class="red-btn bg-accent-color" href="<?php ?>">Contact Us</a>
    </div>
</div>  <!-- end hero -->
</div>
    
<!-----  OUR STYLE ---->
<div class="two-column bg-white">
	<div>
	<img src="<?php the_field('our_style_photo'); ?>" />
	</div>
	
    <div>   
        <h2>OUR STYLE</h2>
		<div class="headline-divider"></div>
        <p>We practice Jim Richardson's Tai Crane Karate which is comprised of Okinawan Shorin Ryu Matsumura Seito & Kenpo Karate.</p>
        <p>Our Shorin Ryu stream is from Hohan Soken, Fusie Kise, Ken Penland and Jim Richardson.</p>
        <p>Our Kenpo stream is from Chow, Ed Parker, Dave German and Jim Richardson. </p> 
	</div>
</div>

<!-----  ABOUT ---->
<div class="two-column bg-gray">
    <div >
        <img class="img-drop-shadow" src="<?php the_field('about_photo'); ?>" />
    </div>

	<div>
      <h2>ABOUT OUR SENSAI</h2>
		<div class="headline-divider align"></div>
      <p><?php the_field('about_paragraph') ?></p>
   </div>   
</div>

<!-----  ADDRESS ---->
<div  id="address" class="bg-accent-color">

    <div>
        <h2>CONTACT</h2>
		<dl>
			<dt class="text-accent-color">Address:</dt>
			<dd><?php the_field('street_address'); ?></dd>
			<dd><?php the_field('city_state_zipcode'); ?></dd>
			<dt class="text-accent-color">Phone:</dt>
			<dd><?php the_field('phone_number'); ?></dd>
			<dt class="text-accent-color">Email:</dt>
			<a href="mailto:<?php the_field('email_address'); ?>" target="_blank"><dd><?php the_field('email_address'); ?></dd></a>
		</dl>
    
    </div>
    
    <div>
        <h2>SCHEDULE</h2>
        <h3 style="color:#7d7d7d">Tues. & Thur.</h3>
		<dl>
        <dt class="text-accent-color">Tiny Tots Age 3-6</dt>
        <dd><?php the_field('tiny_tots_times'); ?></dd>
        <dt class="text-accent-color">Youth Ages 7+</dt>
        <dd><?php the_field('youth_times'); ?></dd>
        <dt class="text-accent-color">Adult & Teens</dt>
        <dd><?php the_field('adult_and_teens_times'); ?></dd>
		</dl>
    </div>
</div>

<!-----  MAP ---->
<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.4232955530615!2d-118.0527470490492!3d33.93023943150162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2d33d9c20a2dd%3A0x8d616fbae85bcdb6!2s13201+Meyer+Rd%2C+Whittier%2C+CA+90605!5e0!3m2!1sen!2sus!4v1558035407942!5m2!1sen!2sus" style="width:100%; max-width:100%; height:300px" frameborder="0" style="border:0" allowfullscreen></iframe>      
</div>

<!-----  IMAGE GALLERY SECTION ---->
<div id="image-sec" class="bg-black">
    <?php
      $args = array(
        'post_type' => 'image',
        'posts_per_page' => 3,
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
 <div class="redirect-btn-section bg-black" >
     <a class="red-btn" href="<?php echo site_url('/gallery'); ?>">View All Images</a>
</div>

<!-----  BLOG SECTION ---->
<div id="blog">
    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'paged' => get_query_var( 'paged' )
      );
        global $wp_query;
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
     echo paginate_links();
    wp_reset_postdata();
    ?>
</div>

 <div class="redirect-btn-section bg-gray" >
     <a class="red-btn" href="<?php echo site_url('/blog'); ?>">View All Posts</a>
</div>  
 

<?php get_footer();?>