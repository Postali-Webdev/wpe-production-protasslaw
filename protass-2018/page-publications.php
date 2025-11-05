<?php 
/*
Template Name: Press and Publications
*/ 
?>
<?php get_header(); ?>	
<?php get_template_part('block', 'banner');?>

<section class="archive-body" id="testimonial-content">
	<div class="container_inner">
		<div class="two_columns_66_33 clearfix">
			<div class="column1"><div class="column_inner">
				<div class="tabs">
				<ul class="tabs-nav">
					<li class="active"><a class="btn animate" href="#tabid1">Notable Articles</a></li><li><a class="btn animate" href="#tabid2">Press Coverage</a></li>
				</ul>
				<div class="tabs-container">
				<p></p>
				<div id="tabid1" class="tab-content" style="display: block;">
					<h2>Notable Articles</h2>
					<div class="item-holder">
					<?php
						$custom_query = new WP_Query( 
							array(
							   	'post_type' => 'publications', 
							    'meta_key' => 'press_or_article',
	            				'meta_value' => 'articles',
							    'order' => 'DESC', 
							    'posts_per_page' => -1
							) 
						);
						if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<div class="publication-holder">
							<div class="publication-inner">
							<p class="source"><?php the_field('source'); ?></p>
							<?php if( get_field('link') ): ?>
								<a href="<?php the_field('link'); ?>" title="open pdf" target="_blank"><h3 class="publication-title"><?php the_title(); ?></h3></a>
							<?php endif; ?>
						    <?php if( get_field('pdf') ): ?>
						    	<a href="<?php the_field('pdf'); ?>" title="open pdf" target="_blank"><h3 class="publication-title"><?php the_title(); ?></h3></a>
						    <?php endif; ?>
							
							<p class="section-tag">Written by Harlan Protass</p>
							<?php the_content(); ?>

						    <?php if( get_field('link') ): ?>
								<p class="section-tag"><a href="<?php the_field('link'); ?>" title="open pdf" target="_blank">Read Article</a></p>
							<?php endif; ?>
						    <?php if( get_field('pdf') ): ?>
						    	<p class="section-tag"><a href="<?php the_field('pdf'); ?>" title="open pdf" target="_blank">Open PDF</a></p>
						    <?php endif; ?>
						    <?php if( get_field('image') ): ?>
						    	<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" />
						    <?php endif; ?>
						    <?php the_post_thumbnail($size); ?>
						</div></div>
						<?php endwhile; endif; wp_reset_query();
					?>
				</div></div>
				<div id="tabid2" class="tab-content" style="display: none;">
					<h2>Press Coverage</h2>
					<?php
						$custom_query = new WP_Query( 
							array(
							   	'post_type' => 'publications', 
							    'meta_key' => 'press_or_article',
	            				'meta_value' => 'press',
							    'order' => 'DESC', 
							    'posts_per_page' => -1
							) 
						);
						if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<div class="publication-holder">
							<p class="case"><span class="section-tag">CASE:</span> <?php the_field('case'); ?></p>
							<p class="source"><?php the_field('source'); ?></p>
							<?php if( get_field('link') ): ?>
								<a href="<?php the_field('link'); ?>" title="open link" target="_blank"><h3 class="publication-title"><?php the_title(); ?></h3></a>
							<?php endif; ?>
						    <?php if( get_field('pdf') ): ?>
						    	<a href="<?php the_field('pdf'); ?>" title="open link" target="_blank"><h3 class="publication-title"><?php the_title(); ?></h3></a>
						    <?php endif; ?>
							

						    <?php if( get_field('link') ): ?>
								<p class="section-tag"><a href="<?php the_field('link'); ?>" title="open pdf" target="_blank">Read Article</a></p>
							<?php endif; ?>
						    <?php if( get_field('pdf') ): ?>
						    	<p class="section-tag"><a href="<?php the_field('pdf'); ?>" title="open pdf" target="_blank">Open PDF</a></p>
						    <?php endif; ?>
						    <?php if( get_field('image') ): ?>
						    	<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" />
						    <?php endif; ?>
						    <?php the_post_thumbnail($size); ?>
						</div>
						<?php endwhile; endif; wp_reset_query();
					?>
				</div>
				</div>
			</div>
			</div></div>
			<div class="column2"><div class="column_inner">
				<h2>Blog Posts</h2>
				<?php
						$custom_query = new WP_Query( 
							array(
							   	'post_type' => 'post', 
							    'order' => 'DESC', 
							    'posts_per_page' => 1
							) 
						);
						if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<div class="publication-holder">
							<span class="date section-tag"><?php the_time( 'd, F Y' ); ?></span>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<h3 class="publication-title"><?php the_title(); ?></h3>
							</a>
							<?php the_excerpt(); ?>
						    <?php the_post_thumbnail($size); ?>
						    <p class="topic"><?php esc_html_e( 'Topic:', 'qode' ); ?> <span class="category"><?php the_category( ', ' ); ?></span></p>
						</div>
						<?php endwhile; endif; wp_reset_query();
					?>
					<p class="section-tag"><a href="/legal-blog/" title="Legal Blog">Visit 'Legal Blog'</a></p>
					</div>
					<div class="column_inner">
					<h2>Case Results</h2>
				<?php
					$custom_query = new WP_Query( 
						array(
						   	'post_type' => 'results', 
						    'order' => 'DESC', 
						    'posts_per_page' => 2
						) 
					);
					if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
					<div class="publication-holder">
						<h3 class="publication-title"><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>

					</div>
					<?php endwhile; endif; wp_reset_query();
				?>
				<p class="section-tag"><a href="/results/" title="case results">Visit 'Case Results' Page</a></p>
			</div></div>
		</div>



</div>
</section>
<?php get_footer(); ?>			