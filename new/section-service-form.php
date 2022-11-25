
<?php
/*
* Service Form
*/
?>

<style>
    .form-visible.pokaz {
        position: fixed;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #00000090;
        z-index: 10000;
        display: flex!important;
        align-items: center;
        justify-content: center;
    }
    .form-visible.pokaz > div {
        width: min(100%, 500px);
    }
    .form-visible.pokaz form {
        width: 100%;
        background: white;
        border-radius: 6px;
        padding: 30px;
    }
    .form-visible.pokaz form textarea,
    .form-visible.pokaz form input[type="tel"],
    .form-visible.pokaz form input[type="email"],
    .form-visible.pokaz form input[type="text"]{
        outline-color: rgba(var(--color-highlight),1);
        width: 100%!important;
    }
    .form-visible.pokaz .accept-form {
        width: 100%!important;
    }
    .form-visible.pokaz .wpcf7-not-valid {
        background: initial;
    }
    .form-visible.pokaz form input[type="checkbox"]{
        width: unset!important;
    }

    .form-visible.pokaz form input[type="submit"]{
        font-weight: 400;
        font-size: 14px;
        line-height: 24px; 
        color: white;
        padding: 12px 28px!important;
        background-color: rgba(var(--color-highlight),1);
        text-decoration: none;
        border-radius: 100px;
        border: none;
        white-space: nowrap;
        display: inline-block;
    }
    .service-form__accept {
        display: flex;
        padding: 30px 0;
    }
    .service-form__accept span,
    .service-form__accept span *{
        margin: 0;
        padding: 0;
        text-align: left;
        font-size: 15px;
        line-height: 18px;
        position: relative;
    }
    .service-form__accept span a {
        color: rgba(var(--color-highlight),1);
    }
    .service-form__accept .acceptance-26 {
        padding-right: 15px;
    }
    .service-form__close-button {
        position: absolute;
        right: 10px;
        top: 10px;
        width: 40px;
        height: 40px;
        content: '';
        background: url('<?= get_template_directory_uri(); ?>/new/images/plus.svg')
        no-repeat center center;
        transform: rotate(45deg);
        cursor: pointer;
    }
    div.wpcf7-mail-sent-ok {
        border: 2px solid rgba(var(--color-highlight),1);
        border-radius: 100px;
        line-height: 18px;
        padding: 15px;
    }   
    .form-visible.pokaz form span.robot_field {
    	height: 0;
        opacity: 0;
        margin: 0;
        padding: 0;
    }

    @media screen and (max-width: 800px) {
        .form-visible.pokaz {
            background: white;
        }
        .form-visible.pokaz form input[type="submit"]{
            width: 100%;
        }
    }
    @media screen and (max-height: 600px) {
        .service-form__accept {
            display: flex;
            margin: 10px 0;
        }
        .form-visible.pokaz form input[type="submit"]{
            padding: 10px 28px!important;
        }

    }

</style>
<script>


    $(document).ready(function(){
        $(".form-hidden").click(function(){
            $(".form-visible").toggleClass("pokaz"); return false;
        });
        $('.service-form__close-button').on('click', e => {
            $('.form-visible').removeClass('pokaz');
        });
        // Set up a mask for phone
        let im = new Inputmask("+7 (999)-999-99-99");
        im.mask ('#t1000');
    });
</script>