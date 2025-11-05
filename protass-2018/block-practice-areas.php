<?php
/**
 * Block Element
 *
 * @package protass
 * @author Postali
 */
?>
<section id="practice-areas">
	<div class="PA-container clearfix">
		<div class="column column1"><div class="column_inner">
			<?php the_field('practice_areas_1', 'options'); ?>	
		</div></div>
		<div class="column column2"><div class="column_inner">
			<?php the_field('practice_areas_2', 'options'); ?>	
		</div></div>
		<div class="column column3"><div class="column_inner">
			<?php the_field('practice_areas_3', 'options'); ?>	
		</div></div>
	</div>
</section>