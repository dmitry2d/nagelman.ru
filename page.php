<?php

/**
 * New Site Mode
 */
if ($NEW_SITE){
	get_template_part('new/template', 'page');
	exit();
}
?>

<?php
	get_header();
?>
<section class="single-section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php if ( have_posts() ) : while ( have_posts() ) :the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<hr>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</div>
			<div class="col-md-3 sidebar_area">
				<?php get_sidebar(); ?> 
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>