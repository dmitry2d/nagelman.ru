
    <footer class="section__footer">

        <div class="section__footer__container">
            <!-- Menu Section  -->
            <?php
                get_template_part ('new/section', 'footer__menu');
            ?>

        </div>

    </footer>

    <!-- Bottom Section  -->
    <?php
        get_template_part ('new/section', 'footer__bottom');
    ?>

    <?php wp_footer();?>
    <!-- <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script> -->


    <!-- Lightbox -->
    <script src="<?= get_template_directory_uri();?>/new/vendor/lightbox/js/lightbox.js"></script>
    <link href="<?= get_template_directory_uri();?>/new/vendor/lightbox/css/lightbox.css" rel="stylesheet" />
    <script async>
        function setLightboxHeight () {
            lightbox.option ({
                fitImagesInViewport: true,
                maxHeight: window.innerHeight*0.8
            });
        };
        $(window).resize(() => {
            setLightboxHeight();
        });
        setLightboxHeight ();

    </script>

    <!-- Modal Windows  -->
    <?php
        get_template_part ('new/section', 'footer__modals');
    ?>
    <!-- Template Styles -->
    <?php
        get_template_part ('new/template', 'common');
    ?>
    </body>
</html>

<style>

    /* Footer Styles */

    .section__footer {
        all: unset;
        all: initial;
    }
    .section__footer__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 0 20px;
        margin-top: 30px;
    }
    @media screen and (max-width: 800px) {
        .section__footer__container {
            width: 100%;
        }
    }

</style>
