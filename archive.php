<?php 
	get_header(); 

	if( is_category() ){
		$page_theme = single_cat_title( '', false );
		$page_theme_desc = category_description();
	} elseif( is_tag() ){
		$page_theme = single_tag_title( '', false );
		$page_theme_desc = tag_description();
	} elseif( is_author() ){
		$page_theme = get_the_author();
		$page_theme_desc = get_the_author_meta( 'description' );
	} elseif( is_day() ){
		$page_theme = get_the_date();
		$page_theme_desc = sprintf( __( 'Posts published at %1$s', 'mulamula' ), get_the_date() );
	} elseif( is_month() ){
		$page_theme = get_the_date( 'F Y' );
		$page_theme_desc = sprintf( __( 'Posts published on %1$s', 'mulamula' ), get_the_date( 'F Y' ) );
	} elseif( is_year() ){
		$page_theme = get_the_date( 'Y' );
		$page_theme_desc = sprintf( __( 'Posts published on the year %1$s', 'mulamula' ), get_the_date( 'Y' ) );
	} elseif( is_tax( 'post_format', 'post-format-image' ) ){
		$page_theme = __( 'Photos', 'mulamula' );
		$page_theme_desc = sprintf( __( 'Photos published on %1$s', 'mulamula' ), get_bloginfo('name') );
	} elseif( is_tax( 'post_format', 'post-format-video' ) ){
		$page_theme = __( 'Videos', 'mulamula' );
		$page_theme_desc = sprintf( __( 'Videos published on %1$s', 'mulamula' ), get_bloginfo('name') );
	} elseif( is_tax( 'post_format', 'post-format-quote' ) ){
		$page_theme = __( 'Quotes', 'mulamula' );
		$page_theme_desc = sprintf( __( 'Quotes quoted on %1$s', 'mulamula' ), get_bloginfo('name') );
	} elseif( is_tax( 'post_format', 'post-format-link' ) ){
		$page_theme = __( 'Links', 'mulamula' );
		$page_theme_desc = sprintf( __( 'Links shared on %1$s', 'mulamula' ), get_bloginfo('name') );
	}
?>
	<div id="main" class="site-main">
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
	</div><!-- #main.site-main -->

<?php get_footer(); ?>