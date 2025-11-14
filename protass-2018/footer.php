<?php global $qode_options_passage; ?>
				
		</div>
	</div>
		<footer>
			<div class="footer_holder clearfix">
				<div class="container_inner">

					<div class="foot-container">
					<div class="foot-left"><div>
						<div class="two_columns_50_50 clearfix">
							<div class="column1"><div class="column_inner">
								<a href="/" class="foot-logo"><img src="/wp-content/uploads/2018/10/footer-logo.png" alt="Protass Law PLLC logo"/></a>
							</div></div>
							<div class="column2"><div class="column_inner">
								<p class="section-tag"><span>Protass Law PLLC</span></p>
								<div>
								<p><span>260 Madison Avenue<br>22nd Floor</span><br><span>New York</span>, <span>NY</span>  <span  itemprop="postalCode">10016-2400</span><br>
								<a class="blue" href="https://www.google.com/maps/dir//260+Madison+Ave+22nd+Floor,+New+York,+NY+10016/@40.7507429,-74.0161421,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x89c25900db695bb9:0xeff8c213ec6544dd!2m2!1d-73.9811227!2d40.7506832!3e0" title="get directions" target="_blank">DIRECTIONS</a></p>
								</div> 
								<p class="contact-phone">
								<strong><span class="blue">PH:</span> <span><a href="tel:212.455.0335" class="ibp" title="Call Protass Law PLLC Today">212.455.0335</a></span></strong><br>
								<strong><span class="blue">FX:</span> 646.607.0760</strong><br>
								<strong><span class="blue">EM:</span> <span><a href="mailto:hprotass@protasslaw.com" title="contact Harlan Protass by email">hprotass@protasslaw.com</a></span></strong>
								</p>
								<div class="iframe-wrapper">
									<iframe src="<?php echo get_field('map_iframe', 'options'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div></div>
						</div>
					</div></div>

					<div class="foot-right">
						<div class="two_columns_50_50 clearfix">
							<div class="column1"><div class="column_inner">
							<p class="section-tag">Navigation</p>
                            <nav role="navigation">
                            <?php
                                $args = array(
                                    'container' => false,
                                    'theme_location' => 'footer-nav'
                                );
                                wp_nav_menu( $args );
                            ?>
                            </nav>
						</div></div>
						<div class="column2"><div class="column_inner">
							<p class="section-tag">Disclaimer</p>
							<p class="disclaimer">The material on this website is for informational purposes only and is not intended to create an attorney-client relationship. Protass Law PLLC expressly disclaims all liability in respect to actions taken or not taken based on the contents of this website. While this website contains attorney advertising under applicable laws and ethical rules, prior results do not guarantee a similar outcome.</p>
							<?php if(is_page(6)) { ?>
                            <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag-reversed.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:10px 0 0;"></a>
                            <?php } ?>
                        </div></div>
					</div>
				</div>
				</div>
			</div>
		</footer>
</div>

	<?php wp_footer(); ?>
	<!-- WOW -->
	<script>
		new WOW(
			{
				mobile: true,
			}
		).init();
	</script>
	<?php if( is_front_page() ): ?>
	<script>
	var scroll = new SmoothScroll('[data-scroll]', {

		// Selectors
			ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
			header: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
			topOnEmptyHash: false, // Scroll to the top of the page for links with href="#"

			// Speed & Easing
			speed: 1000, // Integer. How fast to complete the scroll in milliseconds
			clip: true, // If true, adjust scroll distance to prevent abrupt stops near the bottom of the page
			offset: 110,
			easing: 'easeInOutCubic', // Easing pattern to use

			// History
			updateURL: true, // Update the URL on scroll
			popstate: true, // Animate scrolling with the forward/backward browser buttons (requires updateURL to be true)

			// Custom Events
			emitEvents: true // Emit custom events
		});
</script>
<?php endif; ?>
<script type="text/javascript" src="//cdn.callrail.com/companies/379246437/aed531f5e28febb10beb/12/swap.js"></script>

</body>
</html>