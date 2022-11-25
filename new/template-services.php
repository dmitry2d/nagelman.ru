

<?php
/*
* Template Name: Услуги
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
    
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>

<div class="template__services">

    <div class="template__services__title">Услуги</div>

    <div class="template__services__container">

        <div class="template_services__data">
            <?php
                get_template_part('new/section', 'services');
            ?>
        </div>
        <div class="template__services__sidebar">
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
    .template__services__title {
        
        font-family: 'Roboto Slab', serif;
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
        color: rgba(var(--color-basetext),1);
        font-size: 32px;
    }
    .template__services__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
        display: flex;
    }
    
    .template__services__data {
        flex-grow: 1;
    }
    .template__services__sidebar {
        min-width: 350px;
        padding-left: 50px;
    }
    
    @media screen and (max-width: 800px) {
        .template__services__container {
            flex-wrap: wrap;
        }
        .template__services__container > * {
            padding-left: 0;
            min-width: 100%;
            
        }
    }
</style>