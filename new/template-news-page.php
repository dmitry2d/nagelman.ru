

<?php
/*
* Template Name: Новость
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');

    wp_reset_postdata();
    global $post;
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
                <a href="#" class="news__page__share">
                    Поделиться<img src="<?= get_template_directory_uri(); ?>/new/images/icn_share.svg">
                </a>
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
    .news__page__share {
        margin-left: 20px;
        display: flex;
        align-items: center;
    }
    .news__page__share img {
        margin-left: 10px;
    }
    .news__page__date {
        font-weight: 500;
        font-size: 18px;
        color: #BDBDBD;
    }
    .news__page__share {
        color: #3A6F84;
        font-weight: 500;
        font-size: 18px;
    }
    .news__page__share img {
        width: 24px;
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
        .news__page__share,
        .news__page__date {
            font-size: 16px;
        }
        .news__page__share a img {
            width: 20px;
        }
        h2.news__page__other__news__title {
            font-size: 20px;
        }
        .news__page .template_page__data {
            font-size: 16px;
        }
    }
</style>