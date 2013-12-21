<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<?php mulamula_the_category(); ?>

			<?php mulamula_posted_on(); ?>
		</div>

		<?php if( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>" class="entry-featured-image" rel="bookmark">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
		<?php endif; ?>
		
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
	</header> 
	<div class="entry-content">
		<?php mulamula_content(); ?>
	</div> 
	<footer class="entry-footer">
		<span class="icon-wrap"><span class="icon"></span></span>
		<span class="comments-link">			
			<?php mulamula_comments_popup_link(); ?>
		</span>
	</footer> 
</article>