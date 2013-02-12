<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<?php if (is_page_template('page-property.php')) { ?>	
	<link rel="stylesheet" href="http://rosyhomes.com/wp-content/themes/Rosy_Homes_Theme/css/property.css" type="text/css" media="screen" />
	<?php } ?>

	<?php if (is_page_template('page-category.php')) { ?>	
	<link rel="stylesheet" href="http://rosyhomes.com/wp-content/themes/Rosy_Homes_Theme/css/page_category.css" type="text/css" media="screen" />
	<?php } ?>	
	
	<?php if (is_page_template('page-bio.php')) { ?>	
	<link rel="stylesheet" href="http://rosyhomes.com/wp-content/themes/Rosy_Homes_Theme/css/bio.css" type="text/css" media="screen" />
	<?php } ?>

	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="http://rosyhomes.com/wp-content/themes/Rosy_Homes_Theme/css/nivo-slider.css" type="text/css" media="screen" />
	
	<script src="http://rosyhomes.com/wp-content/themes/Rosy_Homes_Theme/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	$(window).load(function() {
	    $('#slider').nivoSlider({
	        effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
	        slices: 15, // For slice animations
	        boxCols: 8, // For box animations
	        boxRows: 4, // For box animations
	        animSpeed: 500, // Slide transition speed
	        pauseTime: 5000, // How long each slide will show
	        startSlide: 0, // Set starting Slide (0 index)
	        directionNav: false, // Next & Prev navigation
	        directionNavHide: true, // Only show on hover
	        controlNav: false, // 1,2,3... navigation
	        controlNavThumbs: false, // Use thumbnails for Control Nav
	        controlNavThumbsFromRel: false, // Use image rel for thumbs
	        controlNavThumbsSearch: '.jpg', // Replace this with...
	        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
	        keyboardNav: false, // Use left & right arrows
	        pauseOnHover: false, // Stop animation while hovering
	        manualAdvance: false, // Force manual transitions
	        captionOpacity: 0.8, // Universal caption opacity
	        prevText: 'Prev', // Prev directionNav text
	        nextText: 'Next', // Next directionNav text
	        beforeChange: function(){}, // Triggers before a slide transition
	        afterChange: function(){}, // Triggers after a slide transition
	        slideshowEnd: function(){}, // Triggers after all slides have been shown
	        lastSlide: function(){}, // Triggers when last slide is shown
	        afterLoad: function(){} // Triggers when slider has loaded
	    });
	});
	</script>
	
	
	
	
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	

