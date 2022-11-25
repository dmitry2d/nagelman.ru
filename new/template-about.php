
<?php
/*
* Template Name: Обо мне
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>
<div class="template__page template__about">

    <div class="template__page__title"><?php the_title(); ?></div>

    <div class="template__page__container">

        <div class="template_page__data">

            <div class="template__about__image">
                <img src="<?= get_field('image-url') ?>;" alt="">
            </div>
            <div class="template__about__image__description">
                <?= get_field('image-description'); ?>
            </div>
            <div class="template__about__image__sidebar">
                <?php
                    get_template_part('new/section', 'sidebar');
                ?>
            </div>

        </div>

        <div class="template__about__full__description">
            <?= get_field('full-description'); ?>
        </div>

        <?php the_content(); ?>

    </div>

</div>

<?php 
    get_template_part ('new/section', 'side-bar-widget');
?>

<?php 
    get_template_part ('new/section', 'footer');
?>

<style>

    .template__about .template__page__container {
        display: block;
    }
    .template__about .template_page__data {
        display: flex;
        align-items: flex-start;
    }
    .template__about__image {
        min-width: 30%;
    }
    .template__about__image__description {
        padding: 0 30px;
        flex-grow: 1;
    }
    .template__about__image__sidebar {
        min-width: 280px;
    }
    .template__about__full__description {
        padding-top: 50px;
    }
    
    .template__about .widget_media_gallery h3 {
        color: rgba(var(--color-basetext),1);
        font-size: 32px;
        font-family: 'Roboto Slab', serif;
        margin-top: 20px;
    }
    .template__about .widget_media_gallery .gallery .foto {
        width: 24%;
    }
    
    @media screen and (max-width: 800px) {
        .template__about .template_page__data {
            flex-direction: column;
        }
        .template__about__image,
        .template__about__image__sidebar,
        .template__about__image__description {
            padding-left: 0;
            min-width: 100%;
        }
        .template__about__image__sidebar {
            display: none;
        }
        .template__about__image__description {
            padding-top: 50px;
        }
        .template__about .widget_media_gallery .gallery .foto {
        	width: unset;
        }
        .template__about .widget_media_gallery h3 {
            font-size: 24px;
            margin-top: 10px;
        }
    }
</style>