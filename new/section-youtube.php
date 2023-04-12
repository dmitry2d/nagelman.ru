
<?php
/*
* Youtube Showcase Section
*/
?>

<section class="section__youtube">

    <div class="section__youtube__container">

        <div class="section__youtube__section-title"><?= get_field('youtube_section_title');?></div>
        <div class="section__youtube__items">
            <ul class=slides>
                <?php;
                $rows = get_field('youtube_video_list');
                if( $rows ) {
                    foreach( $rows as $row ) {
                            echo '<li><div class="section__youtube__item">';
                                echo '<div class="section__youtube__item__preview"><img src="' . $row['img'] . '"></div>';
                                echo '<div class="section__youtube__item__video">';
                                    echo '<iframe width="100%" src="https://www.youtube.com/embed/';
                                    echo $row['video_id'];
                                    echo '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                                echo '</div>';
                                echo '<div class="section__youtube__item-title">' . $row['title'] . '</div>';
                            echo '</div></li>';
                        }
                    }
                ?>
            </ul>
        </div>

    </div>

</section>

<style>

    .section__youtube {
        background: white;
    }

    .section__youtube__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 0 20px 1px;
    }

    .section__youtube__section-title {
        font-family: 'Roboto Slab', serif;
        font-weight: 500;
        font-size: 32px;
        line-height: 40px;
        color: rgba(var(--color-basetext),1);
        max-width: 600px;
        margin: 30px auto 40px;
        text-align: center;
    }
    .section__youtube__item-title {
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        font-size: 24px;
        color: rgba(var(--color-basetext),1);
        max-width: 600px;
        margin: 20px auto;
        text-align: center;
        height: 50px;
    }
    .section__youtube__items {
        border: none;
        margin: 10px 0;
    }

    .section__youtube__item {
        overflow: hidden;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }
    .section__youtube__item__video {
        width: 100%;
        position: absolute;
        inset: 0;
        display: none;
    }
    .section__youtube__item__preview {
        width: 100%;
        padding-bottom: 54%;
        height: 0;
        overflow: hidden;
    }
    
    .section__youtube__item__preview img {
        display: block;
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border-radius: 20px;
        object-fit: cover;
        object-position: center center;
        opacity: 0.03;
    }

    .section__youtube__items .slides li h3 {
        font-weight: 500;
        font-size: 24px;
        line-height: 24px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-heading),1);
        padding: 20px 0;
    }

    .section__youtube__items .flex-direction-nav {
        position: absolute;
        top: 0;
        left: 0;
        height: calc(100% - 80px);
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;    
    }
    .section__youtube .flex-direction-nav .flex-next  {
        left: unset;
        right: unset;
        width: 60px;
        height: 60px;
        transform: translateX(10%);
    }
    .section__youtube .flex-direction-nav .flex-prev  {
        left: unset;
        right: unset;
        width: 60px;
        height: 60px;
        transform: translateX(-10%);
    }
    .section__youtube__items .flex-direction-nav li {
        width: 60px;
        height: 60px;
    }
    .section__youtube__items .flex-direction-nav li a {
        overflow: visible!important;
        opacity: 1!important;
    }
    .section__youtube__items .flex-direction-nav li a .fa {
        width: 60px;
        height: 60px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100px;
        font-size: 14px!important;
        border: 1px solid #00000012;
    }
    .section__youtube__items .flex-direction-nav li a i {
        color: #3B3B3B;

    }
    .section__youtube .flex-control-paging  {
        z-index: 100;
        margin-top: 30px;
        margin-bottom: 50px;
    }
    .section__youtube .flex-control-paging li a {
        width: 12px;
        height: 12px;
        margin-right: 5px;
        display: block;
        background: rgba(var(--color-heading),0.3);
        border-radius: 50px;
        cursor: pointer;
        text-indent: -9999px;
        border: none!important;
        box-shadow: none;
    }
    .section__youtube .flex-control-paging li a.flex-active {
        background-color: rgba(var(--color-heading),1);
    }
    .section__youtube .flex-control-nav {
        width: unset;
        position: relative;
        bottom: 0;
        display: inline-block;
    }
    .section__youtube__more {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        top: -85px;
        text-align: right;
        padding-right: 70px;
    }
    .section__youtube__more a {
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: rgba(var(--color-heading),1);
        text-decoration: underline;
    }


    @media screen and (max-width: 800px) {
        .section__youtube__section-title {
            font-size: 24px;
            line-height: 30px;
            margin: 20px auto 30px;
            text-align: center;
        }
        .section__youtube__item-title {
            margin: 20px auto 0;
            height: 40px;
        }
        .section__youtube__items .slides li h3 {
            font-size: 24px;
            line-height: 28px;
        }

        .section__youtube__items {
            /* margin: 10px 0px 20px; */
            padding-bottom: 1px;
        }

        .section__youtube .flex-control-paging  {
            margin-top: 55px;
            margin-bottom: 20px;
            width: 100%;
            display: block;
            text-align: center;
        }
        .section__youtube__items .flex-direction-nav {
            height: calc(100% - 60px);
        }
        .section__youtube .flex-direction-nav .flex-next  {
            pointer-events: all;
            transform: translateX(40%);
        }
        .section__youtube .flex-direction-nav .flex-prev  {
            pointer-events: all;
            transform: translateX(-40%);
        }
        
    }

</style>


<script>
$(document).ready(() => {
    $('.section__youtube__items').flexslider({
        animation: "slide",
        animationLoop: true,
        animationSpeed: 900,
        minItems: 1,
        maxItems: 1,
        slideshow: false, 
        slideshowSpeed: 2000,
        prevText: '',
        nextText: '',
        controlNav: false
    });
});
</script>


