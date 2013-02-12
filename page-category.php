<?php

	/*
		Template Name: Property Category
	*/


?>

<?php get_header(); the_post(); ?>

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
<div id="content">
	<?php
		
		$categoriesCF = get_post_meta($post->ID, "categories", true);
		// example value = "for_sale|92,for_lease|94"
		
		$allCategories = explode(",", $categoriesCF);
		// $allCategories[0] = "for_sale|92"
		// $allCategories[1] = "for_lease|94"
 
		foreach ($allCategories as $category) {

			$pieces = explode("|", $category);
			// $pieces[0] = "Sprockets"
			// $pieces[1] = 92
					
			$link = get_permalink($pieces[1]);
			echo "<div class='product-group group'>";
			echo "<h3><a href='$link'>" . $pieces[0] . "</a></h3>";

			query_posts("posts_per_page=-1&post_type=page&post_parent=$pieces[1]");

			while (have_posts()) : the_post(); ?>

			 <a href="<?php the_permalink(); ?>" class="product-jump" title="<?php echo "$" . get_post_meta($post->ID, "product_price", true); ?>" data-large="<?php get_post_meta($post->ID, "product_image", true); ?>">

			     <?php echo "<img src='" . get_post_meta($post->ID, "property_featured_image", true) . "' />"; ?>
			     <span class="product-title"><?php the_title(); ?></span>
			<span class="price">City - <?php echo get_post_meta($post->ID, "City", true); ?></span><br>
			<span class="Price">Price - <?php echo get_post_meta($post->ID, "Price", true); ?></span><br>
			     <span class="price">Bedrooms - <?php echo get_post_meta($post->ID, "Bedrooms", true); ?></span>

			 </a>

			<?php endwhile; wp_reset_query();

			echo "</div>";

		};
	?>
	
</div><!--END  CONTENT-->
</div><!--end wrapper-->
<div id="main_bottom">

</div><!-- END MAIN bottom-->	
</div><!--END MAIN-->

</div><!--END CONTAINER-->	

	


<?php get_footer(); ?>
