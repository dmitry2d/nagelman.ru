
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
                <a href="https://www.youtube.com/watch?v=<?=$video['id']?>" target="_blank">
                    <img src="https://i.ytimg.com/vi/<?=$video['id']?>/hqdefault.jpg">
                </a>
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
        margin: 0 0 0 20px;
        display: flex;
        margin: 50px -10px;
        justify-content: center;
    }
    .other-videos__item {
        min-width: 20%;
        flex-grow: 1;
        margin: 10px;
        overflow: hidden;
        border-radius: 10px;

    }
    .other-videos__item a {
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
    .other-videos__item:after {
        position: absolute;
        content: '';
        inset: 0;
        background: url("<?= get_template_directory_uri(); ?>/new/images/podcast_play.svg") no-repeat center 68%;
        background-size: 40%;
        pointer-events: none;
        transition: background-image 1s;
    }
    .other-videos__item:hover:after {
        background-image: url("<?= get_template_directory_uri(); ?>/new/images/podcast_play_active.svg");
    }

    @media screen and (max-width: 800px) {
        .other-videos__items {
            flex-direction: column;
            align-items: center;
        }
        
        .other-videos__item {
            max-width: 350px;
            min-width: 250px;
            margin-bottom: 30px;
        }

</style>

