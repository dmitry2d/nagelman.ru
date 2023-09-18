<div class="news__item">
    <div class="content__spoiler">
        <div class="content__spoiler__title">
            <?= get_the_title(); ?>
            <span class="news__item__date">
                <?= get_the_date(); ?>
            </span>
        </div>
        <div class="content__spoiler__text">
            <?= get_the_content(); ?>
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
</style>