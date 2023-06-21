
<?php
/*
* Section Header - Socials
*/
?>


<?php

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

?>

<div class="section__header__social">
    <a onclick="ym('47499343', 'reachGoal', 'click-on-telegram-top');" rel="nofollow" href="<?= $social_links['vk']?>" title="Мой Telegram">
        <img src="<?= get_template_directory_uri(); ?>/new/images/vk.svg">
    </a>  
    <a onclick="ym('47499343', 'reachGoal', 'click-on-telegram-top');" rel="nofollow" href="<?= $social_links['tg']?>" title="Мой Telegram">
        <img src="<?= get_template_directory_uri(); ?>/new/images/telegram.svg">
    </a>  
    <a onclick="ym('47499343', 'reachGoal', 'click-on-skype-top');" rel="nofollow" href="<?= $social_links['skype']?>" title="Мой Skype">
        <img src="<?= get_template_directory_uri(); ?>/new/images/skype.svg">
    </a>  
    <a href="<?= $social_links['dz']?>" title="">
        <img src="<?= get_template_directory_uri(); ?>/new/images/dz.svg">
    </a>  
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