
<?php
/*
* Social Set Section
*/
?>

<section class="section__social-set">

    <div class="section__social-set__container">
        <div class="section__social-set__section-title">Подпишитесь и задайте ваши вопросы</div>
        <div class="section__social-set__items">

            <?php
                $items = get_field('social-set__items');
                foreach($items as $item) {
            ?>
                <a
                    href="<?= $item['link']?>"
                    class="section__social-set__item"
                    style="<?= $item['style']?>"
                >
                    <div class="section__social-set__item__icon">
                        <img src="<?= $item['icon__white']?>" alt="">
                    </div>
                    <div class="section__social-set__item__text">
                        <?= $item['title']?>
                    </div>
                </a>
            <?php
                }
            ?>

        </div>
    
    </div>



</section>

<style>

    .section__social-set {
        background: white;
        margin-bottom: 70px;
    }

    .section__social-set__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 0 20px 1px;
    }

    .section__social-set__section-title {
        font-family: 'Roboto Slab', serif;
        font-weight: 500;
        font-size: 32px;
        line-height: 40px;
        color: rgba(var(--color-basetext),1);
        margin: 30px auto 40px;
        text-align: center;
    }

    .section__social-set__items {
        display: flex;
        margin: 0 -10px;
    }
    .section__social-set__item {
        margin: 10px;
        border-radius: 50px;
        padding: 10px 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-grow: 1;
        min-width: 50px;
        flex-basis: 50px;
        text-decoration: none;
        white-space: nowrap;
    }
    .section__social-set__item__text {
        font-size: 15px;
        color: white;
        padding-left: 10px;
    }
    

    @media screen and (max-width: 800px) {
        .section__social-set__section-title {
            font-size: 24px;
            line-height: 30px;
            margin: 20px auto 30px;
            text-align: center;
        }

        .section__social-set__items {
            margin: 0;
            flex-direction: column;
        }
        .section__social-set__item {
            margin: 10px 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            min-width: 50px;
            text-decoration: none;
        }
       
    }

    @media screen and (max-width: 600px) {
    }

</style>




