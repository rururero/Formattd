<?php
/**
 * The widget area at the bottom of the index page.
 *
 * @package WordPress
 * @subpackage Formattd
 * @since Formattd 0.1
 */
?>
<?php
	if (   ! is_active_sidebar( 'index-bottom' ) )
		return;
	// If we get this far, we have widgets. Let's do this.
?>

			<div id="index-bottom" class="widget-area" role="complementary">

					<ul class="xoxo">
						<?php dynamic_sidebar( 'index-bottom' ); ?>
					</ul>
			</div><!-- #index-bottom .widget-area -->
