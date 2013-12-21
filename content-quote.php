<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta darker">
			<?php mulamula_the_category(); ?>

			<?php mulamula_posted_on(); ?>
		</div>
		
		<?php if( has_post_thumbnail() ): ?>
		<div class="entry-background">
			<div class="shadow"></div>
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
		<?php endif; ?>
	</header> 
	<div class="entry-content">
		<?php the_content( __( 'Continue Reading &rarr;', 'mulamula' ) ); ?>
	</div> 
	<footer class="entry-footer">
		<span class="icon-wrap"><span class="icon"></span></span>
		<span class="comments-link">
			<?php mulamula_comments_popup_link(); ?>
		</span>
	</footer> 
</article><!-- article -->