<?php 
/*
Template Name: About Page
*/ 
?>
<?php get_header(); ?>
<!-- 	<section class="banner" id="about-banner">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1">
					<div class="column_inner">
						<div id="banner-content">
							<?php the_field('banner_content'); ?>
						</div>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<?php get_template_part('block', 'banner');?>
	<section id="about-intro">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1 wow fadeInUp" data-wow-delay="150ms">
					<div class="column_inner">
						<p id="about" class="section-tag dash">01 <span class="line">&nbsp;</span> Firm Overview</p>
						<?php the_field('intro_content'); ?>
						<?php get_template_part('block', 'awards');?>
					</div>
				</div>
				<div class="column2 wow fadeInUp" data-wow-delay="250ms">
					<div class="column_inner">
						<img src="/wp-content/uploads/2018/10/about-cornell-img.jpg" alt="a photo of a clock tower at cornell university" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container_inner"><p id="press" class="section-tag centered">02 <span class="line">&nbsp;</span> Press & Publications</p></div>
	<?php get_template_part('block', 'press-publications');?>

	<section id="about-hire">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1 wow fadeInUp" data-wow-delay="150ms">
					<div class="column_inner">
						<img src="/wp-content/uploads/2018/10/about-why-hire-background-img.jpg" alt="a photo of a gavel on a desk" />
					</div>
				</div>
				<div class="column2 wow fadeInUp" data-wow-delay="250ms">
					<div class="column_inner">
						<p class="section-tag dash">03 <span class="line">&nbsp;</span> Why Hire Protass Law PLLC</p>
						<?php the_field('hire_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container_inner"><p class="section-tag centered">04 <span class="line">&nbsp;</span>&nbsp;Practice Areas</p></div>
	<?php get_template_part('block', 'practice-areas');?>
	
	<section id="about-history">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1 wow fadeInUp" data-wow-delay="150ms">
					<div class="column_inner">
						<p class="section-tag dash">05 <span class="line">&nbsp;</span> History of Protass Law PLLC</p>
						<?php the_field('history_content'); ?>
					</div>
				</div>
				<div class="column2 wow fadeInUp" data-wow-delay="250ms">
					<div class="column_inner">
						<img src="/wp-content/uploads/2018/10/about-history-background-img.jpg" alt="a photo of a person's hands writing on a document with a pen" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('block', 'contact');?>
	
<?php get_footer(); ?>			