
<?php
/*
* Section Header Phone
*/
?>

<?php
    $social_links = $GLOBALS['social_links'];
?>

<div class="section__header__phone">

    <a href="<?=$social_links['wa']?>" class="section__header__phone__grid">
        <div class="section__header__phone__icon">
            <img src="<?= get_template_directory_uri(); ?>/new/images/icn_phone_top.svg" alt="">
        </div>
        <div class="section__header__phone__text">
            <div class="section__header__phone__phone">
                <?php echo get_theme_mod('main_phone', 'Телефон'); ?>
            </div>
            <div class="section__header__phone__description">
                По записи в WhatsApp
            </div>
        </div>
    </a>

</div>

<style>
    .section__header__phone {
        align-self: center;
        padding-left: 20px;
        border-left: 1px solid #F4F4F4;
    }
    .section__header__phone__grid {
        display: flex;
        align-items: center;
    }
    .section__header__phone__icon {
        padding-right: 12px;
    }
    .section__header__phone__phone {
        text-decoration: none;
        color: rgb(var(--color-highlight));
        font-size: 15px;
        font-weight: 600;
        line-height: 20px;
    }
    .section__header__phone__description {
        color: rgb(var(--color-basetext));
        font-size: 10px;
        font-weight: 400;
        line-height: 11px;  
    }
    
    @media screen and (max-width: 800px) {
        
        .section__header__phone {
            display: block;
            width: calc(100% - 80px);
            left: -100vw;
            transition: left 0.2s;
            order: 4;
            padding: 20px;
            align-self: flex-start;
        }
        body.mobile_menu_open .section__header__phone {
            left: 0;
        }
    }

</style>