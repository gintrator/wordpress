<?php get_header(); ?>
 
	<div id="content-wrapper">
	
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		 
		<div class="content">
	
			<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="dash"></div>

			<?php the_content(); ?>

		</div>
		 
		<?php endwhile; ?>
		<?php endif; ?>
	
	</div>
 
<?php get_sidebar(); ?>   
<?php get_footer(); ?>