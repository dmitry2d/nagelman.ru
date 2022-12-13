
<?php

/**
 * New Site Mode
 */
if ($NEW_SITE){
	get_template_part('new/template', 'search');
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
				<a href="<?php echo home_url(); ?>">Главная</a> /
				<h2>Результаты поиска</h2>
				<hr>
				<?php if (  have_posts() ) : while (have_posts() ) : the_post(); ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php the_excerpt( ) ?>
					<hr>		
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
					<p>По вашему запросу (<?php echo get_search_query(); ?>) ничего не найдено</p>
				<?php endif; ?>
			</div>
			<div class="col-md-3 sidebar_area">
				<?php get_sidebar(); ?> 
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>