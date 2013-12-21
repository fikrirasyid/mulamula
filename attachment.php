<?php 
	get_header();
	while( have_posts() ) : the_post();

	/** 
	 * Attachment page is attached to the post where it was uploaded.
	 * However, an image can be posted from different image thru media uploader
	 * Things can be problematic here. Use HTTP_REFERRER if there's any, or use $post->post_parent for fallback
	 */
	if( isset( $_SERVER['HTTP_REFERER'] ) ){
		$parent_post_url = esc_url( $_SERVER['HTTP_REFERER'] );
	} else {
		$parent_post_url = get_permalink( $post->post_parent );
	}
?>

<div id="main" class="site-main">
	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="entry-meta single">
						<?php mulamula_posted_on(); ?>
					</div>

					<a href="<?php $attachment_src = wp_get_attachment_image_src( get_the_ID(), 'fullsize' ); echo $attachment_src[0]; ?>" class="entry-featured-image" rel="bookmark">
						<?php echo mulamula_remove_width_attribute( wp_get_attachment_image( get_the_ID(), 'large' ) ); ?>
					</a>
				</header> 
				<div class="entry-content">					
					<p><?php the_title(); ?></p>
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