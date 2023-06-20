
<?php
/*
* Section Header
*/
?>

<html class="no-js" lang="ru-RU">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name=”format-detection” content=”telephone=no”>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='wmail-verification' content='9b2a6a897118713b8712be1fc92b67fc' />
        <meta name="yandex-verification" content="4d883fdcb2aeb93d" />
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134623459-1"></script>        
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-134623459-1');
        </script>

        <!-- jQuery -->
        <script
            src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
            crossorigin="anonymous">
        </script>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

    </head>


    <body style="opacity: 0">

        <!--[if lt IE 9]>
            <div class="alert alert-warning">Вы используете <strong>устаревшую версию</strong> браузера. Пожалуйста, обновите ваш браузер до более свежей версии</div>
        <![endif]-->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
            ym(47499343, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true,
                trackHash:true
            });
        </script>
        <noscript>
            <div>
                <img src="https://mc.yandex.ru/watch/47499343" style="position:absolute; left:-9999px;" alt="" />
            </div>
        </noscript>
        <!-- /Yandex.Metrika counter -->

        <header class="section__header">

            <div class="section__header__container">

                <!-- Site Title -->
                             
                <?php
                    get_template_part ('new/section', 'header__site-title');
                ?>

                <!-- Consult Form Button -->
                <?php
                    get_template_part ('new/section', 'header__about-whatsapp');
                ?>

                <!-- Social Links -->
                <?php
                    get_template_part ('new/section', 'header__socials');
                ?>

                <!-- Phone Section -->
                <?php
                    get_template_part ('new/section', 'header__phone');
                ?>

                <!-- Menu Section  -->
                <?php
                    get_template_part ('new/section', 'header__menu');
                ?>

            </div>

        </header>


<style>
    .section__header {
        all: unset;
    }
    .section__header__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        padding: 40px 20px 0;
        
    }
    @media screen and (max-width: 800px) {
        .section__header__container {
            position: fixed;
            flex-wrap: nowrap;
            left: 0;
            top: 0;
            width: 100%;
            height: calc(100vh);
            z-index: 1000;
            padding: 0;
            flex-direction: column;
            align-items: flex-start;
            pointer-events: none;
        }
        body.mobile_menu_open .section__header__container  {
            pointer-events: all;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
        }
        .section__header__container * {
            pointer-events: all;
        }
    }
</style>
    
<script>
    $(document).ready (() => {

        // Bind Menu Open/Close
        $('.section__header__hamburger').on('click', () => {
            $('html').addClass('mobile_menu_open');
            $('body').addClass('mobile_menu_open');
        });
        $('.section__header__hamburger-close').on('click', () => {
            $('html').removeClass('mobile_menu_open');
            $('body').removeClass('mobile_menu_open');
        });

    });
</script>