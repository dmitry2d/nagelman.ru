<?php
			$category_id = 1;
			$num = (int) esc_attr(get_theme_mod('num_posts_recent_section','4'));
			$posts_about = new WP_Query(array('cat' => $category_id , 'posts_per_page' => $num, 'order' => 'DESC'));
			?>

			<?php if ( $posts_about->have_posts() ) : ?>
			<h2 class="section-title"><?php echo esc_attr(get_theme_mod('header_recent_section','Последние записи'))?></h2>
			<div class="recent-post-main">
			<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
			<div class=" col-md-3 col-xs-6 text-center">
				<div class="recent-post">
					<a class="" href="<?php the_permalink(); ?>" title="<?php the_title()?>">
						<?php if(has_post_thumbnail()) $image = get_the_post_thumbnail_url( get_the_ID(),'fotography-grid-medium');
					else $image =  get_bloginfo('template_directory').'/img/no_image.png'; ?>
						<div class="recent-post-img-wrp">
							<img src="<?php echo $image; ?>">
							<p class="recent-post-date text-right"><?php the_time(get_option('date_format')); ?></p>
						</div>
						<h3>
							<?php the_title() ?>
						</h3>
							
					</a>
				</div>
			</div>
			<?php endwhile; ?>
			</div>
			<h3 class="text-right">
				/ <a class="main_more" href="<?php echo get_category_link($category_id); ?>">Смотреть все</a>
			</h3>
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
