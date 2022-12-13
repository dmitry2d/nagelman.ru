

<?php
/*
* Section Services
*/
?>
    
<div class="section__services">


    <?php
        if ( is_category() && have_posts() ) {
            while ( have_posts() ) : the_post();
                get_template_part('new/section', 'service-card');
            endwhile; 
        } else {
            get_template_part('new/section', 'service-card');
        };
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