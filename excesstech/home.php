<?php
/*
Template Name: Standard; Home Page
*/
?>

<?php get_header(); ?>
 
	<div id="content-wrapper">
	
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		 
		<div class="content">

			<?php the_content(); ?>

		</div>
	
	
		 
		<?php endwhile; ?>
		<?php endif; ?>
	
	</div>
	
<?php get_sidebar(); ?>   
<?php get_footer(); ?>