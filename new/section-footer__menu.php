
<?php
    $social_links = $GLOBALS['social_links'];
?>

<!-- Копирайты для мобайл -->
<mob>
    <div class="section__footer__requisites">
        <?= get_field ('footer__requisites', 2)?> 
    </div>
    <a href="<?= get_field ('oferta-document', 2)?>" class="section__footer__oferta-link">
        Договор оферты
    </a>
    <div class="section__footer__dev">
        Дизайн и разработка сайта: <a href="https://www.globalcode.eu/">Global&nbsp;Code</a>
    </div>
</mob>

<!-- Меню -->
<desk>
    <div class="section__footer__menu">
        <?php /* Primary navigation */
            wp_nav_menu( array(
                'menu' => 'header_menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'section__footer__menu__items',
                'walker' => new wp_bootstrap_navwalker())
            );
        ?>   
    </div>
</desk>

<mob>
    <div class="section__footer__menu">
        <a href="" class="section__footer__copyright">
            ©<?php echo date('Y');?>. <?php bloginfo('name') ?>
        </a>
        <div class="section__footer__socials">
            <a onclick="ym('47499343', 'reachGoal', 'click-on-telegram-top');" rel="nofollow" href="<?= $social_links['tg']?>" title="Мой Telegram">
                <img src="<?= get_template_directory_uri(); ?>/new/images/telegram_w.svg">
            </a>  
            <a onclick="ym('47499343', 'reachGoal', 'click-on-vk-top');" rel="nofollow" href="<?= $social_links['vk']?>" title="Мой VK">
                <img src="<?= get_template_directory_uri(); ?>/new/images/vk_w.svg">
            </a>
            <a onclick="ym('47499343', 'reachGoal', 'click-on-skype-top');" rel="nofollow" href="<?= $social_links['skype']?>" title="Мой Skype">
                <img src="<?= get_template_directory_uri(); ?>/new/images/skype_w.svg">
            </a>  
            <a onclick="ym('47499343', 'reachGoal', 'click-on-whatsapp-top');" rel="nofollow" href="<?= $social_links['wa']?>" target="_blank" title="Мой Whatsapp">
                <img src="<?= get_template_directory_uri(); ?>/new/images/whatsapp_w.svg">
            </a>
            <a href="<?= $social_links['dz']?>" title="">
                <img src="<?= get_template_directory_uri(); ?>/new/images/dz_w.svg">
            </a>  
        </div>
    </div>
</mob>

<desk>
    <div class="section__footer__bottom-wrapper">
        <div class="section__footer__copyright__wrapper">
            <a href="" class="section__footer__copyright">
                ©<?php echo date('Y');?>. <?php bloginfo('name') ?>
            </a>
            <div class="section__footer__requisites">
                <?= get_field ('footer__requisites', 2)?> 
            </div>
            <a href="<?= get_field ('oferta-document', 2)?>" class="section__footer__oferta-link">
                Договор оферты
            </a>
            <div class="section__footer__dev">
                Дизайн и разработка сайта: <a href="https://www.globalcode.eu/">Global&nbsp;Code</a>
            </div>
        </div>
        <div class="section__footer__desktop-socials__wrapper">
            <div class="section__footer__socials">
                <a onclick="ym('47499343', 'reachGoal', 'click-on-telegram-top');" rel="nofollow" href="<?= $social_links['tg']?>" title="Мой Telegram">
                    <img src="<?= get_template_directory_uri(); ?>/new/images/telegram_b.svg">
                </a>  
                <a onclick="ym('47499343', 'reachGoal', 'click-on-vk-top');" rel="nofollow" href="<?= $social_links['vk']?>" title="Мой VK">
                    <img src="<?= get_template_directory_uri(); ?>/new/images/vk_b.svg">
                </a>
                <a onclick="ym('47499343', 'reachGoal', 'click-on-skype-top');" rel="nofollow" href="<?= $social_links['skype']?>" title="Мой Skype">
                    <img src="<?= get_template_directory_uri(); ?>/new/images/skype_b.svg">
                </a>  
                <a onclick="ym('47499343', 'reachGoal', 'click-on-whatsapp-top');" rel="nofollow" href="<?= $social_links['wa']?>" target="_blank" title="Мой Whatsapp">
                    <img src="<?= get_template_directory_uri(); ?>/new/images/whatsapp_b.svg">
                </a>
                <a href="<?= $social_links['dz']?>" title="">
                    <img src="<?= get_template_directory_uri(); ?>/new/images/dz_b.svg">
                </a>  
            </div>
        </div>
    </div>
</desk>

<style>

    .section__footer__menu {
        display: flex;
        min-width: 100%;
        margin: 20px 0;
    }
    .section__footer__menu:before {
        position: absolute;
        content: '';
        left: -50vw;
        right: -50vw;
        top: 0;
        bottom: 0;
        background-color: rgba(var(--color-heading),1)
    }

    .section__footer__menu__items {
        display: flex;
        align-items: stretch;
        flex-grow: 1;
        list-style-type: none;
        
    }
    .section__footer__menu__items > * {
        padding: 0!important;
    }
    .section__footer__menu__items a,
    .section__footer__menu__copyright {
        display: block;
        font-weight: 400;
        font-size: 15px;
        line-height: 24px;
        color: white;
        text-decoration: none;
        padding: 17px 20px;
        transition: background-color 0.3s;
    }
    .section__footer__menu__items a:hover,
    .section__footer__menu__items .active a {
        background: #ffffff20;
    }
    .section__footer__menu__items a {
        height: 100%;
        display: flex;
        align-items: center;
        line-height: 14px;
        padding: 25px 20px;
    }

    .section__footer__menu__items a:hover,
    .section__footer__menu__copyright:hover {
        color: white;
    }
    .section__footer__socials {
        display: flex;
        flex-grow: 1;
        align-items: center;
        justify-content: flex-end;
    }
    .section__footer__socials a {
        margin-left: 10px;
        /* width: 30px; */
    }
    .section__footer__copyright__wrapper {
        width: 100%;
        padding: 10px 0 50px;
        font-size: 17px;
    }
    .section__footer__copyright {
        -webkit-text-fill-color: rgba(var(--color-basetext),1);
        color: rgba(var(--color-basetext),1);
    }

    .section__footer__oferta-link,
    .section__footer__dev a {
        font-size: 17px;
        text-decoration: none;
        -webkit-text-fill-color: rgba(var(--color-highlight),1);
        color: rgba(var(--color-highlight),1);
    }

    .section__footer__dev {
        padding-top: 30px;
    }

    .section__footer__bottom-wrapper {
        display: flex;
    }

    .section__footer__desktop-socials__wrapper {
        padding-top: 10px;
    }
    .section__footer__desktop-socials__wrapper
        .section__footer__socials img{
            max-width: unset;
    }

    @media screen and (max-width: 800px) {
        .section__footer__menu {
            padding: 0;
            margin: 20px 0;
        }
        .section__footer__copyright {
            color: white;
            padding: 20px 0;
        }
        .section__footer__copyright {
            color: white;
            -webkit-text-fill-color: white;
        }
        .section__footer__copyright,
        .section__footer__requisites,
        .section__footer__oferta-link,
        .section__footer__dev {
            text-align: left;
        }

</style>