<footer>

<div>
    <a id="brand-Logo"><?php bloginfo('name');?></a>
    <ul>
		<li class="footer-info">13201 E. Meyer Rd.</li>
		<li class="footer-info">Whittier, CA 90605</li>
		<li class="footer-info">(562) 569-2136</li>
	
	</ul>
</div>
    
<div>  
    <?php wp_nav_menu(
       array(
           'theme_location' => 'footer-menu', 
           'menu_class' => 'footer-menu'
            )
    );?>
</div>
    
<div id="parks-recs">
    <h3>In conjunction with</h3>
    <img src="<?php echo get_theme_file_uri('/images/LA_County_Department_of_Parks_and_Recreation_seal.png') ?>" style="max-width:100px"/>

    <p>Los Angeles County <br/>
       Department of Parks & Recreation<br/> 
       Southeast Recreation District 
    </p>
</div> 
    

    
<?php wp_footer(); ?>
    
</footer>
</body>
</html>

    
    
    
