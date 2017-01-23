<?php get_header(); ?>

<div class="container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Beklager, siden findes ikke.'); ?></p>
	<?php endif; ?>

</div>

<?php get_footer(); ?>