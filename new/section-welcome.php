<<<<<<< HEAD




<?php
/*
* Section Welcome
*/
?>

<section id="main" class="section__welcome">

    <div class="section__welcome__background">
        <img src="<?= get_field('welcome_section__background')?:'' ?>" alt="">
    </div>
    
    <div class="section__welcome__container">
    
        <div class="section__welcome__split">

            <div class="section__welcome__photo">
                <desk>
                    <img src="<?= the_field('welcome_section__desktop_photo'); ?>" alt="" class=section__welcome__photo__image>
                    <img src="<?= the_field('welcome_section__photo__writings'); ?>" alt="" class=section__welcome__photo__writings>
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
                        <img src="<?= the_field('welcome_section__photo__writings'); ?>" alt="" class=section__welcome__photo__writings>
                    </div>
                </mob>
                                
                <div class="section__welcome__citate__text">
                    <?= the_field('welcome_section__title__citate'); ?>
                </div>

            </div>

        </div>

        
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
            <div></div><div></div><div></div>
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
            
        <div class="section__welcome__problems">
            <ul class="slides">
            <?php;
            $rows = get_field('welcome_section__problems');
                if( $rows ) {
                    foreach( $rows as $row ) {
                        echo '<li><div>' . $row['text'] . '</div></li>';
                    }
                }
            ?>
            </ul>
        </div>
        
        <div class="section__welcome__solution">
            <?= the_field('welcome_section__solution'); ?>
        </div>
        
        
        <div class="section__welcome__warnings__title">
            <?= the_field('welcome_section__warnings__description'); ?>
        </div>

        <div class="section__welcome__warnings__text">
            <?php
                $rows = get_field('welcome_section__warnings');
                if( $rows ) {
                    foreach( $rows as $row ) {
                        echo '<div>';
                        echo '<img src="' . $row['icon'] . '">';
                        echo '<div>' . $row['text'] . '</div>';
                        echo '</div>';
                    }
                }
            ?>
        </div>

        <!-- Consult Form -->
        <div class="section__footer_consult-link header-form section__welcome__counsult-button__wrapper" >
            <p class="form-hidden popmake-539 section__welcome__counsult-button">Записаться онлайн</p>
            <div class="form-visible" style="display: none;">
                <?php echo do_shortcode( '[contact-form-7 id="478" title="Форма в шапке"]' );?>
            </div>
        </div>

    </div>

</section>

<style>
    .section__welcome {
        all: unset;
        position: relative;
        top: -30px;
    }
    .section__welcome__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
    }
    .section__welcome__background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .section__welcome__background img {
        /* display: block; */
        position: absolute;
        width: 100%;
        /* height: 100%; */
        top: 0;
        left: 0;
        /* object-fit: cover; */
    }
    
    .section__welcome__split {
        display: flex;
    }
    .section__welcome__photo {
        min-width: 40%;
        max-width: 40%;
        display: flex;
        min-height: 100%;
    }
    .section__welcome__photo__image {
        object-fit: cover;
        height: 100%;
        border-radius: 16px;
    }
    .section__welcome__mobile_photo img {
        border-radius: 16px;
    }
    .section__welcome__photo__writings {
        display: block;
        position: absolute;
        bottom: 10%;
        right: 10%;
        width: 45%;
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
        margin-top: 30px;
    }

    div.section__welcome__citate__text {
        position: relative;
        font-size: 15px;
        line-height: 30px;
        padding: 90px 0 60px;
        font-style: italic;
    }
    div.section__welcome__citate__text:before {
        position: absolute;
        content: '';
        top: 30px;
        left: 0;
        width: 55px;
        height: 35px;
        background: url('/wp-content/themes/main/new/images/quotes.svg') no-repeat left top;
        opacity: 40%;
    }
    div.section__welcome__citate__text:after {
        position: absolute;
        content: '';
        bottom: 10px;
        right: 0;
        width: 55px;
        height: 35px;
        background: url('/wp-content/themes/main/new/images/quotes.svg') no-repeat left top;
        opacity: 40%;
        transform: rotate(180deg);
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
        margin-top: 50px;
    }
    .section__welcome__directions__text {
        padding-bottom: 20px;
        /* display: flex; */
        display: grid;
        grid-template-columns: repeat(3, auto);
        grid-gap: 0 30px;
        flex-wrap: wrap;
        margin: 20px -8px 0;
    }
    .section__welcome__directions__text > div {
        position: relative;
        box-sizing: border-box;
        padding-left: 20px;
        margin: 5px 8px;
        flex-basis: 0;
        min-width: 250px;
        flex-grow: 1;
    }
    .section__welcome__directions__text > div:not(:empty):after {
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
    

    .section__welcome__solution {
        margin: 40px 0;
        background: #A18E8012;
        padding: 30px;
        border-radius: 20px;
    }
    
    .section__welcome__warnings__title {
        margin-top: 50px;
    }
    .section__welcome__warnings__text {
        margin: 40px 0;
    }
    .section__welcome__warnings__text > div {
        display: flex;
        align-items: center;
    }
    .section__welcome__warnings__text > div > img {
        width: 56px;
        height: 56px;
    }
    .section__welcome__warnings__text > div > div {
        flex-grow: 1;
        min-width: 50%;
        padding: 14px 0;
        padding-left: 40px;
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


    /* Flex slider */

    .section__welcome__problems {
        border: none;
        margin: 10px 0;
    }
    .section__welcome__problems h1 {
        color: #A18E80;
        font-size: 24px;
        line-height: 24px;
        font-weight: 500;
        margin: 40px 0;
    }
    .section__welcome__problems .flex-direction-nav {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        height: 100%;
        
    }
    .section__welcome__problems .flex-direction-nav .flex-next  {
        right: -45px;
    }
    .section__welcome__problems .flex-direction-nav .flex-prev  {
    }
    .section__welcome__problems .flex-direction-nav li {
        top: 50%;
    }
    .section__welcome__problems .flex-direction-nav li a {
        overflow: visible!important;
        opacity: 1!important;
    }
    .section__welcome__problems .flex-direction-nav li a .fa {
        width: 60px;
        height: 60px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100px;
        font-size: 14px!important;
    }
    .section__welcome__problems .flex-direction-nav li a i {
        color: #3B3B3B;

    }
    .section__welcome__problems .flex-control-paging  {
        z-index: 100;
        margin-top: 30px;
        margin-bottom: 50px;
    }
    .section__welcome__problems .flex-control-paging li a {
        width: 12px;
        height: 12px;
        margin-right: 5px;
        display: block;
        background: rgba(var(--color-heading),0.3);
        border-radius: 50px;
        cursor: pointer;
        text-indent: -9999px;
        border: none!important;
        box-shadow: none;
    }
    .section__welcome__problems .flex-control-paging li a.flex-active {
        background-color: rgba(var(--color-heading),1);
    }
    .section__welcome__problems .flex-control-nav {
        width: unset;
        position: relative;
        bottom: 0;
        display: inline-block;
    }
    
    .section__welcome__problems .slides li h3 {
        font-size: 24px;
        line-height: 28px;
    }

    .section__welcome__problems {
        margin: 10px 0px 20px;
        padding-bottom: 1px;
    }
    .section__welcome__problems .flex-control-paging  {
        margin-top: 55px;
        margin-bottom: 20px;
        width: 100%;
        display: block;
        text-align: center;
    }
    .section__welcome__problems .flex-direction-nav {
        top: unset;
        bottom: 29px;
        height: 0;
        z-index: 101;
        pointer-events: none;
    }
    .section__welcome__problems .flex-direction-nav .flex-next  {
        right: 20px;
        pointer-events: all;
    }
    .section__welcome__problems .flex-direction-nav .flex-prev  {
        left: -6px;
        pointer-events: all;
    }

    /* / Flex slider  */

    @media screen and (max-width: 1000px) {
        .section__welcome__directions__text {
            grid-template-columns: repeat(2, auto);
        }
    }
    @media screen and (max-width: 800px) {
        .section__welcome__photo {
            min-width: 0;
        }
        .section__welcome__data {
            padding: 0;
            width: 100%;
        }
        .section__welcome__problems {
            margin: 0 -20px;
        }
        .section__welcome__problems li {
            box-sizing: border-box;
        }
        .section__welcome__problems  li > div {
            padding: 0 40px;
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
        
        .section__welcome__directions__text {
            grid-template-columns: repeat(1, auto);
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
        .section__welcome__problems h1 {
            /* min-height: 5em; */
            line-height: 32px;
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

        <?php
            if (wp_is_mobile()) {
        ?>

        // Setting up same height for "problems" items Headers
        try {
            let max_height = Math.max(...$('.section__welcome__problems h1').toArray().map(node => node.offsetHeight), 0);
            $('.section__welcome__problems h1').css({
                "min-height": max_height
            })
            console.log (max_height);
        } catch (e) {
            console.log (e)
        }

        // Running slider

        $('.section__welcome__problems').flexslider({
            animation: "slide",
            animationLoop: true,
            animationSpeed: 1200,
            minItems: 2,
            maxItems: 16,
            slideshow: true, 
            slideshowSpeed: 5000,
            prevText: '',
            nextText: ''
        });



        <?php
            }
        ?>

        
    });
    
</script>
=======




<?php
/*
* Section Welcome
*/
?>

<section id="main" class="section__welcome">

    <div class="section__welcome__background">
        <img src="<?= get_field('welcome_section__background')?:'' ?>" alt="">
    </div>
    
    <div class="section__welcome__container">
    
        <div class="section__welcome__split">

            <div class="section__welcome__photo">
                <desk>
                    <img src="<?= the_field('welcome_section__desktop_photo'); ?>" alt="" class=section__welcome__photo__image>
                    <img src="<?= the_field('welcome_section__photo__writings'); ?>" alt="" class=section__welcome__photo__writings>
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
                        <img src="<?= the_field('welcome_section__photo__writings'); ?>" alt="" class=section__welcome__photo__writings>
                    </div>
                </mob>
                                
                <div class="section__welcome__citate__text">
                    <?= the_field('welcome_section__title__citate'); ?>
                </div>

            </div>

        </div>

        
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
            <div></div><div></div><div></div>
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
            
        <div class="section__welcome__problems">
            <ul class="slides">
            <?php;
            $rows = get_field('welcome_section__problems');
                if( $rows ) {
                    foreach( $rows as $row ) {
                        echo '<li><div>' . $row['text'] . '</div></li>';
                    }
                }
            ?>
            </ul>
        </div>
        
        <div class="section__welcome__solution">
            <?= the_field('welcome_section__solution'); ?>
        </div>
        
        
        <div class="section__welcome__warnings__title">
            <?= the_field('welcome_section__warnings__description'); ?>
        </div>

        <div class="section__welcome__warnings__text">
            <?php
                $rows = get_field('welcome_section__warnings');
                if( $rows ) {
                    foreach( $rows as $row ) {
                        echo '<div>';
                        echo '<img src="' . $row['icon'] . '">';
                        echo '<div>' . $row['text'] . '</div>';
                        echo '</div>';
                    }
                }
            ?>
        </div>

        <!-- Consult Form -->
        <div class="section__footer_consult-link header-form section__welcome__counsult-button__wrapper" >
            <p class="form-hidden popmake-539 section__welcome__counsult-button">Записаться онлайн</p>
            <div class="form-visible" style="display: none;">
                <?php echo do_shortcode( '[contact-form-7 id="478" title="Форма в шапке"]' );?>
            </div>
        </div>

    </div>

</section>

<style>
    .section__welcome {
        all: unset;
        position: relative;
        top: -30px;
    }
    .section__welcome__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
    }
    .section__welcome__background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .section__welcome__background img {
        /* display: block; */
        position: absolute;
        width: 100%;
        /* height: 100%; */
        top: 0;
        left: 0;
        /* object-fit: cover; */
    }
    
    .section__welcome__split {
        display: flex;
    }
    .section__welcome__photo {
        min-width: 40%;
        max-width: 40%;
        display: flex;
        min-height: 100%;
    }
    .section__welcome__photo__image {
        object-fit: cover;
        height: 100%;
        border-radius: 16px;
    }
    .section__welcome__mobile_photo img {
        border-radius: 16px;
    }
    .section__welcome__photo__writings {
        display: block;
        position: absolute;
        bottom: 10%;
        right: 10%;
        width: 45%;
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
        margin-top: 30px;
    }

    div.section__welcome__citate__text {
        position: relative;
        font-size: 15px;
        line-height: 30px;
        padding: 90px 0 60px;
        font-style: italic;
    }
    div.section__welcome__citate__text:before {
        position: absolute;
        content: '';
        top: 30px;
        left: 0;
        width: 55px;
        height: 35px;
        background: url('/wp-content/themes/main/new/images/quotes.svg') no-repeat left top;
        opacity: 40%;
    }
    div.section__welcome__citate__text:after {
        position: absolute;
        content: '';
        bottom: 10px;
        right: 0;
        width: 55px;
        height: 35px;
        background: url('/wp-content/themes/main/new/images/quotes.svg') no-repeat left top;
        opacity: 40%;
        transform: rotate(180deg);
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
        margin-top: 50px;
    }
    .section__welcome__directions__text {
        padding-bottom: 20px;
        /* display: flex; */
        display: grid;
        grid-template-columns: repeat(3, auto);
        grid-gap: 0 30px;
        flex-wrap: wrap;
        margin: 20px -8px 0;
    }
    .section__welcome__directions__text > div {
        position: relative;
        box-sizing: border-box;
        padding-left: 20px;
        margin: 5px 8px;
        flex-basis: 0;
        min-width: 250px;
        flex-grow: 1;
    }
    .section__welcome__directions__text > div:not(:empty):after {
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
    

    .section__welcome__solution {
        margin: 40px 0;
        background: #A18E8012;
        padding: 30px;
        border-radius: 20px;
    }
    
    .section__welcome__warnings__title {
        margin-top: 50px;
    }
    .section__welcome__warnings__text {
        margin: 40px 0;
    }
    .section__welcome__warnings__text > div {
        display: flex;
        align-items: center;
    }
    .section__welcome__warnings__text > div > img {
        width: 56px;
        height: 56px;
    }
    .section__welcome__warnings__text > div > div {
        flex-grow: 1;
        min-width: 50%;
        padding: 14px 0;
        padding-left: 40px;
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


    /* Flex slider */

    .section__welcome__problems {
        border: none;
        margin: 10px 0;
    }
    .section__welcome__problems h1 {
        color: #A18E80;
        font-size: 24px;
        line-height: 24px;
        font-weight: 500;
        margin: 40px 0;
    }
    .section__welcome__problems .flex-direction-nav {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        height: 100%;
        
    }
    .section__welcome__problems .flex-direction-nav .flex-next  {
        right: -45px;
    }
    .section__welcome__problems .flex-direction-nav .flex-prev  {
    }
    .section__welcome__problems .flex-direction-nav li {
        top: 50%;
    }
    .section__welcome__problems .flex-direction-nav li a {
        overflow: visible!important;
        opacity: 1!important;
    }
    .section__welcome__problems .flex-direction-nav li a .fa {
        width: 60px;
        height: 60px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100px;
        font-size: 14px!important;
    }
    .section__welcome__problems .flex-direction-nav li a i {
        color: #3B3B3B;

    }
    .section__welcome__problems .flex-control-paging  {
        z-index: 100;
        margin-top: 30px;
        margin-bottom: 50px;
    }
    .section__welcome__problems .flex-control-paging li a {
        width: 12px;
        height: 12px;
        margin-right: 5px;
        display: block;
        background: rgba(var(--color-heading),0.3);
        border-radius: 50px;
        cursor: pointer;
        text-indent: -9999px;
        border: none!important;
        box-shadow: none;
    }
    .section__welcome__problems .flex-control-paging li a.flex-active {
        background-color: rgba(var(--color-heading),1);
    }
    .section__welcome__problems .flex-control-nav {
        width: unset;
        position: relative;
        bottom: 0;
        display: inline-block;
    }
    
    .section__welcome__problems .slides li h3 {
        font-size: 24px;
        line-height: 28px;
    }

    .section__welcome__problems {
        margin: 10px 0px 20px;
        padding-bottom: 1px;
    }
    .section__welcome__problems .flex-control-paging  {
        margin-top: 55px;
        margin-bottom: 20px;
        width: 100%;
        display: block;
        text-align: center;
    }
    .section__welcome__problems .flex-direction-nav {
        top: unset;
        bottom: 29px;
        height: 0;
        z-index: 101;
        pointer-events: none;
    }
    .section__welcome__problems .flex-direction-nav .flex-next  {
        right: 20px;
        pointer-events: all;
    }
    .section__welcome__problems .flex-direction-nav .flex-prev  {
        left: -6px;
        pointer-events: all;
    }

    /* / Flex slider  */

    @media screen and (max-width: 1000px) {
        .section__welcome__directions__text {
            grid-template-columns: repeat(2, auto);
        }
    }
    @media screen and (max-width: 800px) {
        .section__welcome__photo {
            min-width: 0;
        }
        .section__welcome__data {
            padding: 0;
            width: 100%;
        }
        .section__welcome__problems {
            margin: 0 -20px;
        }
        .section__welcome__problems li {
            box-sizing: border-box;
        }
        .section__welcome__problems  li > div {
            padding: 0 40px;
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
        
        .section__welcome__directions__text {
            grid-template-columns: repeat(1, auto);
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
        .section__welcome__problems h1 {
            /* min-height: 5em; */
            line-height: 32px;
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

        <?php
            if (wp_is_mobile()) {
        ?>

        // Setting up same height for "problems" items Headers
        try {
            let max_height = Math.max(...$('.section__welcome__problems h1').toArray().map(node => node.offsetHeight), 0);
            $('.section__welcome__problems h1').css({
                "min-height": max_height
            })
            console.log (max_height);
        } catch (e) {
            console.log (e)
        }

        // Running slider

        $('.section__welcome__problems').flexslider({
            animation: "slide",
            animationLoop: true,
            animationSpeed: 1200,
            minItems: 2,
            maxItems: 16,
            slideshow: true, 
            slideshowSpeed: 5000,
            prevText: '',
            nextText: ''
        });



        <?php
            }
        ?>

        
    });
    
</script>
>>>>>>> fba873ff578ca6ec8a008405b207f60dd08f36de
