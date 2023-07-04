

<?php
/*
* Podcast Section
*/
    $podcast_list = get_field('podcasts', 2);
?>

<script>
    // Объект подкастов
    const podcastData = {
        idList: [],
        previewPlayers: [],
        bigPlayer: null,
        activeVideoIndex: 0,
        loadedPreviewsCount: 0
    }
</script>

<div class="podcast__player">
    <div class="podcast__player__active">
        <div class="podcast__player__active__preview">
            <img src="" id="podcast-video-preview">
        </div>
        <div class="podcast__player__active__video">
            <div class="podcast__player__active__video__wrapper">
                <div id="podcast-video"></div>
            </div>
        </div>
        <div class="podcast__player__active__title">&nbsp;</div>
    </div>
    <div class="podcast__player__previews scrollbar">
        <div class="podcast__player__previews__wrapper">
            <div class="podcast__player__items">
                <?php
                    foreach ($podcast_list as $index => $podcast) {
                        if ($podcast['active']) {
                ?>
                    <div class="podcast__player__item" podcast-item-index="<?=$index?>">
                        <div class="podcast__player__item__left">
                            <div class="podcast__player__item__left__wrapper">
                                <img src="https://i.ytimg.com/vi/<?=$podcast['link']?>/hqdefault.jpg">
                            </div>
                            <div class="podcast__player__item__video" id="podcast-preview-<?=$podcast['link']?>"></div>
                        </div>
                        <div class="podcast__player__item__right">
                            <div class="podcast__player__item__title"></div>
                            <div class="podcast__player__item__duration"></div>
                        </div>
                    </div>
                    <script>
                        podcastData.idList.push("<?=$podcast['link']?>")
                    </script>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
        
<style>
    .podcast__player {
        display: flex;
        background: #F5F3F1;
        border-radius: 10px;
        overflow: hidden;
    }
    .podcast__player:after {
        position: absolute;
        content: '';
        inset: 0;
        background: url("<?= get_template_directory_uri(); ?>/new/images/loading.svg") no-repeat center center;
        animation: infinite 5s loading linear;
    }
    @keyframes loading {
        0% {
            transform: rotate(0deg)
        }
        100% {
            transform: rotate(260deg)
        }
    }
    .podcast__player * {
        visibility: hidden;
    }
    .podcast__player.loaded * {
        visibility: visible;
    }
    .podcast__player.loaded:after {
        display: none;
    }
    .podcast__player__active {
        padding: 20px;
        flex-grow: 1;
    }

    .podcast__player__previews {
        padding: 20px;
        overflow: auto;
        width: 30%;
        background: #EEECE9;
        
    }
    .podcast__player__previews__wrapper {
        position: absolute;
        top: 22px;
        left: 0;
        width: 100%;
        padding-bottom: 20px;
    }
    .podcast__player__item {
        display: flex;
        padding: 8px 20px;
        cursor: pointer;
        transition: background-color 0.6S;
    }
    .podcast__player__item:hover,
    .podcast__player__item.active {
        background-color: #DDD7D2;
    }
    .podcast__player__item__left {
        min-width: 45%;
        max-width: 45%;
    }
    .podcast__player__item__left:after {
        position: absolute;
        content: '';
        inset: 0;
        background: url("<?= get_template_directory_uri(); ?>/new/images/podcast_play.svg") no-repeat center 68%;
        background-size: 50px;
        pointer-events: none;
        transition: opacity 0.3s ease-in;
    }
    .podcast__player__item__left:before {
        position: absolute;
        content: '';
        inset: 0;
        background: url("<?= get_template_directory_uri(); ?>/new/images/podcast_play_active.svg") no-repeat center 68%;
        background-size: 50px;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.3s ease-in;
        z-index: 100;
    }
    .podcast__player__item:hover .podcast__player__item__left:after {
        opacity: 0;
    }
    .podcast__player__item:hover .podcast__player__item__left:before {
        opacity: 1;
    }


    .podcast__player__item__left__wrapper {
        width: 100%;
        height: 0;
        padding-bottom: 55%;
        overflow: hidden;
        border-radius: 10px;
    }

    .podcast__player__item__left img {
        position: absolute;
        display: block;
        top: -20%;
        left: 0;
        width: 110%;
        height: 140%;
        object-fit: cover;
    }
    .podcast__player__item__right {
        flex-grow: 1;
        margin-left: 10px;
    }
    .podcast__player__item__title {
        position: absolute;
        inset: 0;
        overflow: hidden;
        color: #4f4f4f;
        font-size: 15px;
        font-weight: 500;
        line-height: 1;
        height: 2.1em;
    }
    .podcast__player__item__duration {
        display: inline-block;
        position: absolute;
        bottom: 0;
        background: #515151;
        border-radius: 4px;
        color: white;
        font-size: 14px;
        font-weight: 400;
        padding: 2px 0 1px;
        line-height: 17px;
        width: 49px;
        text-align: center;
    }
    .podcast__player__item__duration:empty {
        display: none;
    }
    .podcast__player__item__video {
        display: none;
    }
    .podcast__player__active__video {
        display: none;
        width: 100%;
        height: 0;
        padding-bottom: 55%;
        overflow: hidden;
        border-radius: 20px;
    }
    .podcast__player__active__video__wrapper {
        position: absolute;
        inset: 0;
    }
    .podcast__player__active.playing .podcast__player__active__video {
        display: block;
    }
    .podcast__player__active__preview {
        width: 100%;
        height: 0;
        padding-bottom: 55%;
        overflow: hidden;
        border-radius: 20px;
        cursor: pointer;
    }
    .podcast__player__active.playing .podcast__player__active__preview {
        display: none;
    }
    .podcast__player__active__preview img {
        position: absolute;
        display: block;
        width: 100%;
        top: 0;
        left: 0;
        height: 100%;
        object-fit: cover;
    }
    .podcast__player__active__preview:after {
        position: absolute;
        content: '';
        inset: 0;
        background: url("<?= get_template_directory_uri(); ?>/new/images/podcast_play.svg") no-repeat center 53%;
        background-size: 120px;
        pointer-events: none;
        transition: opacity 0.3s;
    }
    .podcast__player__active__preview:before {
        position: absolute;
        content: '';
        inset: 0;
        background: url("<?= get_template_directory_uri(); ?>/new/images/podcast_play_active.svg") no-repeat center 53%;
        background-size: 120px;
        pointer-events: none;
        transition: opacity 0.3s;
        opacity: 0;
        z-index: 100;
    }
    .podcast__player__active__preview:hover:after {
        opacity: 0;
    }
    .podcast__player__active__preview:hover:before {
        opacity: 1;
    }
    .podcast__player__active__title {
        font-size: 24px;
        padding: 20px;
        padding-top: 30px;
        font-weight: 500;
        text-align: center;
    }


    .scrollbar::-webkit-scrollbar {
        width: 50px;
    }

    .scrollbar::-webkit-scrollbar-track {
        background-color: rgba(255,255,255,0.5);
        border-radius: 1000px;
        background-clip: padding-box;
        border: 20px solid rgba(0,0,0,0);
    }

    .scrollbar::-webkit-scrollbar-thumb {
        background-color: rgba(161,142,128,0.4);
        border-radius: 1000px;
        background-clip: padding-box;
        border: 20px solid rgba(0,0,0,0);
    }

    @media screen and (max-width: 800px) {
        .podcast__player {
            flex-direction: column;
        }
        .podcast__player__previews__wrapper {
            position: relative;
            inset: unset;
        }
        .podcast__player__previews {
            width: 100%;
        }
        .podcast__player__previews {
            padding: 10px 0;
            overflow: unset;
        }
        .podcast__player__previews__wrapper {
            padding: 0;
        }
        .podcast__player__active__title {
            padding: 20px 0;
            padding-top: 30px;
        }
    }
</style>



<script>

   initYoutubeiFrameAPI ();
   
   function onYouTubeIframeAPIReady() {
        
        initBigPreview ();
        initPreviews ();
        bindEvents ();
        highlightPreview ();

    }
   
    // Инициализация Youtube iFrame API
    function initYoutubeiFrameAPI () {
        const firstScriptTag = document.getElementsByTagName('script')[0];
        const scriptTag = document.createElement('script');
        scriptTag.src = "https://www.youtube.com/iframe_api";
        firstScriptTag.parentNode.insertBefore(scriptTag, firstScriptTag);
    }

    // Добавление видео в большое превью
    function initBigPreview () {
        podcastData.bigPlayer = new YT.Player('podcast-video', {
            width: '100%',
            height: '100%',
            videoId: podcastData.idList[0],
            events: {
                'onReady': onBigPlayerReady,
                // 'onStateChange': onPlayerStateChange
            },
            origin: window.location.href,
            autoplay: '0'
        });
        // Превью картинка
        $('#podcast-video-preview').attr('src',`https://i.ytimg.com/vi/${podcastData.idList[0]}/sddefault.jpg`);
    }

    // Добавление видео списка превью
    function initPreviews () {
        for (let [index, videoId] of podcastData.idList.entries()) {
            const player = new YT.Player(`podcast-preview-${videoId}`, {
                width: '136',
                height: '73',
                videoId: videoId,
                events: {
                    'onReady': onPreviewPlayerReady,
                    // 'onStateChange': onPlayerStateChange
                },
                origin: window.location.href,
                autoplay: '0'
            });
            player.meta = {
                index: index
            };
            podcastData.previewPlayers.push(player);
        };
    }
    
    // Изменение большого видео
    function changeBigPreview () {
        podcastData.bigPlayer.stopVideo();
        $('.podcast__player__active').removeClass('playing');
        const videoId = podcastData.idList[podcastData.activeVideoIndex];
        $('#podcast-video-preview').attr('src',`https://i.ytimg.com/vi/${videoId}/sddefault.jpg`);
        podcastData.bigPlayer.cueVideoById(videoId);
        const previewPlayer = podcastData.previewPlayers[podcastData.activeVideoIndex];
        $(`.podcast__player__active__title`).html(previewPlayer.getVideoData()?.title);
    }

    // Подсвечиваю активное превью в списке
    function highlightPreview () {
        $(`[podcast-item-index]`).removeClass('active');
        $(`[podcast-item-index=${podcastData.activeVideoIndex}]`).addClass('active');
    }

    // Подвешиваю ивенты
    function bindEvents () {
        // Большое превью
        $('#podcast-video-preview').on('click', e => {
            $('.podcast__player__active').addClass('playing');
            podcastData.bigPlayer.playVideo();
        });
        // Превью из списка
        $('.podcast__player__item').on('click', e => {
            const index = $(e.currentTarget).attr('podcast-item-index');
            podcastData.activeVideoIndex = index;
            highlightPreview ();
            changeBigPreview ();
        });
    }


    function onPreviewPlayerReady(event) {
        const index = event.target.meta.index;
        $(`[podcast-item-index=${index}] .podcast__player__item__title`).html(event.target.getVideoData()?.title);
        $(`[podcast-item-index=${index}] .podcast__player__item__duration`).html(secondsToHms(event.target.getDuration()));
        podcastData.loadedPreviewsCount ++;
        
        // Проверяю - все ли загружено
        checkLoading ();
    }
    
    function checkLoading () {
        if (podcastData.loadedPreviewsCount === podcastData.idList.length){
            $('.podcast__player').addClass('loaded');
        };
    }

    function onBigPlayerReady(event) {
        $(`.podcast__player__active__title`).html(event.target.getVideoData()?.title);
    }

    function secondsToHms(d) {
        d = Number(d);
        var h = Math.floor(d / 3600);
        var m = Math.floor(d % 3600 / 60);
        var s = Math.floor(d % 3600 % 60);
        return (h > 0 ? h + ':' : '') + (h > 0 ? ('0' + m).slice(-2) : m) + ':' + ('0' + s).slice(-2);
    }

</script>

<!-- 
Youtube previews: 

Width | Height | URL
------|--------|----
120   | 90     | https://i.ytimg.com/vi/<VIDEO ID>/1.jpg
120   | 90     | https://i.ytimg.com/vi/<VIDEO ID>/2.jpg
120   | 90     | https://i.ytimg.com/vi/<VIDEO ID>/3.jpg
120   | 90     | https://i.ytimg.com/vi/<VIDEO ID>/default.jpg
320   | 180    | https://i.ytimg.com/vi/<VIDEO ID>/mq1.jpg
320   | 180    | https://i.ytimg.com/vi/<VIDEO ID>/mq2.jpg
320   | 180    | https://i.ytimg.com/vi/<VIDEO ID>/mq3.jpg
320   | 180    | https://i.ytimg.com/vi/<VIDEO ID>/mqdefault.jpg
480   | 360    | https://i.ytimg.com/vi/<VIDEO ID>/0.jpg
480   | 360    | https://i.ytimg.com/vi/<VIDEO ID>/hq1.jpg
480   | 360    | https://i.ytimg.com/vi/<VIDEO ID>/hq2.jpg
480   | 360    | https://i.ytimg.com/vi/<VIDEO ID>/hq3.jpg
480   | 360    | https://i.ytimg.com/vi/<VIDEO ID>/hqdefault.jpg

Width | Height | URL
------|--------|----
640   | 480    | https://i.ytimg.com/vi/<VIDEO ID>/sd1.jpg
640   | 480    | https://i.ytimg.com/vi/<VIDEO ID>/sd2.jpg
640   | 480    | https://i.ytimg.com/vi/<VIDEO ID>/sd3.jpg
640   | 480    | https://i.ytimg.com/vi/<VIDEO ID>/sddefault.jpg
1280  | 720    | https://i.ytimg.com/vi/<VIDEO ID>/hq720.jpg
1920  | 1080   | https://i.ytimg.com/vi/<VIDEO ID>/maxresdefault.jpg

 -->