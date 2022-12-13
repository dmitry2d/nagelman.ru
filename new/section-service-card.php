

<?php
/*
* Section Service Card
*/
?>
    
<!-- <div class="section__services"> -->


<?php

    if (!get_field ('service__hide')):
        
        $bg__color = get_field ('service__color');

?>
     
    <div class="section__services__item" style="background-color:<?= $bg__color?>">

        <div class="section__services__item__bgimage">
            <img src="<?= get_template_directory_uri(); ?>/new/images/service_bg.png">
        </div>

        <div class="section__services__item__title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>                                                      
        </div>
        <div class="section__services__item__split">
            <div class="section__services__item__price">
                <?= get_field('service__price'); ?> руб.
            </div>
            <div class="section__services__item__time">
                <desk>Продолжительность: </desk><?= get_field('service__time'); ?> мин.
            </div>

        </div>
        <div class="section__services__item__announce">
            <?= get_field('service__announce'); ?>
        </div>
        <?php 
            if(get_the_content()) {
        ?>
        <div class="section__services__item__buttons">
            <?php if (is_category()): ?>
                <div class="section__services__item__link">
                    <a href="<?php the_permalink(); ?>">
                        Подробнее
                    </a>                                                      
                </div>
            <?php endif; ?>
            <div class="section__services__item__pay" style="display: none">
                <a href="" style="color:<?= $bg__color?>" service-pay-click="<?=the_ID()?>" service-pay-title="<?=get_the_title();?>" service-pay-price="<?=get_field('service__price');?>">
                    Оплатить
                </a>                                                      
            </div>
        </div>
        <?php 
            }
        ?>
    </div>

<?php 
    endif;
?>



<style>

    .section__services__item {
        margin-bottom: 40px;
        padding: 40px 30px 10px;
    }
    .section__services__item__bgimage {
        position: absolute;
        right: 0;
        top: 0;
        width: 50%;
        mix-blend-mode: overlay;
    }
    .section__services__item__bgimage img {
        width: 100%;
    }
    .section__services__item__title a {
        text-decoration: none;
        color: white;
        font-size: 24px;
        font-weight: 400;
    }
    .section__services__item__split {
        display: flex;
        padding: 15px 5px;
        background: linear-gradient(270deg, rgba(151, 68, 94, 0) 0%, rgba(255, 255, 255, 0.26) 46.71%, rgba(254, 233, 233, 0) 99.99%, rgba(255, 235, 235, 0) 100%);
        align-items: center;
        margin: 20px 0;
    }
    .section__services__item__price {
        font-size: 32px;
        font-weight:500;
        color: white;
        min-width: 170px;
    }
    .section__services__item__time,
    .section__services__item__time * {
        font-size: 20px;
        font-weight: 400;
        color: white;
        flex-grow: 1;
    }
    .section__services__item__announce {
        font-size: 15px;
        font-weight: 500;
        line-height: 24px;
        color: white;
        margin-bottom: 40px;
    }
    .section__services__item__buttons {
        display: flex;
        justify-content: space-between;
        padding-bottom: 50px;
    }
    .section__services__item__buttons a {
        font-size: 15px;
        font-weight: 500;
        line-height: 24px;
        padding: 20px 30px;
        border-radius: 100px;
        border: 1px solid #ffffff;
        color: white;
        
    }
    .section__services__item__buttons .section__services__item__pay a {
        background: white;
    }
</style>
