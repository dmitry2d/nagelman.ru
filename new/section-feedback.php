




<?php
/*
* Recent Feedback Section
*/
?>


<section class="section__feedback">

	<div class="section__feedback__container">

		<?php if (esc_attr(get_theme_mod('disp_otzyvy_section','yes')) == 'yes') : 
            $category_id = 6;
            $num = (int) esc_attr(get_theme_mod('num_posts_otzyvy_section','5'));
            $post_otzyvy = new WP_Query(array('cat' => $category_id, 'posts_per_page' => $num, 'order' => 'ASC'));
        ?>

            <?php if ( $post_otzyvy->have_posts() ) : ?>

                    <h2 class="section__feedback__title"><?php echo esc_attr(get_theme_mod('header_otzyvy_section','Отзывы о моей работе'))?></h2>
                        <div class="section__feedback__items">
                            <ul class="slides">
                                <?php while ( $post_otzyvy->have_posts() ) : $post_otzyvy->the_post(); ?>

                                    <li>
                                    <h3><?php echo get_field('name_author') ?>:</h3>
                                    <?php the_content(); ?>
                                    </li>

                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="section__feedback__more">
                        <a href="<?php echo get_category_link($category_id); ?>">Все отзывы</a>
                    </div>

                </div>

            <?php endif; ?>

		<?php endif; ?>
	</div>

</section>

<style>


    .section__feedback {
        background: rgba(var(--color-heading),0.07);
    }

    .section__feedback__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 1px;
    }

    .section__feedback__title {
        font-family: 'Roboto Slab', serif;
        font-weight: 500;
        font-size: 32px;
        line-height: 40px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-basetext),1);
        padding-top: 15px;
    }
    .section__feedback__items {
        border: none;
    }
    .section__feedback__items {
        margin: 10px 50px;
    }
    .section__feedback__items .slides li h3 {
        font-weight: 500;
        font-size: 24px;
        line-height: 24px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-heading),1);
        padding: 20px 0;
    }

    .section__feedback__items .flex-direction-nav {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        height: 100%;
        
    }
    .section__feedback .flex-direction-nav .flex-next  {
        right: -45px;
    }
    .section__feedback .flex-direction-nav .flex-prev  {
    }
    .section__feedback__items .flex-direction-nav li {
        top: 50%;
    }
    .section__feedback__items .flex-direction-nav li a {
        overflow: visible!important;
        opacity: 1!important;
    }
    .section__feedback__items .flex-direction-nav li a .fa {
        width: 60px;
        height: 60px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100px;
        font-size: 14px!important;
    }
    .section__feedback__items .flex-direction-nav li a i {
        color: #3B3B3B;

    }
    .section__feedback .flex-control-paging  {
        z-index: 100;
        margin-top: 30px;
        margin-bottom: 50px;
    }
    .section__feedback .flex-control-paging li a {
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
    .section__feedback .flex-control-paging li a.flex-active {
        background-color: rgba(var(--color-heading),1);
    }
    .section__feedback .flex-control-nav {
        width: unset;
        position: relative;
        bottom: 0;
        display: inline-block;
    }
    .section__feedback__more {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        top: -85px;
        text-align: right;
        padding-right: 70px;
    }
    .section__feedback__more a {
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: rgba(var(--color-heading),1);
        text-decoration: underline;
    }


    @media screen and (max-width: 800px) {

        .section__feedback__items .slides li h3 {
            font-size: 24px;
            line-height: 28px;
        }

        .section__feedback__items {
            margin: 10px 0px 20px;
            padding-bottom: 1px;
        }
        .section__feedback .flex-control-paging  {
            margin-top: 55px;
            margin-bottom: 20px;
            width: 100%;
            display: block;
            text-align: center;
        }
        .section__feedback__items .flex-direction-nav {
            top: unset;
            bottom: 29px;
            height: 0;
            z-index: 101;
            pointer-events: none;
        }
        .section__feedback .flex-direction-nav .flex-next  {
            right: 20px;
            pointer-events: all;
        }
        .section__feedback .flex-direction-nav .flex-prev  {
            left: -6px;
            pointer-events: all;
        }
        .section__feedback__more {
            padding: 10px 15px 40px;
            top: 0;
            text-align:left;
        }
        .section__feedback__more a {
            position: relative;
            bottom: 0;
            right: 0;
        }
        .section__feedback h3.text-right {
            text-align:left;
            padding: 10px 0 30px;
            text-decoration: underline;
        }
        
    }

</style>


<script>
    $(document).ready(() => {
        $('.section__feedback__items').flexslider({
            animation: "slide",
            animationLoop: true,
            animationSpeed: 900,
            minItems: 2,
            maxItems: 16,
            slideshow: true, 
            slideshowSpeed: 2000,
            prevText: '',
            nextText: ''
        });
    });
</script>


