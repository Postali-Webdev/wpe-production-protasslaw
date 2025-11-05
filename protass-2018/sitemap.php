<?php /*Template Name: Sitemap*/ ?>
<?php get_header(); ?>
<?php get_template_part('block', 'banner');?>

<section id="category-body"><div class="container_inner">	
			<?php if (have_posts()) : 
					while (have_posts()) : the_post(); ?>
					<div class="column_inner">
						
							<!-- SITEMAP -->
<!-- 							<div class="yoast-bc-wrap">
								<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
							</div> -->
                            <div class="two_columns_66_33 clearfix">
                            	<div class="column1">
									<div class="column_inner">
										<h1>Sitemap</h1>
		                            	<div class="two_columns_50_50 clearfix">
										<div class="column1">
											<div class="column_inner">
					                            <p class="section-tag">Pages</p> 
					                                <ul><?php wp_list_pages("title_li=" ); ?></ul> 
					                        </div>
					                    </div>
										<div class="column2">
											<div class="column_inner">        
						                        <p class="section-tag">Blog Posts</p> 
						                            <ul>
						                            	<?php wp_get_archives('type=postbypost'); ?>
						                            </ul>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
							<div class="column2">
								<div class="column_inner">
									<div class="banner-contact">
										<p class="blue">Contact</p>
										<p>PH: <a href="tel:212.455.0335" class="ibp" title="Call Protass Law Today">212.455.0335</a></p>
										<p>EM: <a class="highlight" href="mailto:hprotass@protasslaw.com" title="email harlan protass">hprotass@protasslaw.com</a></p>
									</div>
									<div class="banner-address">
										<p class="blue">Address</p>
										<?php the_field('banner_address'); ?>
									</div>
								</div>
							</div>
					</div>
			<?php endwhile; ?>
			<?php endif; ?>

</div></section>
<?php get_footer(); ?>			