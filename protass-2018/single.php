<?php get_header(); ?>
	<?php get_template_part('block', 'banner');?>
	<section id="blog-body">
		<div class="container_inner skinny">
			<div class="blog_single_holder">	
				<article>
					<?php if(get_post_meta(get_the_ID(), "qode_hide-featured-image", true) != "yes") {
							if ( has_post_thumbnail()) { ?>
								<div class="image">		
									<?php the_post_thumbnail('full'); ?>
								</div>
						<?php }
						}
					?>
					<div class="blog_title_holder">
						 
						<p class="topic"><?php esc_html_e( 'Topic:', 'qode' ); ?> <span class="category"><?php the_category( ', ' ); ?></span></p>
					</div>
					<div class="blog_single_text_holder">
						<div class="text">
							<?php the_content(); ?>
						</div>
						<div class="info">
							<span class="left">
								<span class="section-tag">Share in</span> <?php echo do_shortcode('[social_share]'); ?>
							</span>
							<?php if( has_tag()) { ?><span class="right"><?php the_tags(__('TAGS: ','qode')); ?></span><?php } ?>
						</div>			
						<?php wp_link_pages(); ?>
					</div>
				</article>
			</div>
		</div>
	</section>						
<?php get_footer(); ?>	