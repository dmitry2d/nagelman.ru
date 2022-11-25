

<?php
/*
* Template Name: Поиск
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>
<div class="template__page template__search">

    <div class="template__page__title">Результаты поиска</div>

    <div class="template__page__container">

        
        <div class="template_page__data">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="section__search__result">

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt( ) ?>

            </div>
            

            <?php endwhile; else: ?>
                <h2>По Вашему запросу ничего не найдено</h2>
            <?php endif; ?>
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
/* 

    .template__page__title {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
        color: rgba(var(--color-basetext),1);
        font-size: 32px;
    }
    .template__page__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
        display: flex;
    }
    
    .template__page__data {
        flex-grow: 1;
    }
    .template__page__sidebar {
        min-width: 350px;
        padding-left: 50px;
    }

    .template__page p {
        font-weight: 400;
        font-size: 15px;
        line-height: 24px;
    }
    .template__page h2 {
        font-weight: 500;
        font-size: 15px;
        line-height: 24px;
        color: rgba(var(--color-highlight),1);
        padding: 30px 0;
    }
    .template__page h2 a {
        color: rgba(var(--color-highlight),1);
        font-weight: 500;
        font-size: 15px;
        line-height: 24px;
    } */

    .template__search.template__page h2 a {
        color: rgba(var(--color-heading),1);
    }

    .section__search__result span {
        background: rgba(var(--color-highlight),1)!important;
        color: white!important;
    }

    .section__breadcrumb > span * {
        background: inherit!important;
    }
    
    @media screen and (max-width: 800px) {
        /* .template__page__container {
            flex-wrap: wrap;
        }
        .template__page__container > * {
            padding-left: 0;
            min-width: 100%;
            
        }
        .template__page {
            min-height: calc(100vh - 254px);
        } */
    }
</style>