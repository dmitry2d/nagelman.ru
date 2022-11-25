



<?php
/*
* Section Welcome
*/
?>


<section id="main" class="section__welcome">

<?php echo $DEV_; ?>

    <div class="section__welcome__container">
    
        <div class="section__welcome__split">

            <div class="section__welcome__photo">
                <desk>
                    <img src="<?= the_field('welcome_section__desktop_photo'); ?>" alt="">
                </desk>
            </div>

            <div class="section__welcome__data">

                <div class="section__welcome__short-description__title">
                    <?= the_field('welcome_section__title'); ?>
                </div>

                <div class="section__welcome__short-description__text">
                    <?= the_field('welcome_section__short_description'); ?>
                </div>
                
                <mob>
                    <div class="section__welcome__mobile_photo">
                        <img src="<?= the_field('welcome_section__mobile_photo'); ?>" alt="">
                    </div>
                </mob>

                <div class="section__welcome__directions__title">
                    <?= the_field('welcome_section__directions_title'); ?>
                </div>

                <div class="section__welcome__directions__text">
                    <?php
                        $rows = get_field('welcome_section__directions');
                        if( $rows ) {
                            foreach( $rows as $row ) {
                                echo '<div>' . $row['title'] . '</div>';
                            }
                        }
                    ?>
                </div>

                <?php
                    if (get_field('welcome_section__show_vk_link')) {
                ?>
                    <a href="https://vk.com/enagelman" class="welcome_section__vk-link" style="color:rgba(var(--color-highlight),1)">
                        Мой личный блог в<span></span>
                    </a>
                <?php
                    }
                ?>

            </div>

        </div>
            
        <div class="section__welcome__long-description" expand-id="section__welcome__long-description">
            <div class="section__welcome__long-description__text">
                <?= the_field('welcome_section__long_description'); ?>
            </div>
        </div>

        <div class="section__welcome__long-description__opener" expand-text="section__welcome__long-description">
            Развернуть
        </div>

            <!-- Consult Form -->
            <div class="section__footer_consult-link header-form section__welcome__counsult-button__wrapper" >
                <p class="form-hidden popmake-539 section__welcome__counsult-button">Записаться онлайн</p>
                <div class="form-visible" style="display: none;">
                    <?php echo do_shortcode( '[contact-form-7 id="478" title="Форма в шапке"]' );?>
                </div>
            </div>


        <!-- <div class="ow-button-base ow-button-align-center">
            <a class="bttn section__welcome__counsult-button" href="#myModal2" data-toggle="modal">
                Записаться онлайн
            </a>
        </div> -->

    </div>

</section>

<style>
    .section__welcome {
        all: unset;
    }
    .section__welcome__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
    }
    .section__welcome__split {
        display: flex;
    }
    .section__welcome__photo {
        min-width: 40%;
    }
    .section__welcome__data {
        flex-grow: 1;
        padding-left: 60px;
    }
    div.section__welcome__short-description__title {
        font-family: 'Roboto Slab', serif;
        font-weight: 500;
        font-size: 32px;
        line-height: 40px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-basetext),1)!important;
        -webkit-text-fill-color: rgba(var(--color-basetext),1);
        padding-bottom: 20px;
    }
    div.section__welcome__directions__title {
        padding-top: 20px;
        padding-bottom: 10px;
        font-weight: 500;
        font-size: 15px;
        line-height: 24px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-heading),1)!important;
        -webkit-text-fill-color: rgba(var(--color-heading),1);
    }
    .section__welcome__directions__text {
        padding-bottom: 20px;
    }
    .section__welcome__directions__text > div {
        position: relative;
        padding-left: 20px;
        margin: 8px 0;
    }
    .section__welcome__directions__text > div:after {
        position: absolute;
        content: '';
        left: 0;
        top: 8px;
        width: 6px;
        height: 6px;
        border-radius: 20px;
        background-color: rgba(var(--color-heading),1);
    }
    a.welcome_section__vk-link {
        display: inline-block;
        font-weight: 400;
        font-size: 15px;
        line-height: 24px; 
        color: white!important;
        -webkit-text-fill-color: white;
        padding: 14px 50px;
        background-color: rgba(var(--color-highlight),1);
        text-decoration: none;
        border-radius: 100px;
        margin: 30px 0;
        text-align: center;
    }
    .welcome_section__vk-link a{
        color: white;
    }
    .welcome_section__vk-link:hover {
        text-decoration: underline;
        color: white;
        -webkit-text-fill-color: white;
    }
    .welcome_section__vk-link span {
        display: inline-block;
        width: 30px;
        height: 12px;
        background: rgba(var(--color-highlight),1) url('/wp-content/themes/main/new/images/vk_w.svg') no-repeat right center;
    }
    .section__welcome__long-description {
        padding: 50px 0 0;
    }

    div[expand-id][expanded] {
        display: block;
    } 
    div[expand-text] {
        display: none;
        padding: 10px 0;
        font-weight: 500;
        font-size: 14px;
        line-height: 24px;
        color: rgba(var(--color-highlight),1);
        background: url('/wp-content/themes/main/new/images/arr1_down.svg') no-repeat right center;
        padding-right: 40px;
        cursor: pointer;
    }
    .section__welcome__long-description__opener {
        color: rgba(var(--color-heading),1)!important;
        -webkit-text-fill-color: rgba(var(--color-heading),1);
    }
    div[expand-text].expanded {
        background: url('/wp-content/themes/main/new/images/arr1_up.svg') no-repeat right center;
    }

    .section__welcome p.section__welcome__counsult-button {
        font-weight: 400;
        font-size: 15px!important;
        background: white;
        line-height: 24px; 
        color: rgba(var(--color-basetext),1);
        -webkit-text-fill-color: rgba(var(--color-basetext),1);
        padding: 14px 28px;
        border: 1px solid rgba(var(--color-heading),1)!important;
        text-decoration: none;
        border-radius: 100px;
        outline: none;
        margin: 40px 0;
        display: inline-block;
        float: none;
    }

    .section__welcome p.section__welcome__counsult-button:hover {
        color: rgba(var(--color-highlight),1);
        -webkit-text-fill-color: rgba(var(--color-highlight),1);
        background: white;
        font-size: inherit;
        text-decoration: underline;
    }

    @media screen and (max-width: 800px) {
        .section__welcome__photo {
            min-width: 0;
        }
        .section__welcome__data {
            padding: 0;
            width: 100%;
        }
        .section__welcome__short-description__text {
            /* margin-bottom: -180px; */
        }
        .section__welcome__mobile_photo {
            /* left: -20px;
            width: calc(100vw + 40px);
            height: 0;
            padding-top: min(760px, 190%);
            z-index: -1;
            margin-bottom: 30px; */
        }
        .section__welcome__mobile_photo img {
            /* position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; */
        }
        div[expand-text] {
            display: inline-block;
        }
        div[expand-id] {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: 0.2s;
        }
        .welcome_section__vk-link {
            display: block;
            width: 100%;
        }
        .section__welcome__counsult-button__wrapper {
            display: block;
            width: 100%;
            max-width: unset!important;
        }
        .section__welcome__counsult-button {
            display: block;
            width: 100%;
            text-align: center;
        }
        .section__welcome__long-description {
            padding: 20px 0 0;
        }
    }

</style>


<script>

    $(document).ready (() => {

        
        let dev_ = <?= $DEV_IP ? 'true' : 'false' ?>;
        console.log (dev_);

        // Expand and Collapse Text
        $('[expand-text]').on ('click', e => {
            let id = $(e.target).attr('expand-text');
            let target =  $('[expand-id="' + id + '"]');
            let status = target.attr ('expanded');
            if (!status) {
                target.attr('expanded', '1');
                $(e.target).html('Свернуть').addClass('expanded');
            } else {
                target.removeAttr('expanded');
                $(e.target).html('Развернуть').removeClass('expanded');
            }
        });
        
    });
    
</script>