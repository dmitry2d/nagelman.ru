<?php
/*
* Template Name: Шаблон главной страницы
*/

/**
 * New Site Mode
 */
if ($NEW_SITE){
	// Error Reporting
	// error_reporting( E_ALL );
	// ini_set( 'display_errors', 1 );
	get_template_part('new/template', 'main');
	exit();
};


get_header();

?>

<section id="main">
	<div class="container">
		<div class="col-md-12">
			<?php if (  have_posts() ) : while ( have_posts()) : the_post(); ?>

				<?php the_content(); ?>
				<?php $counters = get_field('counter');
	                    if( $counters && get_field('disp_count')): 
	                    	$col = 12/count($counters); ?>
	                    <div class="about-counter-wrap clearfix">
		                            <?php foreach( $counters as $counter ): ?>
		                            	<div class="col-xs-<?php echo $col ?>">
									        <div class="about-counter ">
									            <div class="counter counter-one">
									             <?php echo $counter['number'] ?>
									            </div>
									            <h6 class="counter-title title-one"><?php echo $counter['title'] ?>
									            </h6>
									            <span class="counter-icon icon-one">                                    
									                <i class="fa <?php if (!empty($icon_one)){ echo $icon_one; } ?> fa-2x"></i>
									            </span>
									        </div>
								         </div>
		                            <?php endforeach; ?>
	                        </div>
	                    <?php endif; ?>
			<?php endwhile; ?>
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</div>
	</div>
</section>

<?php /*
<?php $color_services = hex2rgba(esc_attr(get_theme_mod('bg_color_services_section','#fff')), get_theme_mod('opacity_section','0.8'))?>
<section id="services" style="background-color: <?php echo $color_services; ?>">
	<div class="container">
		<div class="col-md-12 overflow">
			<!-- Секция услуг -->
			<?php if (esc_attr(get_theme_mod('disp_services_section','yes')) == 'yes') : ?>
					<?php get_template_part('templates/section', 'services'); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
*/ ?>

<?php $color_otzyvy = hex2rgba(esc_attr(get_theme_mod('bg_color_otzyvy_section','#fff')), get_theme_mod('opacity_section','0.8'))?>
<section id="otzyvy" style="background-color: <?php echo $color_otzyvy; ?>">
	<div class="container">
		<div class="col-md-12">
			<!-- Секция отзывов -->
			<?php if (esc_attr(get_theme_mod('disp_otzyvy_section','yes')) == 'yes') : ?>
					<?php get_template_part('templates/section', 'otzyvy'); ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php $color_posts = hex2rgba(esc_attr(get_theme_mod('bg_color_recent_section','#fff')), get_theme_mod('opacity_section','0.8'))?>
<section id="recent_posts" style="background-color: <?php echo $color_posts; ?>">
	<div class="container">
		<div class="col-md-12  overflow">
			<!-- Секция последние записи -->
			<?php if (esc_attr(get_theme_mod('disp_recent_section','yes')) == 'yes') : ?>
					<?php get_template_part('templates/section', 'recentpost'); ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php $color_quick_contact = hex2rgba(esc_attr(get_theme_mod('bg_color_qc_section')), get_theme_mod('opacity_section','0.8'))?>
<section  id="quick_contact_section" style="background-color: <?php echo $color_quick_contact; ?>">
	<div class="container">
		<div class="col-md-12 overflow">
			<?php if (esc_attr(get_theme_mod('disp_quikcontact_section','yes')) == 'yes') : ?>
		            <?php get_template_part('templates/section', 'quikcontacts'); ?>
		    <?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>