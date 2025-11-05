<?php 
/*
Template Name: First Step Act Page
*/ 
?>
<?php get_header(); ?>
	<?php get_template_part('block', 'banner');?>
	<section id="firststep-intro">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1 wow fadeInUp" data-wow-delay="150ms">
					<div class="column_inner">
						<?php the_field('intro_content'); ?>
						
					</div>
				</div>
				<div class="column2 wow fadeInUp" data-wow-delay="250ms">
					<div class="column_inner">
						<?php get_template_part('block', 'interior-contact-form');?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="firststep-body">
		<div class="container_inner skinny wow fadeInUp" data-wow-delay="150ms">
			<?php the_field('body_content'); ?>
			<?php get_template_part('block', 'interior-case-result');?>
			<?php the_field('body_content_2'); ?>
		</div>
	</section>
	<section id="firststep-contact">
		<div class="container_inner skinny">
			<div class="two_columns_66_33 clearfix">
				<div class="column1 wow fadeInUp" data-wow-delay="150ms">
					<div class="column_inner">
						<p class="section-tag">Contact Protass Law PLLC</p>
						<?php the_field('contact_content'); ?>
						<?php echo do_shortcode('[gravityform id="1" title="true"]'); ?>
					</div>
				</div>
				<div class="column2 wow fadeInUp" data-wow-delay="250ms">
					<div class="column_inner">
						<img src="/wp-content/uploads/2018/10/practice-area-category-harlan-headshot-img.jpg" title="a headshot photo of Harlan" />
						<p class="name">Attorney Harlan Protass</p>
						<p class="mini-bio"><?php the_field('mini_bio'); ?></p>
						<a class="blue" href="/harlan-j-protass/" title="read more about Harlan">Read Harlan's Bio</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	
	
<?php get_footer(); ?>			