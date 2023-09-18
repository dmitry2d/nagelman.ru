

<?php
/*
* Section category
*/
?>

    
<div class="section__category">

    <?php

        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                if( has_post_thumbnail() ) {
                    if(!empty($blog_layout) && $blog_layout == 'mediumthumbslistview') {
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'fotography-grid-large', true); 
                    } else {
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'fotography-bxslider', true);
                    }
				} else {
				    $image[0] = '';
				}
        ?>



            <?php
                // If news    
                if ($cat == 7) {

                    // Print one news item
                    get_template_part ('new/section', 'news-item');
                
                } else {

            ?>



                <div class="section__category__item">

                    <?php
                        if ($cat == 6) {
                    ?>
                    <?php
                        } else {
                    ?>
                        <div class="section__category__item__image">
                            <img src="<?php echo esc_url($image[0]); ?>" alt=""> 
                        </div> 

                    <?php
                        }
                    ?>

                    <div class="section__category__item__data">

                        <div class="section__category__item__title">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                    // Choose by category
                                    if ($cat == 6) {
                                        echo get_field ('name_author');
                                    } else {
                                        the_title();
                                    }
                                ?>
                            </a>                                                      
                        </div>

                        <div class="section__category__item__text">
                            <?php the_content(); ?>
                        </div>

                        <?php
                            if ($cat == 6) {
                        ?>
                        <?php
                            } else {
                        ?>
                            <a href="<?php the_permalink();?>" class="section__category__item__link">
                                Читать полностью
                            </a>
                        <?php
                            }
                        ?>

                    </div>
                    
                </div>

            <?php
                // If news else end
                };
            ?>

        <?php 
            // While have posts end -->
            endwhile; 
            endif;
        ?>

</div>

<style>


    .section__category__item {
        background:  rgba(var(--color-heading),0.07);
        margin-bottom: 40px;
        padding: 30px;
        display: flex;
    }
    .section__category__item__image {
        width: 46%;
        min-width: 40%;
        /* height: 100%; */
        padding-top: 68%;
        overflow: hidden;
    }
    .section__category__item__image img {
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        object-fit: cover;
        object-position: 0 36%;
        width: 100%;
        height: 100%;
    }
    .section__category__item__title a {
        font-weight: 500;
        font-size: 28px;
        line-height: 36px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-heading),1);
        padding: 0 0 30px;
    }
    .section__category__item__data {
        padding-left: 0;
    }
    .section__category__item__image + .section__category__item__data {
        padding-left: 25px;
    }
    

    .section__category__item__text * {
        display: none;
    }
    .section__category__item__text p:first-child {
        display: block;
    }
    .section__category__item__text img:first-child + p {
        display: block;
    }
    .section__category__item__text *,
    .section__category__item__text {
        /* all: initial; */
        position: relative;
        padding: 0;
        margin: 0;
        font-size: 15px;
        font-weight: 500;
        line-height: 24px;
        color: rgba(var(--color-basetext),1);
        font-family: inherit;

    }
    .section__category__item__text {
        display: -webkit-box;
        -webkit-line-clamp: 11;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .section__category__item__text img {
        display: none;
    }
    a.section__category__item__link {
        display: inline-block;
        padding: 12px 22px;
        border: 1px solid rgba(var(--color-basetext),1);
        border-radius: 50px;
        margin-top: 30px;
        color: rgba(var(--color-basetext),1);
    }
    a.section__category__item__link:hover {
        color: rgba(var(--color-basetext),1);
    }

    @media screen and (max-width: 800px) {
        .section__category__item {
            display: block;
        }
        .section__category__item__data {
            padding: 30px 0 0;
        }
        .section__category__item__image {
            width: 100%;
            min-width: 100%;
            height: 0;
            padding-top: 80%;
            overflow: hidden;
        }
        .section__category__item__title a {
            font-weight: 500;
            font-size: 24px;
            line-height: 32px;
            display: flex;
            align-items: center;
            color: rgba(var(--color-heading),1);
            padding: 0 0 30px;
        }
        .section__category__item__image + .section__category__item__data {
            padding-left: 0;
        }
    }
   
</style>