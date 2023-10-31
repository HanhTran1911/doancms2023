<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if (have_posts()) : ?>
	<header class="page-header alignwide">
		<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
		<?php if ($description) : ?>
			<div class="archive-description"><?php echo wp_kses_post(wpautop($description)); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->
	<div class="content change-content">
		<div class="content-archive">
		</div>
		<div class="content-main">
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>
				<?php get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt')); ?>
			<?php endwhile; ?>
		</div>
		<div class="content-recent-post">
    <ul>
        <?php
        $the_query = new WP_Query('posts_per_page=3');
        while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <li>
			<?php
			$post = get_post();
			$date = $post->post_date;
			$post_date = get_the_date('d', $post->ID);
			$post_month = get_the_date('m', $post->ID);
			$post_year = get_the_date('y', $post->ID);
			
			?>
			<div class="date">
				<div class="date-day-month">
			<div class="day"><?php echo $post_date; ?></div>
			<hr>
			<div class="month"><?php echo  $post_month; ?></div>

				</div>
			<div class="year px-1"><?php echo  $post_year; ?></div>
			</div>
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </li>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </ul>
    <div class="viewall"><a href="../tin-tuc">
        <h4>Xem tất cả tin tức</h4>
    </a></div>
</div>

	</div>
	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part('template-parts/content/content-none'); ?>
<?php endif; ?>

<?php
get_footer();
