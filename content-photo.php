<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ); ?>
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>" class="entry-featured-image" rel="bookmark">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
	</header> 
	<?php endif(); ?>

	<div class="entry-content entry-caption">
		<?php mulamula_content(); ?>
	</div> 

	<div class="entry-meta">
		<?php mulamula_the_category(); ?>

		<?php mulamula_posted_on(); ?>
	</div>

	<footer class="entry-footer">
		<span class="icon-wrap"><span class="icon"></span></span>
		<span class="comments-link">
			<?php mulamula_comments_popup_link(); ?>
		</span>
	</footer> 
</article>