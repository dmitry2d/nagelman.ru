
<?php
/**
 * Bottom Mobile Footer Section
 */
?>

<mob>
    <div class="section__footer__bottom__sidebar">
        <div class="section__footer__bottom__sidebar__fader"></div>
        <div class="section__footer__bottom__sidebar__data">
            <?php get_template_part ('sidebar') ?>
        </div>
    </div>
    <div class="section__footer__bottom">

    <?php // get_template_part ('new/section', 'footer__consult-form') ?>
    <?php get_template_part ('new/section', 'footer__whatsapp-button') ?>
        
        <div class="section__footer__bottom__search">
            <a href="">
                <img src="<?= get_template_directory_uri(); ?>/new/images/icn_search_bottom.svg">
            </a>
        </div>
        <div class="section__footer__bottom__go-up">
            <img src="<?= get_template_directory_uri(); ?>/new/images/go_up.svg">
        </div>
    </div>

</mob>

<style>
    .section__footer__bottom {
        position: fixed;
        height: 80px;
        width: 100%;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        background: white;
        border-top: 1px solid #f2f2f2;
        padding: 0 10px;
        z-index: 1002;
    }
    body.mobile_menu_open .section__footer__bottom {
        z-index: 0;
    }
    .section__footer__bottom__consult {
        flex-grow: 1;
    }
    .section__footer_consult-link {
        padding: 0 10px;
        margin: 0;
    }
    #online-consult-bottom-form-open {
        font-weight: 400;
        font-size: 14px;
        line-height: 24px; 
        color: white;
        -webkit-text-fill-color: white;
        padding: 12px 28px;
        background-color: rgba(var(--color-highlight),1);
        text-decoration: none;
        border-radius: 100px;
        border: none;
        white-space: nowrap;
        display: inline-block;
        cursor: pointer;
    }
    .section__footer_consult-link p:hover {
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
    .section__footer__bottom__search a {
        display: flex;
        width: 50px;
        height: 50px;
        align-items: center;
        justify-content: center;
        border: 2px solid rgba(var(--color-highlight),1);
        border-radius: 50px;
        margin: 0 5px;
    }
    .section__footer__bottom__search img {
        width: 24px;
        height: 24px;
    }
    
    /* Bottom Widget Sidebar */

    .section__footer__bottom__sidebar {
        position: fixed;
        bottom: 70px;
        left: 0;
        width: 100%;
        height: calc(100vh - 70px);
        z-index: 1001;
        pointer-events: none;
    }
    .body.mobile_meu_open .section__footer__bottom__sidebar {
        display: none;
    }
    .section__footer__bottom__sidebar__fader {
        position: absolute;
        background: #00000070;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        transition: 0.3s;
        opacity: 0;
    }

    .section__footer__bottom__sidebar.open .section__footer__bottom__sidebar__fader {
        opacity: 1;
        pointer-events: all;
    }
    .section__footer__bottom__sidebar__data {
        background: white;
        position: absolute;
        bottom: -150vh;
        left: 0;
        right: 0;
        padding: 30px;
        transition: 0.3s;
        pointer-events: all;
        display: flex;
        flex-direction: column;
    }
    .section__footer__bottom__sidebar__data * {
        font-size: 15px!important;
    }
    .section__footer__bottom__sidebar__data .recent-posts-extended {
        order: 1;
    }

    .section__footer__bottom__sidebar.open .section__footer__bottom__sidebar__data {
        bottom: 0;
    }
    .section__footer__bottom__sidebar__data .recent-posts-extended h3 {
        text-transform: none;
        color: rgba(var(--color-basetext),1);
        font-size: 15px!important;
        font-weight: 800;
        padding: 0;
    }
    .section__footer__bottom__sidebar__data .recent-posts-extended h3:before,
    .section__footer__bottom__sidebar__data .recent-posts-extended h3:after {
        display: none;
    }
    .section__footer__bottom__sidebar__data .recent-posts-extended h3.rpwe-title {
        font-size: 15px!important;
        font-weight: 500;
        width: 90%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .section__footer__bottom__sidebar__data .recent-posts-extended .rpwe-time {
        display: none;
    }
    .section__footer__bottom__sidebar__data .recent-posts-extended li {
        border: none;
        margin: 0;
        padding: 6px 0;
    }


    .section__footer__bottom__sidebar__data .widget_search {
        order: 2;
        margin: 0;
    }
    .section__footer__bottom__sidebar__data .widget_search input[type="text"] {
        font-size: 15px;
        color: rgba(var(--color-basetext),1);
        margin: 0;
        padding: 25px;
        background: #f8f8f8;
        border: 1px solid #f2f2f2;
        outline: none;
        border-radius: 10px 0 0 10px;

    }
    .section__footer__bottom__sidebar__data .widget_search button#searchsubmit {
        color: white;
        background-color: rgba(var(--color-highlight),1);
        cursor: pointer;
        height: 100%;
        content: "";
        width: 53px;
        border: none;
        border-radius: 0 10px 10px 0;
        outline: none;
        font-size: 19px;
        font-weight: 400;
    }
    .section__footer__bottom__sidebar__data .widget_search button#searchsubmit * {
        color: white!important;
    }

    body.mobile_menu_open .section__footer__bottom {
        display: none;
    }


    /* GoUp Button */
    .section__footer__bottom__go-up {
        width: 50px;
        height: 50px;
        background: white;
        border-radius: 100px;
        box-shadow: 0 3px 10px #00000030;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: -67px;
        right: 20px;
        opacity: 0;
        transition: opacity 0.2s, top 0.3s;
        pointer-events: none;
        cursor: pointer;
    }
    body.show_go-up .section__footer__bottom__go-up {
        opacity: 1;
        pointer-events: all;
    }
    body.yaBrowser .section__footer__bottom__go-up {
        display: none;
    }
    body.scroll_reach_bottom .section__footer__bottom__go-up {
        top: -137px;
    }

</style>

<script async>
    $(document).ready (() => {

        
        $('#online-consult-bottom-form-open').on('click', e => {
            $('#online-consult-bottom-form-container').addClass('pokaz');
        });

        $('.section__footer__bottom__search').on('click', e => {
            e.preventDefault ();
            e.stopPropagation();
            $('.section__footer__bottom__sidebar').toggleClass('open');
        });
        $('.section__footer__bottom__sidebar__fader').on ('click', e => {
            $('.section__footer__bottom__sidebar').removeClass('open');
        });

        // Go Up Button

        $(document).scroll (() => {

            // Show GoUp Button when scroll down
            if (window.scrollY > 200) {
                $('body').addClass ('show_go-up');
            } else {
                $('body').removeClass ('show_go-up');
            }

        });

        // Detects if we are on the bottom of the page, to move the GoUp button higher
        function detectPageBottom () {
            if (window.scrollY + window.innerHeight + 50 >= document.body.scrollHeight) {
                $('body').addClass ('scroll_reach_bottom');
            } else {
                $('body').removeClass ('scroll_reach_bottom');
            }
            setTimeout (() => {
                detectPageBottom ();
            }, 1000);
        };
        detectPageBottom ();


        setInterval (() => {})
        $('.section__footer__bottom__go-up').on ('click', e => {
            e.preventDefault ();
            e.stopPropagation ();
            console.log (1);
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });



    });
</script>