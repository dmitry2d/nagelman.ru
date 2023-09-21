<div class="news__item">
    <div class="content__spoiler">
        <div class="content__spoiler__title">
            <?= get_the_title(); ?>
            <span class="news__item__date">
                <?= get_the_date(); ?>
            </span>
        </div>
        <div class="content__spoiler__wrapper">
            <div class="content__spoiler__text">
                <?php the_content(); ?>
                <div class="news__item__links content__spoiler__safe">
                    <div class="news__item__details">
                        <a href="/news/<?=get_the_ID();?>">Подробнее</a>
                    </div>
                    <div class="news__item__share">
                        <?php
                            global $post;
                            set_query_var('share_link', "/news/". $post-> ID); 
                            get_template_part ('new/section', 'share-button');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>

    .news__item .content__spoiler__title {
        font-weight: 500;
        flex-wrap: wrap;
    }
    .news__item__date {
        color: #3A6F84;
        font-size: 15px;
        display: block;
        min-width: 100%;
        margin-top: -6px;
    }
    .news__item__links {
        margin: 20px 0 0;
        display: flex;
        align-items: center;
    }
    .news__item__share {
        margin-left: 20px;
        /* display: flex;
        align-items: center; */
    }
    .news__item__share img {
        margin-left: 10px;
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
        .news__item__links a {
            color: #3A6F84;
            font-weight: 500;
            font-size: 16px;
        }
        .news__item__links a img {
            width: 20px;
        }
    }
</style>