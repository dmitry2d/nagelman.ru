<<<<<<< HEAD


<?php
/*
* Template Name: Стандартная страница
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>
<div class="template__page">

    <div class="template__page__title"><?php the_title();?></div>

    <div class="template__page__container">

        <div class="template_page__data">
            <?php
                the_content ();
            ?>
        </div>
            <?php
                if (get_the_ID() != 35) {
            ?>
                <div class="template__page__sidebar">
            <?php
                    get_template_part('new/section', 'sidebar');
                    echo '</div>';
                }
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
=======


<?php
/*
* Template Name: Стандартная страница
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>
<div class="template__page">

    <div class="template__page__title"><?php the_title();?></div>

    <div class="template__page__container">

        <div class="template_page__data">
            <?php
                the_content ();
            ?>
        </div>
            <?php
                if (get_the_ID() != 35) {
            ?>
                <div class="template__page__sidebar">
            <?php
                    get_template_part('new/section', 'sidebar');
                    echo '</div>';
                }
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
>>>>>>> fba873ff578ca6ec8a008405b207f60dd08f36de
