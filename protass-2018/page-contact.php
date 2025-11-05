<?php 
/*
Template Name: Protass Contact Page
*/ 
?>
<?php get_header(); ?>
<?php 
    if ( has_post_thumbnail( $post->ID ) ) :
        $imageInfo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        $imageUrl = $imageInfo[0];
    else:
        $imageUrl = get_template_directory() . '/img/banner_default.jpg';
    endif;
  ?>
	<section class="banner" id="contact-block" style="background:url('<?php echo $imageUrl; ?>') no-repeat;">
		&nbsp;
	</section>
	<section id="contact-intro">
		<div class="container_inner">
			<div class="yoast-bc-wrap">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
			</div>
			<div class="two_columns_50_50 clearfix">
				<div class="column1">
					<div class="column_inner">
						<h1>Contact Protass Law PLLC</h1>
						<?php the_field('banner_content'); ?>
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
		</div>
	</section>
	<section id="contact-form">
		<div class="container_inner">
			<p class="blue">Submit your case information online</p>
			<?php echo do_shortcode('[gravityform id="1" title="true"]'); ?>
		</div>
	</section>
	
	
<?php get_footer(); ?>			