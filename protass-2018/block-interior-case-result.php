<?php
/**
 * Block Interior Case Result Element
 *
 * @package protass
 * @author Postali
 */
?>
<aside class="case-result">
	<p class="section-tag">Notable Case Result</p>
	<h2><?php the_field('case_result_title', 'options'); ?></h2>	
	<?php the_field('case_result_content', 'options'); ?>	
	<a class="btn animate" href="/results/" title="view case results">View Case Results</a>
</aside>