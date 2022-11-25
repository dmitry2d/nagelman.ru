

<?php
/*
* Section Services
*/
?>
    
<div class="section__services">


    <?php

        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            
            	if (get_field ('service__hide')) {
                	continue;
                }

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
                        <div class="section__services__item__link">
                            <a href="<?php the_permalink(); ?>">
                                Подробнее
                            </a>                                                      
                        </div>
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
            endwhile; 
        endif;
    ?>

</div>

<div id="service__payment-window" class="form-visible" style="display: none;">
    <?php echo do_shortcode( '[contact-form-7 id="1008" title="Форма для оплаты"]' );?>
</div>
<div style="display:none">
    <form id="service__proceed-payment-form" action="/payment" method=POST>
        <input type="hidden" name="serviceID">
        <input type="hidden" name="customerName">
        <input type="hidden" name="customerEmail">
    </form>
</div>

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
    .payment-form__title {
        font-size: 25px;
        margin: 10px auto;
    }
    .payment-form__service-details {
        display: flex;
        padding: 10px 0;
    }
    .payment-form__service-details__title {
        flex-grow: 1;
        text-align: left;
    }
    #service__payment-window div.wpcf7-mail-sent-ok {
        border: none;
        margin-top: -2px;
    }
    #service__payment-window form input[type="submit"] {
        margin-top: -5px;
    }
</style>

<script>

    $(document).ready (() => {
  
        // Pay button on Service Item:

        // Prod
        $('.section__services__item__pay').css('display', 'block');
        
        // Dev
        if ("<?= $_POST['DEV_MODE']?'1':''?>" == "1") {
        //    $('.section__services__item__pay').css('display', 'block');
        }


        /*
        * "Оплатить" button click
        */
        $('[service-pay-click]').on('click', e => {
            e.preventDefault();
            e.stopPropagation();
            /*
            * Get service post id from button
            * Open payment popup
            */
            let service_id = $(e.target).attr('service-pay-click');
            let service_title = $(e.target).attr('service-pay-title');
            let service_price = $(e.target).attr('service-pay-price');
            $('#service__payment-window').addClass('pokaz');
            $('#service__payment-window .payment-form__service-details__title').html(service_title);
            $('#service__payment-window .payment-form__service-details__price').html(service_price + "₽");
            $('#service__payment-window [name="payment-service-id"]').val(service_id);
        });

        /* 
        * Submitted Service Popup
        * Run hidden proceed form
        */
        document.addEventListener('wpcf7mailsent',function( event ) {
            let formID = (event.detail.contactFormId != "")? event.detail.contactFormId : false;
            if(formID == 1008){
                event.preventDefault ();
                event.stopPropagation ();
                let serviceID = $('#service__payment-window [name="payment-service-id"]').val();
                let customerName = $('#service__payment-window [name="payment-customer-name"]').val();
                let customerEmail = $('#service__payment-window [name="payment-customer-email"]').val();
                // window.location.href = "/payment?serviceID=" + serviceID;
                $('#service__proceed-payment-form [name="serviceID"]').val(serviceID);
                $('#service__proceed-payment-form [name="customerName"]').val(customerName);
                $('#service__proceed-payment-form [name="customerEmail"]').val(customerEmail);
                $('#service__proceed-payment-form').submit();
                
            }
        });

    });




</script>