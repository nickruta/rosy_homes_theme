<?php

	/*
		Template Name: Property Page
	*/


?>


	<?php get_header(); the_post(); ?>

<body>	

	<div id="container">
	<div id="header_container_page">	
	<div id="banner">		
	</div><!--END BANNER-->
	
	<div id="navigation">
		<ul class="nav_menu">
			<?php shailan_dropdown_menu(); ?>
			
		</ul>
	</div><!--END navigation-->
	
	</div><!--END Header_container-->
	



	
	<div id="main">
	<div id="main_top">
	</div><!-- END MAIN TOP-->
	<div id="content_wrapper">
		
		
	<div id="content_blog" class="group">
		
	

		<div id="sidebar_container">
			
			
			<div id="agent_headshot">
					
						<a><img src="http://rosyhomes.com/wp-content/themes/Rosy_Homes_Theme/images/agent_headshot.jpg" alt="agent headshot" border="0" /></a><br>
						
				</div><!--end agentheadshot-->
				
			<div id="agent_info">
			<strong><a href="http://www.rosyhomes.com/contact">Contact Rosy Law</a></strong><br>
			310.948.3574<br>
			rosy@rosyhomes.com<br>
			</div><!--agent info-->
			
			
			<div id="property_info">
				<br>
				<strong>
				City: <?php echo get_post_meta($post ->ID, 'City', true); ?><br>
				State: <?php echo get_post_meta($post ->ID, 'State', true); ?><br>
				Status: <?php echo get_post_meta($post ->ID, 'Status', true); ?><br>
				Price:$ <?php echo get_post_meta($post ->ID, 'Price', true); ?><br>
				Bedrooms: <?php echo get_post_meta($post ->ID, 'Bedrooms', true); ?><br>
				Bathrooms: <?php echo get_post_meta($post ->ID, 'Bathrooms', true); ?><br>
				Type: <?php echo get_post_meta($post ->ID, 'Type', true); ?><br>
				Style: <?php echo get_post_meta($post ->ID, 'Style', true); ?><br>
				Property Size (Sq. Ft.): <?php echo get_post_meta($post ->ID, 'Property_Size', true); ?><br>
				Lot Size (Sq. Ft.): <?php echo get_post_meta($post ->ID, 'lot_size', true); ?><br>
				Year Build: <?php echo get_post_meta($post ->ID, 'year_built', true); ?><br>
				</strong>
				
			</div><!-- end property info-->
			

			
		
			
			
	

		</div><!--end sidebar container-->
	
			<div id="blog_container">
				<h2><?php the_title(); ?></h2>
				
				
					

						<div id="property_description"><br><br>
							
							<?php the_content(); ?>

						<br><br></div><!-- end property description-->
						
						
									<?php 
									    $mapshortcode = '[mappress mapid="'.get_post_meta($post ->ID, 'map_id', true).'"]';
									    echo do_shortcode($mapshortcode); 
									    ?>
				

						
						
<br><br><br><h3>For more information, please contact Rosy at (310)-948-3574 or use the below form.</h3><br>						
<br><?php echo do_shortcode('[contact-form-7 id="64" title="Contact form 1"]'); ?>
																																														
		
			
																			
																								
			</div><!--end blog container-->
		
	</div><!--END  CONTENT-->
	</div><!--END content_wrapper-->
		<div id="main_bottom">
		</div><!-- END MAIN bottom-->	
	</div><!--END MAIN-->



	
	
	</div><!--END CONTAINER-->	
	
		
</body>






<?php get_footer(); ?>
