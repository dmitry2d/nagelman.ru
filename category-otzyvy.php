

<?php
/*
* Template Name: Рубрика
*/

/**
 * New Site Mode
 */
if ($NEW_SITE){
	get_template_part('new/template', 'category');
	exit();
};
?>

<?php get_header();
$blog_layout = esc_attr(get_theme_mod('blog_page_archive_section','mediumthumbslistview'));
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<?php require_once (TEMPLATEPATH. '/breadcrumbs.php'); ?>
<h1>Отзывы</h1>

				<?php if ( have_posts() ) : ?>


				<?php while ( have_posts() ) : the_post(); ?>
					<div class="otzyvy clearfix"> 

					<?php if(has_post_thumbnail()) $image = get_the_post_thumbnail_url( get_the_ID(),'thumbnail');
					else $image =  get_bloginfo('template_directory').'/img/no_user.jpg'; ?>
						<div class="otzyvy-list-thumb">    
							<img src="<?php echo $image; ?>" class="alignleft">            
						</div>      
						<div class="otzyvy-list-detail">           
						    <div class="entry-meta">                              
						            <span><i class="fa fa-user"></i> <?php echo get_field('name_author'); ?></span>
						            <span><i class="fa fa-clock-o"></i><?php the_time(get_option('date_format')); ?></span>           
						    </div>

						    <div class="otzyvy-list-excerpt">
						    	<?php the_content() ?>
						    </div>   
						</div> 
					</div>
				<?php endwhile; ?>
				<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
				
				<?php else: ?>
						<p>Нет отзывов</p>
				<?php endif; ?>
		    </div>
			<div class="col-md-3 sidebar_area">
				<?php get_sidebar(); ?> 
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>