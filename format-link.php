<?php
	$link_info = formattd_extract_first_link( $post );
	$link_url = $link_info['url'] ? $link_info['url'] : get_permalink();
	$link_title = $link_info['title'] ? $link_info['title'] : get_the_title();
	$link_domain = parse_url($link_url, PHP_URL_HOST);

	$content = trim( strip_tags( get_the_content() ) );

?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h2 class="entry-title"><a href="<?php echo $link_url; ?>"><?php echo $link_title; ?></a></h2>
			</header>
<?php
	if ( strlen( $content ) > strlen( $link_url ) )	:
?>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'formattd' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'formattd' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
<?php
	endif;
?>
			<footer>
			<?php echo formattd_time_ago(); ?> <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'formattd' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">#</a> <img class="favicon" height="16" width="16" src="http://www.google.com/s2/u/0/favicons?domain=<?php echo urlencode($link_domain); ?>" />
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'formattd' ), __( '1 Comment', 'formattd' ), __( '% Comments', 'formattd' ) ); ?></span>
			<?php edit_post_link( __( 'Edit', 'formattd' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</footer>	
		</article>
