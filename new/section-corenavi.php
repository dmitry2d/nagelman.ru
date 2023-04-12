

<?php
/*
* Section category
*/
?>
<?php 
    if (!function_exists('wp_corenavi')) {
        exit();
    }
?>

<div class="section__corenavi">
    <?php wp_corenavi(); ?> 
</div>

<style>

    .section__corenavi {
        /* text-align: center; */
        padding: 0 20px;
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
    }
    .section__corenavi .navigation {
        all: unset;
        display: inline-flex;
        border-radius: 0;
        background: #f0f0f0;
        padding: 1px;
    }
    .section__corenavi .navigation .page-numbers {
        border: none!important;
        margin: 0;
        background: white;
        color: #aeaeae;
        -webkit-text-fill-color: #aeaeae;
        font-weight: 600;
        border-radius: 0;
    }
    .section__corenavi .navigation .page-numbers * {
    }
    .section__corenavi .navigation .page-numbers:not(.current) + .page-numbers:not(.current) {
        margin-left: 1px!important;
    }
    
    .section__corenavi .navigation a.prev,
    .section__corenavi .navigation a.next {
        color: white!important;
        -webkit-text-fill-color: white;
    }
    .section__corenavi .navigation a.prev:before,
    .section__corenavi .navigation a.next:before {
        position: absolute;
        content: '';
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: url("<?= get_template_directory_uri(); ?>/new/images/arr_nav_r.svg") no-repeat center center;
    }
    .section__corenavi .navigation a.prev:before {
        transform: rotate(180deg);
    }
    /* .section__corenavi .navigation > * {
        background: none;
        color: #aeaeae;
        -webkit-text-fill-color: #aeaeae;
        border-radius: 0!important;
        font-size: 17px;
        font-weight: 500;
    } */
    /* .section__corenavi .navigation > span:hover,
    .section__corenavi .navigation > *:hover {
        background: inherit;
    } */
    .section__corenavi .navigation span.current:hover,
    .section__corenavi .navigation span.current {
        background-color: rgba(var(--color-highlight),1);
        color: white!important;
        -webkit-text-fill-color: white!important;
    }

    @media screen and (max-width: 800px) {
       
    }
   
</style>