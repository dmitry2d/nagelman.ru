
<?php
/*
* Section Header - Site Titles
*/
?>

<div class="section__header__site-title">

    <a href="/" class="section__header__site-title__logo">
        <img src="<?= get_template_directory_uri(); ?>/new/images/logo_v3.svg">
    </a>

    <!-- Hamburger -->
    <mob class="section__header__hamburger">
        <img src="<?= get_template_directory_uri(); ?>/new/images/hamburger.svg">
    </mob>

</div>

<!-- Hamburger Close  -->
<mob class="section__header__hamburger-close">
    <img src="<?= get_template_directory_uri(); ?>/new/images/hamburger_close.svg">
</mob>

<!-- Mobile Menu Fader -->
<mob class="section__header__menu-fader"></mob>


<style>
    .section__header__site-title {
        flex-grow: 1;
        display: flex;
        align-items: center;
    }
    .section__header__site-title__logo {
        flex-grow: 1;
    }
    .section__header__hamburger {
        padding: 10px 0;
        cursor: pointer;
    }
    .section__header__hamburger-close {
        position: fixed;
        right: 18px;
        top: 20px;
        cursor: pointer;
        display: none;
    }
    .section__header__menu-fader {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        pointer-events: none!important;
        opacity: 0;
        background: #00000070;
        transition: 0.1s;
    }
    .section__header__menu-fader:after {
        content: '';
        position: absolute;
        top: 0;
        bottom:0;
        left: 0;
        width: 0;
        background: white;
        transition: width 0.2s;
    }
    body.mobile_menu_open .section__header__menu-fader:after {
        width: calc(100% - 80px);
    }

    @media screen and (max-width: 800px) {
        .section__header__site-title {
            background: white;
            border-bottom: 1px solid #f2f2f2;
            padding: 10px 20px;
            width: 100%;
            flex-grow: 0;
            position: fixed;
        }
        .section__header__site-title__logo img {
            width: 145px;
        }
        body.mobile_menu_open .section__header__menu-fader {
            opacity: 1;
        }
        body.mobile_menu_open .section__header__hamburger-close {
            display: block;
            z-index: 2;
        }
    }
    @media screen and (max-width: 370px) {
        body.mobile_menu_open .section__header__menu-fader:after {
            width: calc(100% - 60px);
        }
        .section__header__hamburger-close {
            position: fixed;
            right: 10px;
            top: 20px;
            cursor: pointer;
            display: none;
        }
    }

</style>