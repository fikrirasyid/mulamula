<?php 
	get_header();
	while( have_posts() ) : the_post();
?>

<div id="main" class="site-main">
	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="entry-meta single">
						<?php mulamula_posted_on(); ?>
					</div>
					
					<?php if( get_post_format() === false ): ?>
					<h1 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h1>
					<?php endif;?>

					<?php 
						$entry_custom_meta = get_post_custom( get_the_ID()); 
						if( get_post_format() == 'link' && isset( $entry_custom_meta['_format_link_url'] ) ):
					?>
					<h1 class="entry-original-link">
						<?php printf( __( '<a href="%1$s" rel="bookmark">link to %2$s</a>', 'mulamula' ), $entry_custom_meta['_format_link_url'][0], mulamula_get_domain_name( $entry_custom_meta['_format_link_url'][0] ) ); ?>
					</h1>
					<?php endif; ?>					
				</header> 
				<div class="entry-content">
					<?php 
						the_content(); 
						wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mulamula' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); 
					?>

					<div class="entry-tags">
						<?php 
							the_tags();
						?>
					</div>					
				</div> 
				<footer class="entry-footer">
					<span class="icon-wrap"><span class="icon"></span></span>
					<span class="comments-link">			
						<?php mulamula_comments_popup_link(); ?>
					</span>
				</footer> 
			</article>

			<?php 
				mulamula_content_nav( 'nav-below' ); 

				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ){
					comments_template();
				}
			?>
		</div><!-- #content.site-content -->

	</div><!-- #primary.content-area -->
</div><!-- #main.site-main -->
<?php
	endwhile;					
	get_footer(); 
?>