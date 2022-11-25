<?php
	$category_id = 6;
	$num = (int) esc_attr(get_theme_mod('num_posts_otzyvy_section','5'));
	$post_otzyvy = new WP_Query(array('cat' => $category_id, 'posts_per_page' => $num, 'order' => 'ASC'));
	?>

	<?php if ( $post_otzyvy->have_posts() ) : ?>

	<div class="why-us">
		<h2 class="section-title"><?php echo esc_attr(get_theme_mod('header_otzyvy_section','Отзывы о моей работе'))?></h2>
		<div class="slider">
			<div class="flexslider">
			  <ul class="slides">
				<?php while ( $post_otzyvy->have_posts() ) : $post_otzyvy->the_post(); ?>

					<li>
					<h3><b><?php echo get_field('name_author') ?>:</b></h3>
					<?php the_content(); ?>
					</li>

				<?php endwhile; ?>
			   </ul>
			</div>
		</div>
		<h3 class="text-right">
			/ <a class="main_more" href="<?php echo get_category_link($category_id); ?>">Все отзывы</a>
		</h3>
	</div>
	<?php else: ?>
	<h3>Записи в формате аккордеона</h3>
	<?php endif; ?>