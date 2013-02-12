



<?php get_header(); ?>

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
	
	<h2>Error 404 - Page Not Found</h2>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				

				

				<div class="entry">

					<?php the_content(); ?>

					

				</div>

			

			</div>

			

			<?php endwhile; endif; ?>
	
</div><!--END  CONTENT-->
</div><!--end wrapper-->
<div id="main_bottom">

</div><!-- END MAIN bottom-->	
</div><!--END MAIN-->

</div><!--END CONTAINER-->	

	


<?php get_footer(); ?>
