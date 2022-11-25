
<?php
/*
* Section Header Phone
*/
?>

<div class="section__header__phone">
    <span><img src="<?= get_template_directory_uri(); ?>/new/images/phone.svg"></span>
    <a onclick="ym('47499343', 'reachGoal', 'click-on-phone-top');" href="tel:<?php echo get_theme_mod('main_phone', 'Телефон'); ?>"><?php echo get_theme_mod('main_phone', 'Телефон'); ?></a>
</div>

<style>
    .section__header__phone {
        display: flex;
        align-items: center;
        padding: 0 10px;
    }
    .section__header__phone a {
        font-weight: 700;
        font-size: 15px;
        line-height: 24px;
        color: rgba(var(--color-basetext),1);
        text-decoration: none;;
    }
    
    @media screen and (max-width: 800px) {
        .section__header__phone {
            display: block;
            width: calc(100% - 80px);
            left: -100vw;
            transition: left 0.2s;
            order: 4;
            padding: 20px;
        }
        body.mobile_menu_open .section__header__phone {
            left: 0;
        }
    }

</style>