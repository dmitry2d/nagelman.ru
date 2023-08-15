
<?php
/*
* Other Videos Section
*/

$other_video_list = get_field('other-video-list', 2);

?>

<div class="other-videos">
    <div class="other-videos__title template__page__title">
        Другие видео смотрите на моем YouTube канале
    </div>
    <div class="other-videos__items">
        <?php
            foreach ($other_video_list as $index => $video) {
                if ($video['active']) {

        ?>
            <div class="other-videos__item">
                <div class="other-videos__item__preview">
                    <a href="https://www.youtube.com/watch?v=<?=$video['id']?>" target="_blank">
                        <img src="https://i.ytimg.com/vi/<?=$video['id']?>/hqdefault.jpg">
                    </a>
                </div>
                <div class="other-videos__item__title">
                    <?=$video['title']?>
                </div>
            </div>
        <?php
                }
            }
        ?>
    </div>
    <div class="other-videos__link">
        <a href="https://www.youtube.com/@elenanagelman">
            Перейти на YouTube канал
        </a>
    </div>
</div>

<style>
    .other-videos {
        margin-top: 40px;
        margin-bottom: 30px;
    }
    .other-videos__title {
        text-align: center;
    }
    .other-videos__items {
        margin: 0;
        display: flex;
        margin: 50px -10px 20px;
        justify-content: center;
    }
    .other-videos__item {
        flex-basis: 10%;
        flex-grow: 1;
        margin: 10px;
        
    }
    .other-videos__item a {
        overflow: hidden;
        border-radius: 10px;
        display: block;
        height: 0;
        width: 100%;
        padding-bottom: 56%;
    }
    .other-videos__item a img {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .other-videos__link {
        text-align: center;
    }
    .other-videos__link a {
        background: #C61111;
        padding: 18px 35px;
        text-decoration: none;
        font-size: 15px;
        color: white;
        border-radius: 100px;
    }
    .other-videos__item__title {
        padding: 20px 0;
        line-height: 1.15;
        font-size: 15px;
        font-weight: 500;

    }

    @media screen and (max-width: 800px) {
        .other-videos__items {
            flex-direction: column;
            align-items: center;
            padding: 0 10vw;
        }
        
        .other-videos__item {
            width: 100%;
            max-width: 400px;
            margin-bottom: 30px;
        }
        .other-videos__link {
            margin: 0 -10px;
        }
        .other-videos__link a {
            display: block;
            text-align: center;
            margin: 0 10vw;
        }

</style>

