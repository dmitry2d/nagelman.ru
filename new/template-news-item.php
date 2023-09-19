

<?php
/*
* Template Name: Новость
*/
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>
<div class="template__page">

    <div class="template__page__title">
        <?php the_title(); ?>
    </div>

    <div class="template__page__container">

        
        <div class="template_page__data">
            <?php
                the_content ();
            ?>

            <div class="news__item__links">
                <div class="news__item__date">
                    <?= get_the_date(); ?>
                </div>
                <a href="" class="news__item__share">
                    Поделиться <img src="<?= get_template_directory_uri(); ?>/new/images/icn_share.svg">
                </a>
            </div>

        </div>
        <!-- <div class="template__page__sidebar">
            <?php
                // get_template_part('new/section', 'sidebar');
            ?>
        </div> -->
    </div>

</div>

<?php 
    get_template_part ('new/section', 'side-bar-widget');
?>

<?php 
    get_template_part ('new/section', 'footer');
?>

<style>
    .news__item__links {
        margin: 20px 0 0;
        display: flex;
        align-items: center;
    }
    .news__item__share {
        margin-left: 20px;
        display: flex;
        align-items: center;
    }
    .news__item__share img {
        margin-left: 10px;
    }
    .news__item__date {
        font-weight: 500;
        font-size: 18px;
        color: #BDBDBD;
    }
    .news__item__links a {
        color: #3A6F84;
        font-weight: 500;
        font-size: 18px;
    }
    .news__item__links a img {
        width: 24px;
    }
    @media screen and (max-width: 800px) {
        .news__item__links a,
        .news__item__date {
            font-size: 16px;
        }
        .news__item__links a img {
            width: 20px;
        }
    }
</style>