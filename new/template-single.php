

<?php
/*
* Template Name: Запись страница
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>
<div class="template__page single-page">

    <div class="template__page__title"><?php the_title(); ?></div>

    <div class="template__page__container">

        
        <div class="template_page__data">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <?php
                the_content ();
            ?>

            <!-- Add service card if it's in Services category -->
            <?php
                if (in_category('services')){
                    get_template_part ('new/section', 'services');
                }
            ?>

            <?php endwhile; endif; ?>
        </div>
        <div class="template__page__sidebar">
            <?php
                get_template_part('new/section', 'sidebar');
            ?>
        </div>
    </div>

</div>

<?php 
    get_template_part ('new/section', 'side-bar-widget');
?>

<?php 
    get_template_part ('new/section', 'footer');
?>
