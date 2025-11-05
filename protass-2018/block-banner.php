<?php
/**
 * Banner Block Element
 *
 * @package Protass 2018
 * @author Postali
 */
?>
<?php 
    if ( has_post_thumbnail( $post->ID ) ) :
        $imageInfo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        $imageUrl = $imageInfo[0];
    else:
        $imageUrl = get_template_directory() . '/img/banner_default.jpg';
    endif;
  ?>
<?php if ( is_front_page() ) {?>
	<section id="fp-banner">
		<div class="container_inner">
			<div class="two_columns_66_33 clearfix">
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
	</section>
<?php } else if ( is_page_template( 'page-about.php' ) ){ ?>
	<section class="banner" id="about-banner" style="background: #000000 url('<?php echo $imageUrl; ?>') no-repeat;">
		<div class="container_inner">
			<div class="yoast-bc-wrap">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
			</div>
			<div class="two_columns_50_50 clearfix">
				<div class="column1">
					<div class="column_inner">
						<div id="banner-content">
							<div class="banner-contact">
								<p><span class="blue">PH: </span><a href="tel:212-455-0335" class="ibp" title="Call Protass Law Today">212.455.0335</a></p><p><span class="blue">EM: </span><a href="mailto:hprotass@protasslaw.com" title="email harlan protass">hprotass@protasslaw.com</a></p>
							</div>
							<h1><?php the_title(); ?></h1>
							<p class="subtitle"><?php the_field('banner_content'); ?></p>
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
	</section>
<?php } else if ( is_page_template( 'page-category.php' ) ) { ?>
	<section class="banner" id="category-banner" style="background: #000000 url('<?php echo $imageUrl; ?>') no-repeat;">
		<div class="container_inner">
			<div class="yoast-bc-wrap">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
			</div>
			<div class="two_columns_66_33 clearfix">
				<div class="column1">
					<div class="column_inner">
						<div id="banner-content">
							<div class="banner-contact">
								<p><span class="blue">PH: </span><a href="tel:212.455.0335" class="ibp" title="Call Protass Law Today">212.455.0335</a></p><p><span class="blue">EM: </span><a href="mailto:hprotass@protasslaw.com" title="email harlan protass">hprotass@protasslaw.com</a></p>
							</div>
							<h1><?php the_title(); ?></h1>
							<?php the_field('banner_content'); ?>
						</div>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						<div class="PA_stats">
							<?php echo do_shortcode('[svg-icons custom_icon="pen-icon" wrap="i"]'); ?>
							<?php the_field('banner_stats'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php } else if ( is_page_template( 'page-contact.php' ) || is_page_template( 'sitemap.php' )  ) { ?>
	<section class="banner" id="category-banner" style="background:url('<?php echo $imageUrl; ?>') no-repeat;">
		&nbsp;
	</section>

<?php } else if ( is_page_template( 'page-formsuccess.php' ) ) { ?>
	<section class="banner" id="interior-banner" style="background:url('<?php echo $imageUrl; ?>') no-repeat;">
		<div class="container_inner skinny">
			<h1>Successful Submission</h1>
			<p class="bigText">Thank you for submitting your contact form. Someone will be in touch with you shortly. If you have an urgent matter, please call us at <a href="tel:212.455.0335" class="ibp" title="Call Protass Law Today">212.455.0335</a> to see how Protass Law can help.</p>
		</div>
	</section>

<?php } else if ( is_home() ) { ?>
	<section class="banner" id="interior-banner" style="background: #000000 url('/wp-content/uploads/2018/10/legal-blog-header-img-2.jpg') no-repeat;">
		<div class="container_inner skinny">

		<div class="yoast-bc-wrap">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
		</div>
		<div class="banner-contact">
			<p><span class="blue">PH: </span><a href="tel:212.455.0335" class="ibp" title="Call Protass Law Today">212.455.0335</a></p><p><span class="blue">EM: </span><a href="mailto:hprotass@protasslaw.com" title="email harlan protass">hprotass@protasslaw.com</a></p>
		</div>
		<div class="banner-content">
			<h1>Legal Blog</h1>
				<p><?php the_field('blog_intro_content', 'options'); ?></p>	
		</div>
	</div>
</section>

<?php } else if ( is_post_type_archive( 'results' ) ) { ?>
	<section class="banner" id="interior-banner" style="background: #000000 url('/wp-content/uploads/2018/11/case-results-header-img.jpg') no-repeat;">
		<div class="container_inner skinny">

		<div class="yoast-bc-wrap">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
		</div>
		<div class="banner-contact">
			<p><span class="blue">PH: </span><a href="tel:212.455.0335" class="ibp" title="Call Protass Law Today">212.455.0335</a></p><p><span class="blue">EM: </span><a href="mailto:hprotass@protasslaw.com" title="email harlan protass">hprotass@protasslaw.com</a></p>
		</div>
		<div class="banner-content">
			<h1>Case Results</h1>
				<p><?php the_field('case_results_intro_content', 'options'); ?></p>	
		</div>
	</div>
</section>

<?php } else if ( is_single() ) { ?>
	<section class="banner" id="blog-single-banner">
		<div class="container_inner skinny">

		<div class="yoast-bc-wrap">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
		</div>
		<div class="banner-contact">
			<p><span class="blue">PH: </span><a href="tel:212.455.0335" class="ibp" title="Call Protass Law Today">212.455.0335</a></p><p><span class="blue">EM: </span><a href="mailto:hprotass@protasslaw.com" title="email harlan protass">hprotass@protasslaw.com</a></p>
		</div>
		<div class="banner-content">
				<?php if(!get_post_meta(get_the_ID(), "qode_page-title-text", true)){ ?>
					<h1><?php the_title(); ?></h1>
				<?php } ?>
				<p><span class="date section-tag"><?php the_time( 'd, F Y' ); ?> | Written by Harlan Protass</span></p>	
		</div>
	</div>
</section>

<?php } else if ( is_category() ) { ?>
	<section class="banner" id="interior-banner" style="background:url('/wp-content/uploads/2018/11/case-results-header-img.jpg') no-repeat;">
		<div class="container_inner skinny">

		<div class="yoast-bc-wrap">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
		</div>
		<div class="banner-contact">
			<p><span class="blue">PH: </span><a href="tel:212.455.0335" class="ibp" title="Call Protass Law Today">212.455.0335</a></p><p><span class="blue">EM: </span><a href="mailto:hprotass@protasslaw.com" title="email harlan protass">hprotass@protasslaw.com</a></p>
		</div>
		<div class="banner-content">
			<h1><?php single_cat_title(''); ?></h1>
				<!-- <p><?php the_field('case_results_intro_content', 'options'); ?></p>	 -->
		</div>
	</div>
</section>

<?php } else { ?>
<section class="banner short-banner" id="interior-banner" style="background: #000000 url('<?php echo $imageUrl; ?>') no-repeat;">
		<div class="container_inner skinny">

		<div class="yoast-bc-wrap">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
		</div>
		<div class="banner-contact" style="display: none;"></div>
		<div class="banner-content">
			<h1><?php the_title(); ?></h1>
			<?php if( get_field('banner_content') ): ?>
				<p><?php the_field('banner_content'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php } ?>


