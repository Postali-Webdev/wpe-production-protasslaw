<?php 
/*
Template Name: Interior Page
*/ 
?>
<?php get_header(); ?>
	<?php get_template_part('block', 'banner');?>
	<section id="interior-body">
		<div class="container_inner skinny">
			<div class="two_columns_33_66 clearfix">
				<div class="column1">
					<div class="column_inner">
						<!-- <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('interior-page-links') ) : ?><?php endif; ?> -->
						<?php the_field('interior_page_links'); ?>
						<div id="load-more">View More</div>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						<?php the_field('interior_content'); ?>
						<?php get_template_part('block', 'interior-case-result');?>
						<?php the_field('interior_content_2'); ?>
						<?php get_template_part('block', 'interior-contact-form');?>
						<?php the_field('interior_content_3'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	

	
	
<?php get_footer(); ?>			