
<?php
/*
* Template Name: Шаблон главной страницы
*/

?>
    
<?php 
    get_template_part ('new/section', 'header');
?>

<div class="template__page">
    <div class="template__page__container">
        <div class="template-404">
            <div class="template-404__title-mob">
                    <img src="<?=get_template_directory_uri() . "/new/images/404.svg";?>" alt="404">
                </div>
            <div class="template-404__image">
                <img src="<?=get_template_directory_uri() . "/new/images/404.jpg";?>" alt="Ошибка">
            </div>
            <div class="template-404__texts">
                <div class="template-404__texts__404">
                    <img src="<?=get_template_directory_uri() . "/new/images/404.svg";?>" alt="404">
                </div>
                <h1 class="template-404__texts__title">Страница не найдена</h1>
                <p class="template-404__texts__p">
                    К сожалению, такой страницы не существует.<br>
                    Но не стоит огорчаться, воспользуйтесь верхним меню.
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .template-404 {
        margin: 135px auto;
        display: flex;
    }
    .template-404__title-mob {
        display: none;
    }
    .template-404__texts {
        padding: 25px 0 0 37px;
    }
    .template-404__texts__title {
        font-family: 'Roboto Slab';
        font-size: 32px;
        font-style: normal;
        font-weight: 500;
        line-height: 40px;
        color: rgba(var(--color-basetext),1);
        margin: 48px 0 39px;
        padding: 0;
    }
    .template__page p.template-404__texts__p {
        font-size: 15px;
        font-style: normal;
        font-weight: 600;
        line-height: 24px;
        color: rgba(var(--color-basetext),1);
        margin: 0;
    }
    
    @media screen and (max-width: 800px) {
        .template-404 {
            flex-direction: column;
            align-items: center;
            margin: 5vw auto;
        }
        .template-404__texts__404 {
            display: none;
        }
        .template-404__title-mob {
            display: block;
            transform: rotate(-2.961deg);
            margin: 0 0 5vw -5vw;
        }
        .template-404__title-mob img {
            width: 26vw;
        }
        .template-404__image img {
            width: 70vw;
        }
        .template-404__texts__title {
            text-align: center;
            font-size: 24px;
            margin: 5vw 0;
        }
        .template__page p.template-404__texts__p {
            font-size: 15px;
            line-height: 24px;
            text-align: center;
            
        }
        .template-404__texts {
            margin: 0;
            padding: 0;
        }
    }

</style>

<?php 
    get_template_part ('new/section', 'quick-contacts');
?>

<?php 
    get_template_part ('new/section', 'footer');
?>



