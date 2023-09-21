

<?php
/*
* Template Name: Новость
*/
?>
    
<?php 
    global $post;
    $post = get_post($wp_query->query_vars['news_item'], OBJECT);
    set_query_var('page_title', get_the_title($post));

    get_template_part ('new/section', 'header');
    
    $post = get_post($wp_query->query_vars['news_item'], OBJECT);
    setup_postdata( $GLOBALS['post'] =& $post );
    
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>
<div class="template__page news__page">

    <div class="template__page__title">
        <?php
            the_title();
        ?>
    </div>

    <div class="template__page__container">

        
        <div class="template_page__data">
            <?php
                the_content();
            ?>

            <div class="news__page__links">

                <div class="news__page__date">
                    <?= get_the_date('', $post); ?>
                </div>

                <?php
                    set_query_var('share_link', '/news/'. $post-> ID); 
                    get_template_part ('new/section', 'share-button');
                ?>

            </div>

            <h2 class="news__page__other__news__title">Другие новости</h2>

            <?php get_template_part ('new/section', 'news-list'); ?>


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
    .news__page__links {
        margin: 20px 0 0;
        display: flex;
        align-items: center;
    }
    .news__page__links .share__link {
        margin-left: 15px;
    }
    
    .news__page__date {
        font-weight: 500;
        font-size: 18px;
        color: #BDBDBD;
    }
    
    h2.news__page__other__news__title {
        margin-top: 3em;
        font-size: 24px;
    }
    .news__page .template_page__data,
    .news__page .template_page__data p {
        font-size: 18px;
        font-weight: 500;
    }
    @media screen and (max-width: 800px) {
        .news__page__date {
            font-size: 16px;
        }
        h2.news__page__other__news__title {
            font-size: 20px;
        }
        .news__page .template_page__data {
            font-size: 16px;
        }
    }
</style>