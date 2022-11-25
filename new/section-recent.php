

<?php
/*
* Recent Posts Section
*/
?>

<section class=section__recent>

	<div class="section__recent__container">

		<?php if (esc_attr(get_theme_mod('disp_recent_section','yes')) == 'yes') : 
            $category_id = 1;
            $num = (int) esc_attr(get_theme_mod('num_posts_recent_section','4'));
            $posts_about = new WP_Query(array('cat' => $category_id , 'posts_per_page' => $num, 'order' => 'DESC'));
        ?>

            <?php if ( $posts_about->have_posts() ) : ?>

                <h2 class="section__recent__title"><?php echo esc_attr(get_theme_mod('header_recent_section','Последние записи'))?></h2>
                <div class="section__recent__posts">
                    <ul class="slides">
                        <?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
                            <li>
                                <div class="section__recent__post">
                                    <a class="" href="<?php the_permalink(); ?>" title="<?php the_title()?>">

                                        <?php if(has_post_thumbnail()) $image = get_the_post_thumbnail_url( get_the_ID(),'fotography-grid-medium');
                                    else $image =  get_bloginfo('template_directory').'/img/no_image.png'; ?>
                                        <div class="section__recent__post__image">
                                            <img src="<?php echo $image; ?>">
                                            <!-- <p class="recent-post-date text-right"><?php //the_time(get_option('date_format')); ?></p> -->
                                        </div>
                                        <h3>
                                            <?php the_title() ?>
                                        </h3>
                                            
                                    </a>
                                </div>
                            </li>
                        <?php endwhile; ?>

                    </ul>
                </div>

			<?php endif; ?>
		<?php endif; ?>
	</div>
</section>


<style>


    .section__recent__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
    }
    .section__recent__title {
        font-family: 'Roboto Slab', serif;
        font-weight: 500;
        font-size: 32px;
        line-height: 40px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-basetext),1);
    }

    .section__recent__posts {
        padding: 20px 0;
    }

    .section__recent__post {
        padding: 10px;
    }

    .section__recent__post__image {
        width: 100%;
        height: 0;
        padding-top: 100%;
        
    }
    .section__recent__post__image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 15px;
    }

    .section__recent__post h3 {
        font-weight: 400;
        font-size: 18px;
        line-height: 29px;
        color: rgba(var(--color-basetext),1);
    }


    /* Slider nav Styles */

    .section__recent__posts .flex-direction-nav {
        position: absolute;
        top: 150px;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        pointer-events: none;
    }
    .section__recent__posts .flex-direction-nav a {
        overflow: visible;
        opacity: 1;
        color: rgba(var(--color-basetext), 1)!important;
    }
    .section__recent__posts .flex-direction-nav a:focus {
        outline: none!important;
    }
    .section__recent__posts .flex-direction-nav li {
        /* top: min(135px, 40vw); */
        top: 0;
    }
    .section__recent__posts .flex-direction-nav .flex-next .fa,
    .section__recent__posts .flex-direction-nav .flex-prev .fa {
        margin: 0;
        position: absolute;
        width: 60px;
        height: 60px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000000f0;
        border-radius: 100px;
        opacity: 1;
        text-decoration: none;
        pointer-events: all;
        font-size: 16px!important;
        color: rgba(var(--color-basetext),1)!important;
        -webkit-text-fill-color: rgba(var(--color-basetext),1)!important;
    }
    .section__recent__posts .flex-direction-nav .flex-next {
        right: -5px;
    }
    .section__recent__posts .flex-direction-nav .flex-prev {
        left: -30px;
    }
    .section__recent__posts .flex-control-nav.flex-control-paging {
        display: none;
    }

    @media screen and (max-width: 500px) {
        .section__recent__container {
            padding: 40px 30px 0;
        }
        .section__recent__posts .flex-direction-nav {
            top: calc(50vw - 12px);
        }
    }

</style>


<script>
    
    $(document).ready(() => {
        let window_width = $(window).width();
        $('.section__recent__posts').flexslider({
            animation: "slide",
            animationSpeed: 500,
            animationLoop: false,
            // itemWidth: 260
            itemWidth: window_width < 500 ? window_width - 10 : 260
        });
    });

</script>
