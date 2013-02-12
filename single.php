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
																																														
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

						<h2><?php the_title(); ?></h2>

						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

						<div class="entry"><br>
							
							<?php the_content(); ?>

							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

							<?php the_tags( 'Tags: ', ', ', ''); ?>

						</div>

						<?php edit_post_link('Edit this entry','','.'); ?>

					</div>

				<br><br><br>
				<?php comments_template(); ?>

				<?php endwhile; endif; ?>																
																								
			</div><!--end blog container-->
		
	</div><!--END  CONTENT-->
	</div><!--END content_wrapper-->
		<div id="main_bottom">
		</div><!-- END MAIN bottom-->	
	</div><!--END MAIN-->



	
	
	</div><!--END CONTAINER-->	
	
		
</body>

<?php get_footer(); ?>






