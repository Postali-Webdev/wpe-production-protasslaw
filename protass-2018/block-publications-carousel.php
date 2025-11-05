<?php
/**
 * Block Element
 *
 * @package protass
 * @author Postali
 */
?>
	<ul class="publications-slider">
		<?php while( have_rows('publications') ): the_row(); 
			// vars
			$title = get_sub_field('publications_title');
			$content = get_sub_field('publications_content');
		?>
		<li>
			<h3><?php echo $title; ?></h3>
			<?php echo $content; ?>
		</li>
		<?php endwhile; ?>
	</ul>
