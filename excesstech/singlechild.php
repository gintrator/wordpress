<?php
/*
Template Name: Standard; Child Page
*/
?>

<?php get_header(); ?>
 
	<div id="content-wrapper">
	
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		 
		<div class="content">
		
			<?php $parentlink = get_permalink($post->post_parent); ?>
			<a class="back-to-parent-link" href="<?php echo $parentlink; ?>">&laquo; Back to <?php $parent_title = get_the_title($post->post_parent); echo $parent_title;?></a>

				
			<h1 class="page-title">
				<?php $parent_title = get_the_title($post->post_parent); echo $parent_title;?>
				&raquo;
				<?php the_title(); ?>
			</h1>
			
			
			
			<div class="dash"></div>

			<?php the_content(); ?>

		</div>
	
	
		 
		<?php endwhile; ?>
		<?php endif; ?>
	
	</div>
	
<?php get_sidebar(); ?>   
<?php get_footer(); ?>