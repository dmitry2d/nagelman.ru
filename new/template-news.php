

<?php
/*
* Template Name: Новости
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>

<div class="template__page template__work">

    <div class="template__page__title"><?php the_title(); ?></div>

    <div class="template__page__container">

        <div class="template_page__data">

        Список новостей
            
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
    .template__work__title {
        font-weight: 600;
        font-size: 24px;
        line-height: 32px;
        color: rgba(var(--color-heading),1);
        margin-bottom: 30px;
    }
    .template__work__short-description {
        font-weight: 400;
        font-size: 15px;
        line-height: 24px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-basetext),1);
        margin-bottom: 30px;
    }

</style>
