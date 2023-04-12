<<<<<<< HEAD

<?php
/*
* Section Header - About &  Consult Buttons
<!-- Inactive from 2022/17/12 -->
*/
?>


<!-- About Button -->
<div class="section__header__about-link">
    <a href="/about">Обо мне</a>
</div>

<!-- Consult Form -->
<div class="section__header__consult-link header-form">
    <div class="" id="online-consult-form-open">Записаться онлайн</div>
    <div class="form-visible" style="display: none;" id="online-consult-form-container">
        <?php echo do_shortcode( '[contact-form-7 id="478" title="Форма в шапке"]' );?>
    </div>
</div>

<style>
    .section__header__about-link {
        padding: 0 10px;
    }
    .section__header__about-link a {
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
    .section__header__consult-link {
        padding: 0 10px;
        margin: 0;
    }
    #online-consult-form-open {
        font-weight: 400;
        font-size: 15px;
        line-height: 24px; 
        color: white;
        padding: 14px 28px;
        background-color: rgba(var(--color-highlight),1);
        text-decoration: none;
        border-radius: 100px;
        border: none;
        white-space: nowrap;
        display: inline-block;
        cursor: pointer;
    }
    .section__header__consult-link p:hover {
        color: white;
        border: inherit;
    }
    .form-hidden {
        font-size: 20px;
        border: 1px solid #755433;
        border-radius: 50px;
        color: #755433;
        text-align: center;
        padding: 15px 8px 16px 8px;
        margin-bottom: 0;
        cursor: pointer;
        background: none;
    }

    @media screen and (max-width: 800px) {
        .section__header__about-link {
            display: block;
            width: calc(100% - 80px);
            left: -100vw;
            transition: left 0.2s;
        }
        .section__header__about-link {
            padding: 50px 20px 40px;
        }
        .section__header__about-link a {
            font-weight: 400;
            font-size: 15px;
            line-height: 24px; 
            /* color: rgba(var(--color-basetext),1); */
            padding: 14px 28px;
            /* border: 1px solid rgba(var(--color-highlight),1); */
            /* background-color: rgba(var(--color-highlight),1); */
            /* color: white; */
            /* -webkit-text-fill-color: white; */
            text-decoration: none;
            border-radius: 100px;
            white-space: nowrap;
            display: inline-block;
        }
        body.mobile_menu_open .section__header__about-link {
            left: 0;
        }
        .section__header__consult-link {
            display: none;
        }
        @media screen and (max-width: 400px) {
            .section__header__about-link {
                padding: 30px 20px 20px;
            } 
        }
    }
    
</style>

<script>
    $('#online-consult-form-open').on('click', e => {
        $('#online-consult-form-container').addClass('pokaz');
    });
=======

<?php
/*
* Section Header - About &  Consult Buttons
<!-- Inactive from 2022/17/12 -->
*/
?>


<!-- About Button -->
<div class="section__header__about-link">
    <a href="/about">Обо мне</a>
</div>

<!-- Consult Form -->
<div class="section__header__consult-link header-form">
    <div class="" id="online-consult-form-open">Записаться онлайн</div>
    <div class="form-visible" style="display: none;" id="online-consult-form-container">
        <?php echo do_shortcode( '[contact-form-7 id="478" title="Форма в шапке"]' );?>
    </div>
</div>

<style>
    .section__header__about-link {
        padding: 0 10px;
    }
    .section__header__about-link a {
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
    .section__header__consult-link {
        padding: 0 10px;
        margin: 0;
    }
    #online-consult-form-open {
        font-weight: 400;
        font-size: 15px;
        line-height: 24px; 
        color: white;
        padding: 14px 28px;
        background-color: rgba(var(--color-highlight),1);
        text-decoration: none;
        border-radius: 100px;
        border: none;
        white-space: nowrap;
        display: inline-block;
        cursor: pointer;
    }
    .section__header__consult-link p:hover {
        color: white;
        border: inherit;
    }
    .form-hidden {
        font-size: 20px;
        border: 1px solid #755433;
        border-radius: 50px;
        color: #755433;
        text-align: center;
        padding: 15px 8px 16px 8px;
        margin-bottom: 0;
        cursor: pointer;
        background: none;
    }

    @media screen and (max-width: 800px) {
        .section__header__about-link {
            display: block;
            width: calc(100% - 80px);
            left: -100vw;
            transition: left 0.2s;
        }
        .section__header__about-link {
            padding: 50px 20px 40px;
        }
        .section__header__about-link a {
            font-weight: 400;
            font-size: 15px;
            line-height: 24px; 
            /* color: rgba(var(--color-basetext),1); */
            padding: 14px 28px;
            /* border: 1px solid rgba(var(--color-highlight),1); */
            /* background-color: rgba(var(--color-highlight),1); */
            /* color: white; */
            /* -webkit-text-fill-color: white; */
            text-decoration: none;
            border-radius: 100px;
            white-space: nowrap;
            display: inline-block;
        }
        body.mobile_menu_open .section__header__about-link {
            left: 0;
        }
        .section__header__consult-link {
            display: none;
        }
        @media screen and (max-width: 400px) {
            .section__header__about-link {
                padding: 30px 20px 20px;
            } 
        }
    }
    
</style>

<script>
    $('#online-consult-form-open').on('click', e => {
        $('#online-consult-form-container').addClass('pokaz');
    });
>>>>>>> fba873ff578ca6ec8a008405b207f60dd08f36de
</script>