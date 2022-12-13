<?php

/**
 * New Site Mode
 */
if ($NEW_SITE){
	get_template_part('new/template', 'single');
	exit();
}
?>


<?php

get_header(); ?>
<section class="single-section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
		      	<?php require_once (TEMPLATEPATH. '/breadcrumbs.php'); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) :the_post(); ?>
					<div class="article" itemscope itemtype="http://schema.org/NewsArticle">
						<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="<?php echo get_permalink(); ?>"/>
							<h1 itemprop="headline"><?php the_title(); ?></h1>
							<div itemprop="articleBody">
								<?php the_content(); ?>
							</div>
						<hr />
						<div class="end-post-footer">
							<div class="text-left share_links">
								<?php require_once (TEMPLATEPATH. '/share_social_links.php'); ?>
							</div>
							<div class="text-right"><?php echo get_the_date(); ?></div>
						</div>
						<meta itemprop="datePublished" content="<?php the_date('Y-m-d'); ?>"/>

						<meta itemprop="dateModified" content="<?php the_modified_date('Y-m-d'); ?>"/>
						<span style="display: none;" itemprop="author" itemscope itemtype="https://schema.org/Person">
							<meta itemprop="name" content="<?php the_author(); ?> ">
						</span>
						<meta itemprop="description" content="<?php echo get_excerpt(); ?>">
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
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