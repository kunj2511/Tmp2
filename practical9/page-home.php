<?php
/**
 * @package customTheme
 * @version 1.0
 */
?>

<?php get_header();?>

	<div class="jumbotron gradient-bg margin-up-20">
		<div class="container text-center">
			<h1>Welcome to our custom Theme</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()): the_post(); ?>
						<?php the_content();?>
					<?php endwhile; ?>
				<?php endif; ?>
		</div>
	</div>

<?php get_footer();?>