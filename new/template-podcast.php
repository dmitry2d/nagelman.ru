

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
            <div class="template__page__data">

                    <?php 
                        get_template_part ('new/section', 'podcast');
                    ?>

                    <?php 
                        get_template_part ('new/section', 'other-videos');
                    ?>
                    
            </div>
        </div>
    </div>
</div>


<?php 
    get_template_part ('new/section', 'side-bar-widget');
?>

<?php 
    get_template_part ('new/section', 'footer');
?>