

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
			<div class="col-md-9 <?php echo esc_attr( $blog_layout ); ?> fg-blog-post">

				<?php require_once (TEMPLATEPATH. '/breadcrumbs.php'); ?>
<h1>Новости</h1>
				<?php if ( have_posts() ) : ?>


				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php 
				$blog_layout = esc_attr(get_theme_mod('blog_page_archive_section','mediumthumbslistview'));
				if( has_post_thumbnail() ) {
				if(!empty($blog_layout) && $blog_layout == 'mediumthumbslistview'){
				  $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'fotography-grid-large', true); 
				}else{
				    $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'fotography-bxslider', true);
				}
				}else{
				    $image[0] = '';
				}
				$blog_author = esc_attr(get_theme_mod('blog_author_archive_section','yes'));
				$blog_postdate = esc_attr(get_theme_mod('blog_postdate_archive_section','yes'));
				$blog_meta_cat = esc_attr(get_theme_mod('blog_metacategory_archive_section','yes'));
				$text_more = (!is_category( '4' )) ? esc_attr(get_theme_mod('blog_description_archive_section', 'Читать полностью')) : esc_attr(get_theme_mod('blog_description_video_section', 'Подробнее'));
				?>
				<div class="fg-blog clearfix">     
					<div class="fg-gallery-list-thumb" style="background-image: url(<?php echo esc_url($image[0]); ?>) ">                  
					</div>      

					<div class="fg-gallery-list-detail">
					    <h3>
					        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>                                                      
					    </h3>                  
					    <div class="entry-meta">                              
					        <?php if ($blog_author == 'yes') : ?>
					            <span><i class="fa fa-user"></i> <?php the_author(); ?></span>
					        <?php endif; ?>
					        <?php /* if ($blog_postdate == 'yes') : ?>
					            <span><i class="fa fa-clock-o"></i><?php the_time(get_option('date_format')); ?></span>
					        <?php endif; */ ?> 
					        <?php if ($blog_meta_cat == 'yes') : ?>
					            <span><i class="fa fa-folder-open"></i> <?php the_category(','); ?></span>
					        <?php endif; ?>               
					    </div>

					    <div class="fg-gallery-list-excerpt">
					    	<?php the_excerpt() ?>
					        <div class="bttn-wrap">
					        <a class="bttn" href="<?php the_permalink(); ?>"><?php echo $text_more; ?></a></div>
					    </div>   
					</div> 
				</div>
				<?php endwhile; ?>
				<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
				
				<?php else: ?>
						<p>В рубрике нет постов</p>
				<?php endif; ?>
		    </div>
			<div class="col-md-3 sidebar_area">
				<?php get_sidebar(); ?> 
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>