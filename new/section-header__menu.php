
<?php
/*
* Section Header - Menu
*/
?>

<div class="section__header__menu">

    <?php /* Primary navigation */
        wp_nav_menu( array(
        'menu' => 'header_menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'section__header__menu__items',
        'walker' => new wp_bootstrap_navwalker())
        );
    ?>

</div>

<style>
    .section__header__menu {
        min-width: 100%;
        margin: 30px 0;
    }
    .section__header__menu:before {
        position: absolute;
        content: '';
        left: -50vw;
        right: -50vw;
        top: 0;
        bottom: 0;
        background-color: rgba(var(--color-heading),1);
    }
    .section__header__menu__items {
        display: flex;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    .section__header__menu__items li {
        margin: 0;
        padding: 0;
    }
    .section__header__menu__items a {
        display: block;
        font-weight: 400;
        font-size: 15px;
        line-height: 24px;
        color: white;
        -webkit-text-fill-color: white;
        text-decoration: none;
        padding: 17px 20px;
        transition: background-color 0.3s;
    }
    .section__header__menu__items a:hover,
    .section__header__menu__items .active a {
        background: #ffffff20;
    }   
    @media screen and (max-width: 800px) {
        .section__header__menu {
            display: block;
            width: calc(100% - 80px);
            background: white;
            left: -100vw;
            transition: left 0.2s;
        }
        .section__header__menu {
            padding: 0px 0 0;
            margin: 0;
            background: white;
            min-width: unset;
            border-top: 10px solid #f5f5f5;
        }
        body.mobile_menu_open .section__header__menu {
            left: 0;
        }
        .section__header__menu:before {
            display: none;
        }
        .section__header__menu__items {
            flex-wrap: wrap;
            background: white;
            padding: 0;
        }
        .section__header__menu__items li {
            width: 100%;
        }
        .section__header__menu__items li a {
            color: rgba(var(--color-basetext),1);
            -webkit-text-fill-color: rgba(var(--color-basetext),1);
            border-bottom: 1px solid #f5f5f5;
            border-top: 1px solid #f5f5f5;
            padding: 10px 30px;
        }
        .section__header__menu__items .active a {
            background-color: rgba(var(--color-heading),1);
            color: white;
            -webkit-text-fill-color: white;
        }
        .section__header__menu__items :not(.active) a:hover {
            background: #f5f5f5;
        }
    }
</style>
