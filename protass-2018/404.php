<?php get_header(); ?>

<section class="banner" id="interior-banner">
        <div class="container_inner skinny">

        <div class="yoast-bc-wrap">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        </div>

        <div class="banner-content">
            <img src="/wp-content/uploads/2018/11/404-graphic.png" alt="Banner Icon" />
            

        </div>
    </div>
</section>      
<section>
        <div class="container_inner skinny">
                <h1>404 - Page Not Found</h1>
				<p>Our apologies, but the page you requested could not be found.</p>
                
                <h2>Maybe these links are what you are looking for?</h2>

                <ul>
                    <li><a class="highlight" href="/harlan-j-protass/" title="About Harlan Link">About the Firm</a></li>
                    <li><a class="highlight" href="/criminal-defense/" title="Criminal Defense Link">Criminal Defense</a></li>
                    <li><a class="highlight" href="/post-litigation/" title="Appeals & Post-Conviction Litigation Link">Appeals & Post-Conviction Litigation</a></li>
                    <li><a class="highlight" href="/securities-enforcement-regulatory-proceedings/" title="Securities Enforcement and Regulatory Compliance Link">Securities Enforcement and Regulatory Compliance</a></li>
                </ul>
                <p>If not, perhaps you should head <a href="/" title="Head back home">Back Home</a> and try again.</p>	
    </div>
</section>
<?php get_footer(); ?>	
