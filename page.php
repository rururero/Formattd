<?php get_header(); ?>
<div id="content">
<div class="spacer">
<?php
	get_sidebar( 'page-top' );
	get_template_part('loop', 'page');	
	get_sidebar( 'page-bottom' );
?>
</div><!--.spacer-->
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
