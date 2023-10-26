<?php
    /*
    * Section Header
    */
    /*
    * Getting social item links from 'Social buttons' array. 
    */
    $social_buttons = get_field('social-set__items',2);
    $social_links = array(
        'vk' => '',
        'tg' => '',
        'skype' => 'skype:nagelman3?call',
        'wa' => '',
        'dz' => ''
    );
    foreach ($social_buttons as $item) {
        if ($item['pseudo']) {
            $social_links [$item['pseudo']] = $item ['link'];
        }
    };
    $GLOBALS['social_links'] = $social_links;
?>
<html class="no-js" lang="ru-RU">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name=”format-detection” content=”telephone=no”>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='wmail-verification' content='9b2a6a897118713b8712be1fc92b67fc' />
        <meta name="yandex-verification" content="9022ea13443a9e20" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="<?= get_template_directory_uri() . "/new/images/logo_share.png"?>" />
        <meta property="og:url" content="https://elenanagelman.ru" />
        <meta property="og:description" content="Консультация психолога онлайн" />
        <?php wp_head(); ?>
        <title><?php
            if (get_query_var('page_title') != '') {
                echo get_query_var('page_title');
            } else {
                wp_title();
            };
        ?></title>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134623459-1"></script>        
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-134623459-1');
        </script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

        <!-- VK Shares -->
        <script type="text/javascript" src="https://vk.com/js/api/share.js?93" charset="windows-1251"></script>

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

                <div class="section__header__wrapper">

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
        padding: 40px 20px 0;
        
    }
    .section__header__wrapper {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }
    @media screen and (max-width: 800px) {
        .section__header__container {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: calc(100vh);
            z-index: 1000;
            padding: 0;
            pointer-events: none;
            -webkit-overflow-scrolling: touch;
            height: 100%;
        }
        .section__header__wrapper {
            -webkit-overflow-scrolling: touch;
            flex-wrap: nowrap;
            align-items: flex-start;
            flex-direction: column;
            pointer-events: none;
        }
        .section__header__wrapper * {
            pointer-events: all;
        }
        body.mobile_menu_open .section__header__container {
            pointer-events: all;
            overflow: scroll;
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