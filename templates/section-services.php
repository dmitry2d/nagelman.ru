<?php
	$category_id = 4;
	$num = (int) esc_attr(get_theme_mod('num_posts_services_section','5'));
	$posts_accordion = new WP_Query(array('cat' => $category_id, 'posts_per_page' => $num, 'order' => 'DESC'));
	?>

	<?php if ( $posts_accordion->have_posts() ) : ?>

	<div class="why-us">
		<h2 class="section-title">
		<?php echo esc_attr(get_theme_mod('header_services_section','У меня для вас есть три варианта работы:'))?></h2>
		<div id="accordion">
			<?php while ( $posts_accordion->have_posts() ) : $posts_accordion->the_post(); ?>

			<h3><?php the_title(); ?></h3>
			<div><?php echo the_content(); ?></div>

			<?php endwhile; ?>
		</div>
		<h3 class="text-right">
			/ <a class="main_more" href="<?php echo get_category_link($category_id); ?>">Подробнее</a>
		</h3>
	</div>
	<?php else: ?>
	<h3>Записи в формате аккордеона</h3>
	<?php endif; ?>