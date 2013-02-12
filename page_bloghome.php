<?php

	/*
		Template Name: Blog Homepage
	*/


?>

	<?php get_header(); ?>

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
	
	<?php get_sidebar(); ?>
	
		</div><!--end sidebar container-->
	
			<div id="blog_container">
																																														
			


					<?php query_posts("posts_per_page=5"); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

							<div class="entry"><br>
								<?php the_content(); ?>
							</div>

							<div class="postmetadata">
								<?php the_tags('Tags: ', ', ', '<br />'); ?>
								Posted in <?php the_category(', ') ?> | 
								<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?><br><br><br><br><br><br><br><br>
							</div>

						</div>

					<?php endwhile; ?>

					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

					<?php else : ?>

						<h2>Not Found</h2>

					<?php endif; ?>																	
																								
			</div><!--end blog container-->
		
	</div><!--END  CONTENT-->
	</div><!--END content_wrapper-->
		<div id="main_bottom">
		</div><!-- END MAIN bottom-->	
	</div><!--END MAIN-->



	
	
	</div><!--END CONTAINER-->	
	
		
</body>






<?php get_footer(); ?>
