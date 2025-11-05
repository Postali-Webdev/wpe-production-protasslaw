<?php 
/*
Template Name: Category Page
*/ 
?>
<?php get_header(); ?>
	<?php get_template_part('block', 'banner');?>
	<section id="category-intro">
		<div class="container_inner skinny">
			<div class="two_columns_66_33 clearfix">
				<div class="column1 wow fadeInUp" data-wow-delay="150ms">
					<div class="column_inner">
						<?php the_field('intro_content'); ?>
						&nbsp;
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
<?php if( get_field('category_body_1') ): ?>	
	<section id="category-body">
		<div class="container_inner skinny wow fadeInUp" data-wow-delay="150ms">
			<?php the_field('category_body_1'); ?>
		</div>
	</section>
<?php endif; ?>
	<div class="container_inner"><p id="press" class="section-tag centered">Press & Publications</p></div>
	<?php get_template_part('block', 'press-publications');?>
<?php if( get_field('category_body_2') ): ?>	
	<section id="category-body-2">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1 wow fadeInUp" data-wow-delay="150ms">
					<div class="column_inner">
						<?php the_field('category_body_2'); ?>
					</div>
				</div>
				<div class="column2 wow fadeInUp" data-wow-delay="250ms">
					<div class="column_inner">
						<img src="<?php the_field('category_body_image_2'); ?>" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php if( get_field('category_body_3') ): ?>
	<section id="category-body-3">
		<div class="container_inner extra-skinny wow fadeInUp" data-wow-delay="150ms">
			<?php the_field('category_body_3'); ?>
		</div>
	</section>
<?php endif; ?>	
<?php if( get_field('category_body_4') ): ?>
	<section id="category-body-4">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1 wow fadeInUp" data-wow-delay="150ms">
					<div class="column_inner">
						<img src="<?php the_field('category_body_image_4'); ?>" alt="" />
					</div>
				</div>
				<div class="column2 wow fadeInUp" data-wow-delay="250ms">
					<div class="column_inner">
						<?php the_field('category_body_4'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>	


	<?php get_template_part('block', 'contact');?>
	
<?php get_footer(); ?>			