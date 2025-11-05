<?php
/**
 * Awards Block Element
 *
 * @package protass
 * @author Postali
 */

if( have_rows('awards_list', 'options') ): ?>
	<p class="blue">Awards &amp; Recognition</p>
	<div class="awards awards-list">
	<?php while( have_rows('awards_list', 'options') ) : the_row();
		$award = get_sub_field('award');
		$img = $award['url'];
		$alt = $award['alt'];
		$add_link = get_sub_field('add_award_link');
		$link = get_sub_field('award_link');
		$title = get_sub_field('award_title');

		if ( $add_link == true ) { ?>
			<a href="<?php echo $link; ?>" target="_blank" title="<?php echo $title; ?>">
				<img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($alt); ?>" />
			</a>
		<?php } else { ?>
			<span>
				<img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($alt); ?>" />
			</span>
		<?php }
	endwhile; ?>
	</div>
<?php endif; ?>