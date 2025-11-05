<?php get_header(); ?>
	
<?php get_template_part('block', 'banner');?>

	<section class="archive-body">
	<div class="container_inner clearfix">
			<div class="two_columns_66_33 clearfix">
				<div class="column1"><div class="column_inner">
					<h2>Blog Posts</h2>
				<div class="blog_holder">
				<?php $first = true; ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // phpcs:ignore ?>
					<article class="<?php echo ( has_post_thumbnail() ? '' : 'no_image' ); ?>">
						<div class="post_text_holder">
							<div class="post_text_inner">
								<span class="create">
									<span class="date section-tag"><?php the_time( 'd, F Y' ); ?></span>
								</span>
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								<?php the_excerpt(); ?>
								<p class="topic"><?php esc_html_e( 'Topic:', 'qode' ); ?> <span class="category"><?php the_category( ', ' ); ?></span></p>
								<!-- <p><a href="<?php the_permalink(); ?>" class="btn">Read Blog Post</a></p> -->
							</div>
						</div>
						    <?php if ( $first ): ?>
      							<div class="post_image">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
									<div class="header-wrap" style="background: url('<?php echo esc_attr( $background_img[0] ); ?>' ) no-repeat;"></div>
								</a>
								</div>
							    <?php $first = false; ?>
    						<?php endif; ?>
<!-- 						<?php if ( has_post_thumbnail() ) : ?>
						
						<?php endif; ?> -->
					</article>
				<?php endwhile; ?>
				<?php if($qode_options_passage['pagination'] != "0") : ?>
					<?php pagination($wp_query->max_num_pages, $wp_query->max_num_pages, $paged); ?>
				<?php endif; ?>
				<?php else: //If no posts are present ?>
					<div class="entry">                        
						<p><?php _e('No posts were found.', 'qode'); ?></p>    
					</div>
				<?php endif; ?>
				</div>
			</div></div>
			<div class="column2"><div class="column_inner">
				<h2>Press &amp; Publications</h2>
				
				<?php
					$custom_query = new WP_Query( 
						array(
						   	'post_type' => 'publications', 
						    'meta_key' => 'press_or_article',
            				'meta_value' => 'articles',
						    'order' => 'DESC', 
						    'posts_per_page' => 1
						) 
					);
					if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
					<div class="publication-holder">
						
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
							<p class="section-tag"><a href="<?php the_field('link'); ?>" title="open pdf" target="_blank">Read More</a></p>
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
				<p class="section-tag"><a href="/press/" title="Press & Publications">Visit 'Press & Publications' Page</a></p>
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