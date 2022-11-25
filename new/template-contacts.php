

<?php
/*
* Template Name: Контакты
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>
<div class="template__page template__contacts">

    <div class="template__page__title"><?php the_title(); ?></div>

    <div class="template__page__container">
    
        <div class="template_page__data">
            
            <h2>Делиться мнением или записаться на консультацию можно здесь:</h2>
            <?php 
                get_template_part ('new/section', 'quick-contacts');
            ?>
            <?php 
                get_template_part ('new/section', 'payment-methods');
            ?>
            <?php 
                get_template_part ('new/section', 'requisites');
            ?>
           

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
    .template__page__title {
        color: rgba(var(--color-basetext),1);
    }
    .template__contacts .section__quick-contacts__container {
        padding: 0;
        width: 100%;
        display: block;
    }
    .template__contacts .section__quick-contacts__container div {
        margin: 10px 0;
        padding: 30px;
    }
</style>
