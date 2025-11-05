<?php 
/*
Template Name: Front Page
*/ 
?>
<?php get_header(); ?>
<!-- 	<section class="banner" id="fp-banner">
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
						<?php the_field('banner_quote'); ?>
					</div>
				</div>
			</div>
			<?php get_template_part('block', 'fp-localnav');?>
		</div>
		<?php get_template_part('block', 'local-links');?>	
	</section> -->
	<?php get_template_part('block', 'banner');?>
	<section id="fp-intro">
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
						<img src="/wp-content/uploads/2018/10/homepage-harlan-manhattan-criminal-lawyer-background-img.jpg" alt="a photo of attorney Harlan Protass" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container_inner"><p id="practice" class="section-tag centered">02 <span class="line">&nbsp;</span>&nbsp;Practice Areas</p></div>
	<?php get_template_part('block', 'practice-areas');?>

	<div class="container_inner"><p id="clients" class="section-tag dash">03 <span class="line">&nbsp;</span> Our Clients Speak For Themselves</p></div>
	<section id="fp-clients">
		<div class="rellax letter-L" data-rellax-speed="-5" data-rellax-percentage="0.5" data-rellax-zindex="0"></div>
		<div class="container_inner">
			<div class="three_columns clearfix">
				<div class="column1"><div class="column_inner">
					<?php the_field('fp_clients_1'); ?>
				</div></div>
				<div class="column2 wow fadeInUp" data-wow-delay="100ms"><div class="column_inner">
					<?php the_field('fp_clients_2'); ?>
				</div></div>
				<div class="column3 wow fadeInUp" data-wow-delay="150ms"><div class="column_inner">
					<?php the_field('fp_clients_3'); ?>
				</div></div>
			</div>
		</div>
		<div class="rellax letter-P" data-rellax-speed="4" data-rellax-percentage="0.9" data-rellax-zindex="0"></div>
		
	</section>

	<section id="fp-publications">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1 wow fadeInUp" data-wow-delay="150ms">
					<div class="column_inner">
						<p id="clients" class="section-tag dash">04 <span class="line">&nbsp;</span> Press & Publications</p>
						<?php the_field('publications_content'); ?>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						<!-- <?php if( have_rows('publications') ) : $counter = 1; ?>
							<ul class="publications-slider">
								<?php while( have_rows('publications') ): the_row(); 
									// vars
									$name = get_sub_field('publications_name');
									$link = get_sub_field('publications_url');
									$title = get_sub_field('publications_title');
									$content = get_sub_field('publications_content');
									$image = get_sub_field('publications_image');
								?>
								<li>
									<a href="<?php echo $link; ?>" title="<?php echo $title; ?>" target="_blank">
									<p class="item-number <?php echo $counter; ?>">0<?php echo $counter; ?>/03</p>
									<p class="section-tag"><?php echo $name; ?></p>
									<h3><?php echo $title; ?></h3>
									<?php echo $content; ?>
									<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" />
									</a>
								</li>
								<?php $counter++; endwhile; ?>
							</ul>	
						<?php endif; ?>	 -->

						<?php if( have_rows('publications') ) : $counter = 1; ?>
							<div class="publications-slider">
								<?php while( have_rows('publications') ): the_row(); 
									// vars
									$name = get_sub_field('publications_name');
									$link = get_sub_field('publications_url');
									$title = get_sub_field('publications_title');
									$content = get_sub_field('publications_content');
									$image = get_sub_field('publications_image');
								?>
								<div class="outer-wrapper">
									<div class="inner-wrapper">
										<a href="<?php echo $link; ?>" title="<?php echo $title; ?>" target="_blank">
										<p class="item-number <?php echo $counter; ?>">0<?php echo $counter; ?>/03</p>
										<p class="section-tag"><?php echo $name; ?></p>
										<h3><?php echo $title; ?></h3>
										<?php echo $content; ?>
										<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" />
										</a>
									</div>
								</div>
								<?php $counter++; endwhile; ?>
							</div>	
						<?php endif; ?>	

					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container_inner"><p id="impact" class="section-tag centered">05 <span class="line">&nbsp;</span> Track Record of Excellence</p></div>
	<section id="fp-excellence">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1"><div class="column_inner">
					<?php the_field('fp_excellence_1'); ?>
				</div></div>
				<div class="column2"><div class="column_inner">
					<?php the_field('fp_excellence_2'); ?>
				</div></div>
			</div>
		</div>
	</section>

	<?php get_template_part('block', 'contact');?>
	
<?php get_footer(); ?>			