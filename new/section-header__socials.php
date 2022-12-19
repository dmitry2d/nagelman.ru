
<?php
/*
* Section Header - Socials
*/
?>

<div class="section__header__social">
    <a onclick="ym('47499343', 'reachGoal', 'click-on-telegram-top');" rel="nofollow" href="https://vk.com/club212098865" title="Мой Telegram">
        <img src="<?= get_template_directory_uri(); ?>/new/images/vk.svg">
    </a>  
    <a onclick="ym('47499343', 'reachGoal', 'click-on-telegram-top');" rel="nofollow" href="tg://resolve?domain=ElenaNagelman" title="Мой Telegram">
        <img src="<?= get_template_directory_uri(); ?>/new/images/telegram.svg">
    </a>  
    <a onclick="ym('47499343', 'reachGoal', 'click-on-skype-top');" rel="nofollow" href="skype:nagelman3?call" title="Мой Skype">
        <img src="<?= get_template_directory_uri(); ?>/new/images/skype.svg">
    </a>  
    <!-- <a onclick="ym('47499343', 'reachGoal', 'click-on-whatsapp-top');" rel="nofollow" href="https://wa.me/79210205165" target="_blank" title="Мой Whatsapp">
        <img src="<?php //echo get_template_directory_uri(); ?>/new/images/whatsapp.svg">
    </a>   -->
</div>

<style>
    .section__header__social {
        display: flex;
        padding: 0 10px;
    }
    .section__header__social  a {
        text-decoration: none;
        padding: 5px;
    }
    @media screen and (max-width: 800px) {
        .section__header__social {
            display: block;
            width: calc(100% - 80px);
            left: -100vw;
            transition: left 0.2s;
        } 
        .section__header__social {
            order: 3;
            padding: 16px 20px 10px;
            border-bottom: 10px solid #f5f5f5;
            border-top: 10px solid #f5f5f5;
        }
        body.mobile_menu_open .section__header__social {
            left: 0;
        }
    }
</style>