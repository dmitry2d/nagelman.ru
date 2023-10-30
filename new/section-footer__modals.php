

<?php
/**
 * Modal Windows
 */
?>

<!-- Use This Modal template anywhere in HTML-->
<!-- <div class="theme-modal-window">
    <div class="theme-modal-window__wrapper">
        <div class="theme-modal-window__close-button"></div>
        <a href="" class="theme-modal-window__button">Go</a>
    </div>
</div> -->

<style>
    .theme-modal-window {
        position: fixed;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #00000090;
        z-index: 10000;
        align-items: center;
        justify-content: center;
        display: none;
    }
    .theme-modal-window.open {
        display: flex!important;
    }
    .theme-modal-window__wrapper {
        position: relative;
        width: min(100%, 500px);
        background: white;
        border-radius: 6px;
        padding: 30px;
    }
    .theme-modal-window__close-button {
        position: absolute;
        right: 10px;
        top: 10px;
        width: 40px;
        height: 40px;
        content: '';
        background: url('/wp-content/themes/main/new/images/plus.svg') no-repeat center center;
        transform: rotate(45deg);
        cursor: pointer;
    }
</style>

<script async>
    $('.theme-modal-window__close-button').on('click', e => {
        $(e.target).closest('.theme-modal-window').removeClass('open');
    })
</script>

