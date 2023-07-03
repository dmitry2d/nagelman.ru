

<?php
/*
* Template Name: Видео подкасты
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>
<div class="template__page template__podcast">

    <div class="template__page__title"><?php the_title(); ?></div>

    <div class="template__page__container">

        <div class="template_page__data">
123
           
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

<style>


</style>
