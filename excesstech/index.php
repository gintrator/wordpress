<?php get_header(); ?>
 
	<div id="content-wrapper">
	
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		 
		<div class="content">
	
		<!--<h2 class="page-title"><?php the_title(); ?></h2>-->

			<?php the_content(); ?>

		</div>
		 
		<?php endwhile; ?>
		<?php endif; ?>
	
	</div>
    
<?php get_sidebar(); ?>   
<?php get_footer(); ?>