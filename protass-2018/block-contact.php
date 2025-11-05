<?php
/**
 * Contact Block Element
 *
 * @package protass
 * @author Postali
 */
?>
<?php if ( is_page_template( 'page-category.php' ) ) { ?>
<section id="contact-block">
	<div class="container_inner extra-skinny wow fadeInUp" data-wow-delay="150ms">
		<p id="contact" class="section-tag centered">Contact Protass Law PLLC</p>
		<h2 class="centered"><?php the_field('category_contact_title'); ?></h2>
			<?php the_field('category_contact'); ?>
			<div class="banner-contact">
				<p><span class="blue">PH: </span><a href="tel:212.455.0335" class="ibp" title="Call Protass Law Today">212.455.0335</a></p><p class="highlight"><span class="blue">EM: </span><a href="mailto:hprotass@protasslaw.com" title="email harlan protass">hprotass@protasslaw.com</a></p>
			</div>
		<?php echo do_shortcode('[gravityform id="1" title="true"]'); ?>
	</div>
</section>

<?php } else { ?>

<section id="contact-block">
	<div class="container_inner extra-skinny">
		<p id="contact" class="section-tag centered">06 <span class="line">&nbsp;</span> Available 24/7</p>
		<h2 class="centered">Contact Harlan Protass for a Free Consultation</h2>
			<div class="banner-contact">
				<p><span class="blue">PH: </span><a href="tel:212.455.0335" class="ibp" title="Call Protass Law Today">212.455.0335</a></p><p class="highlight"><span class="blue">EM: </span><a href="mailto:hprotass@protasslaw.com" title="email harlan protass">hprotass@protasslaw.com</a></p>
			</div>
		<?php echo do_shortcode('[gravityform id="1" title="true"]'); ?>
	</div>
</section>

<?php } ?>
