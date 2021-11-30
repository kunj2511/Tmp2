<?php
/**
 * The is the template for displaying sidebar and widgets
 * @package customTheme
 * @version 1.0
 */
?>

<?php if ( is_active_sidebar('sidebar-1') ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar('sidebar-1')?>
	</aside>
<?php endif; ?>
