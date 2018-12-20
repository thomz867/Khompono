<?php
/*
 Template Name: Home
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div class="video-overlay">

	<div class="enter-btn-wrap">
		<div class="desktop-logo">
			<h1>K H O M P O N O</h1>
		</div>
		<div class="enter-btn">
			<a href="<?php the_field('enter_button') ;?>">E N T E R
				<br>
				S I T E
			</a>
		</div>
	</div>

	<div class="video-container">
		<iframe id="player1" width="100%" height="100%" src="https://www.youtube.com/embed/zAmTCAZntV0?autoplay=0&loop=1&playlist=zAmTCAZntV0&controls=0"
		 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; controls; loop"
		 allowfullscreen></iframe>
	</div>
</div>