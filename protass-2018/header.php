<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php 
global $qode_options_passage;
global $wp_query;
$disable_qode_seo = "";
$seo_title = "";
if (isset($qode_options_passage['disable_qode_seo'])) $disable_qode_seo = $qode_options_passage['disable_qode_seo'];
if ($disable_qode_seo != "yes") {
	$seo_title = get_post_meta($wp_query->get_queried_object_id(), "qode_seo_title", true);
	$seo_description = get_post_meta($wp_query->get_queried_object_id(), "qode_seo_description", true);
	$seo_keywords = get_post_meta($wp_query->get_queried_object_id(), "qode_seo_keywords", true);
}
?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php
	$responsiveness = "yes";
	if (isset($qode_options_passage['responsiveness'])) $responsiveness = $qode_options_passage['responsiveness'];
	if($responsiveness != "no"):
	?>
	<meta name=viewport content="width=device-width,initial-scale=1">
	<?php 
	endif;
	?>
	<title><?php if($seo_title) { ?><?php bloginfo('name'); ?> | <?php echo $seo_title; ?><?php } else {?><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?><?php } ?></title>
	<?php if ($disable_qode_seo != "yes") { ?>
	<?php if($seo_description) { ?>
	<meta name="description" content="<?php echo $seo_description; ?>">
	<?php } else if($qode_options_passage['meta_description']){ ?>
	<meta name="description" content="<?php echo $qode_options_passage['meta_description'] ?>">
	<?php } ?>
	<?php if($seo_keywords) { ?>
	<meta name="keywords" content="<?php echo $seo_keywords; ?>">
	<?php } else if($qode_options_passage['meta_keywords']){ ?>
	<meta name="keywords" content="<?php echo $qode_options_passage['meta_keywords'] ?>">
	<?php } ?>
	<?php } ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $qode_options_passage['favicon_image']; ?>">
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M4PHQCG');</script>
	<!-- End Google Tag Manager -->

	<!-- Add JSON Schema here -->
	<?php	// Global Schema
	$global_schema = get_field('global_schema', 'options');
	if ( !empty($global_schema) ) :
		echo '<script type="application/ld+json">' . $global_schema . '</script>';
	endif;

	// Single Page Schema
	$single_schema = get_field('single_schema');
	if ( !empty($single_schema) ) :
		echo '<script type="application/ld+json">' . $single_schema . '</script>';
	endif; ?>

    <?php if (has_post_thumbnail()) {
    $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
    <link rel="preload" as="image" href=" <?php echo $attachment_image; ?>">
    <?php } ?>

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4PHQCG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<header>
	<div class="head-container">
	<div class="head-left">	
		<div id="head-logo">
			<a href="<?php echo home_url(); ?>/" title="home link"><img src="/wp-content/uploads/2018/11/header-logo.svg" alt="Logo"/></a>
		</div>
	</div>

	<div class="head-right">
		<a class="btn" href="/contact/" title="Contact Harlan Protass">Contact Harlan</a>
		<a title="mobile menu button" href="#" id="menu-icon"><div><hr><hr><hr></div></a>
			<div id="slide-nav">
				<?php
		        // The parent theme menu has way too many complications, lets use a simple wp_menu, primary-nav, set in the functions.php file
				    $args = array(
				        'container' => false,
				        'theme_location' => 'primary-nav'
				    );
				    wp_nav_menu( $args );
				?>
			</div>
	</div><!-- end head container -->
</div>


</header>