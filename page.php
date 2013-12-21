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
				</header> 
				<div class="entry-content">
					<?php the_content(); ?>
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