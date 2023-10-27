<?php

/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="display: flex; justify-content: center;margin: 20px 0;">
	<div class="group-main-post">
		<div class="date">
			<?php
			$post = get_post();
			$post_date = get_the_date('d', $post->ID);
			$post_month = get_the_date('m', $post->ID)
			?>
			<p class="day"><?php echo $post_date; ?></p>
			<p class="month">Tháng <?php echo $post_month; ?></p>
		</div>
		<div class="wrapper">
			<div class="line"></div>
		</div>
		<div class="group">
			<?php get_template_part('template-parts/header/excerpt-header', get_post_format()); ?>

			<div class="entry-content">
				<?php get_template_part('template-parts/excerpt/excerpt', get_post_format()); ?>
			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-${ID} -->