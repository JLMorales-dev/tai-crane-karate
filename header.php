<!DOCTYPE html>
<html>
    <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
        
        <?php wp_head();?>
    </head>
<body <?php body_class();?>>
    
<header id="header" class="bg-accent-color">
    <a id="brand-Logo"><!--<?php bloginfo('name');?>-->
        <img src="<?php echo get_theme_file_uri('/images/TaiCrane_logo_Horizontal-1.jpg') ?>"/></a> 
    
  <nav id="top-nav" class="bg-accent-color">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        
         <?php wp_nav_menu(

       array(
       'theme_location' => 'top-menu', 
       'menu_class' => 'main-nav'
       )
    
);?>
       </nav>
      </header> 
    
    