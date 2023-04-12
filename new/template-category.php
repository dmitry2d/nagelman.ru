

<?php
/*
* Template Name: Ключи жизни
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
    
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>

<div class="template__category">

    <div class="template__page__title"><?= single_term_title(); ?></div>

    <div class="template__page__container">

        <div class="template__page__data">
            <?php
                get_template_part('new/section', 'category');
            ?>
        </div>
        <div class="template__page__sidebar">
            <?php
                get_template_part('new/section', 'sidebar');
            ?>
        </div>
    </div>

</div>

<div class="template__page__corenavi">
    <?php 
        get_template_part ('new/section', 'corenavi');
    ?>
</div>

<?php 
    get_template_part ('new/section', 'side-bar-widget');
?>

<?php 
    get_template_part ('new/section', 'footer');
?>
