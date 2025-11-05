<?php
/**
 * Press and Publications Block Element
 *
 * @package protass
 * @author Postali
 */
?>
	<section id="publications">
		<div class="container_inner">
			<div class="two_columns_50_50 clearfix">
				<div class="column1">
					<div class="column_inner">
						<div><?php the_field('press_publications_1', 'options'); ?>	</div>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						<div><?php the_field('press_publications_2', 'options'); ?>	</div>
						<div><?php the_field('press_publications_3', 'options'); ?>	</div>
					</div>
				</div>
			</div>
		</div>
	</section>