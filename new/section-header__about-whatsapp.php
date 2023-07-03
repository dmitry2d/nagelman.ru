
<?php
/*
* Section Header - About &  Consult
*/
?>

<!-- About Button -->
<div class="section__header__link-button section__header__about-link">
    <a href="/about">Обо мне</a>
</div>

<!-- Whatsapp Button -->
<div class="section__header__link-button section__header__whatsapp-link">
    <a
        onclick="ym('47499343', 'reachGoal', 'click-on-whatsapp-top');"
        rel="nofollow"
        href="https://wa.me/79210205165"
        target="_blank"
        title="Мой Whatsapp">
        Записаться онлайн
    </a>  
</div>


<style>
    .section__header__link-button {
        padding: 0 10px;
    }
    .section__header__link-button a {
        font-weight: 400;
        font-size: 15px;
        line-height: 24px; 
        color: rgba(var(--color-basetext),1);
        padding: 14px 28px;
        border: 1px solid rgba(var(--color-heading),1);
        text-decoration: none;
        border-radius: 100px;
        white-space: nowrap;
        display: inline-block;
    }
    .section__header__about-link a:hover {
        color: rgba(var(--color-highlight),1);
    }
    .section__header__whatsapp-link a {
        background-color: rgba(var(--color-highlight),1);
        border-color: rgba(var(--color-highlight),1);
        color: white;
    }

    @media screen and (max-width: 800px) {
        .section__header__link-button {
            display: block;
            width: calc(100% - 80px);
            left: -100vw;
            transition: left 0.2s;
        }
        .section__header__link-button {
            padding: 50px 20px 40px;
        }
        .section__header__link-button a {
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 100px;
            white-space: nowrap;
            display: inline-block;
        }
        body.mobile_menu_open .section__header__link-button {
            left: 0;
        }
        body.mobile_menu_open .section__header__about-link {
            padding-bottom: 0;
        }
        body.mobile_menu_open .section__header__whatsapp-link {
            padding-top: 20px;
        }
        @media screen and (max-width: 400px) {
            .section__header__link-button {
                padding: 30px 20px 20px;
            } 
        }
    }
    
</style>

<script>
    $('#online-consult-form-open').on('click', e => {
        $('#online-consult-form-container').addClass('pokaz');
    });
</script>