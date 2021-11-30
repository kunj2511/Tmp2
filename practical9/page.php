<?php
/**
 * for page layout
 * @package customTheme
 * @version 1.0
 */
?>

<?php get_header();?>

	<div class="container">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()): the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php get_sidebar();?>
	</div>

<?php get_footer();?>