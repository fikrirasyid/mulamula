<?php get_header(); ?>

	<div id="main" class="site-main wrap-outer">
		<div class="wrap">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
					<?php 
						if( have_posts() ){
							while( have_posts() ) : the_post();
								get_template_part( 'content', get_post_format() );
							endwhile;

							mulamula_content_nav( 'nav-below' ); 

						} else {
							get_template_part( 'content', 'none' );
						}
					?>
				</div><!-- #content.site-content -->			
			</div><!-- #primary.content-area -->

			<?php get_sidebar(); ?>			
		</div>
	</div><!-- #main.site-main -->

<?php get_footer(); ?>