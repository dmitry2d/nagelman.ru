
<?php
/*
* Common Styles and Scripts
*/
?>

<?php
    get_template_part('new/section', 'service-form');
?>

<style>
    /* template-common.php */

    :root {
        --desktop-max-width: 1080px;
        --color-basetext: 79, 79, 79;
        --color-heading: 161, 142, 128;
        --color-highlight: 58, 111, 132;
    }
    * {
        padding:0;
        margin:0;
        box-sizing: border-box;
        position: relative;
        font-family: 'Roboto', Arial, Helvetica, sans-serif;
        font-size: 15px;
        line-height: 24px;
        color: rgba(var(--color-basetext),1);
    }

    body {
        overflow-x: hidden;
        overflow-y: auto;
        margin: 0;
        padding: 0;
        opacity: 0;
        transition: opacity 0.1s;
        box-sizing: border-box;
        position: relative;
    }
    body.ready_ {
        opacity: 1!important;
    }

    html {
        overflow-x: hidden;
        overflow-y: auto;
        margin: 0!important;
        padding: 0;
    }
    .template__page__data {
        flex-grow: 1;
    }

    #wpadminbar {
        display: none;
    }
    .bazz-widget {
        display: none;
    }
    #wpfront-scroll-top-container {
        display: none!important;
    }

    mob {
        display: none;
    }
    @media screen and (max-width: 800px) {
        body {
            padding-top: 80px!important;
            padding-bottom: 70px!important;
        }
        mob {
            display: initial;
        }
        desk {
            display: none;
        }
    }


    .template__page__title {
        font-family: 'Roboto Slab', serif;
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
        color: rgba(var(--color-basetext),1);
        font-size: 32px;
        line-height: 42px;
        font-weight: 500;
    }
    .single-page .template__page__title {
        color: rgba(var(--color-heading),1);
        font-family: 'Roboto', Arial, sans-serif;
    }
    .template__category .template__page__title {
        color: rgba(var(--color-basetext),1);
    }
    .template__page__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 30px 20px 0;
        display: flex;
    }
    .template__page__data {
        flex-grow: 1;
    }
    .template__page__sidebar {
        min-width: 320px;
        width: 320px;
        padding-left: 50px;
    }
    .template__page p {
        font-weight: 400;
        font-size: 15px;
        line-height: 24px;
        padding-bottom: 20px;
    }
    .template__page h2 {
        font-weight: 600;
        font-size: 15px;
        line-height: 24px;
        color: rgba(var(--color-heading),1);
        padding: 10px 0 30px;
    }


    @media screen and (max-width: 800px) {
        .template__page__container {
            flex-wrap: wrap;
        }
        .template__page__container > * {
            padding-left: 0;
            min-width: 100%;
        }
        .template__page {
            min-height: calc(100vh - 404px);
        }
        body.mobile_menu_open {
            pointer-events: none;
            touch-action:none;
            overflow: hidden;
            position: fixed;
        }
        html.mobile_menu_open {
            pointer-events: none;
            touch-action:none;
            overflow: hidden;
            position: fixed;
        }
        .template__page__title {
            font-size: 26px;
            line-height: 32px;
            padding: 20px 20px 0;
        }
    }

    .content__spoiler {
        border: 1px solid rgba(var(--color-heading),0.21);
        border-bottom: none;
        border-left: none;
        border-right: none;
        padding: 10px 0;
    }
    .content__spoiler:before {
        content: '';
        position: absolute;
        top: 12px;
        right: 0;
        width: 34px;
        height: 34px;
        background: white url('<?= get_template_directory_uri(); ?>/new/images/plus.svg') no-repeat center center;
        transition: 0.4s;
        border-radius: 100px;
    }

    .content__spoiler__title {
        font-weight: 600;
        font-size: 24px;
        line-height: 38px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-basetext),1);
        padding-right: 50px;
        cursor: pointer;
    }
    .content__spoiler__wrapper {
        overflow: hidden;
        max-height: 0;
        transition: 0.4s;
    }
    .content__spoiler__text {
        font-weight: 400;
        font-size: 15px;
        line-height: 24px;
        color: rgba(var(--color-basetext),1);
        margin: 10px 0;
        padding: 20px 0;
    }
    .content__spoiler.open:before {
        transform: rotate(45deg);
        background: url('<?= get_template_directory_uri(); ?>/new/images/plus_beige.svg') no-repeat center center;
        background-color: rgba(var(--color-heading),0.15);
    }
    .content__quote {
        background-color: #f6f6f6;
        border: 1px solid #e0e0e0;
        padding: 20px;
        /* font-family: 'Courier New', Courier, monospace */
    }
    .content__red {   
        color: rgba(var(--color-highlight),1);
    }
    .content__bold {
        font-weight: 600;
    }
    @media screen and (max-width: 800px) {
        .content__quote {
            font-size: 13px;
        }
        .content__spoiler__title {
            font-size: 20px;
        }
    }

</style>

<script>
    
    // template-common.php

    $(document).ready (() => {
        setTimeout (() => {
            $('body').addClass('ready_');
        }, 250);

        // Detect Yandex Browser
        // Set up a style for it

        if (((navigator || {}).userAgent || '').search(/YaBrowser/) > 0) {
            $('body').addClass('yaBrowser');
        }
    });

    //  Spoiler script

    $(document).ready(() => {
        $(document).on('click', '.content__spoiler', e => {
            if ($(e.target).closest('.content__spoiler__safe').length){
                // If clicked on "safe" class, for example, for link in spoiler - do not use spoiler script
            } else {
                let wrapperNode = $(e.currentTarget).find('.content__spoiler__wrapper');
                let textNode = $(e.currentTarget).find('.content__spoiler__text');
                let newMaxHeight = $(e.currentTarget).hasClass('open') ? 0 : textNode.outerHeight()
                wrapperNode.css({
                   'max-height': newMaxHeight
                });
                $(e.currentTarget).toggleClass('open');
            };
        });
    });


</script>


