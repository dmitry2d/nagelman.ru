

<?php
/*
* Payment Methods Section
*/
?>


<section id="section__payment-methods">

	<div class="section__payment-methods__container">

        <div class="content__spoiler">
            <div class="content__spoiler__title">
                Способы оплаты
            </div>
            <div class="content__spoiler__text">
                <div>
                    <?= get_field('payment-systems__top-text')?>
                </div>
                
                <div class="section__payment-methods__logos">

                    <?php
                        if(have_rows('payment-systems__icons')):
                            foreach (get_field('payment-systems__icons') as $icon) {
                                echo '<img src="' . $icon['icon'] . '">';
                            }
                        endif;
                    ?>

                </div>

                    <?= get_field('payment-systems__bottom-text')?>

            </div>
        </div>

	</div>

</section>

<style>
    .section__payment-methods__logos {
        display: flex;
        flex-wrap: wrap;
        margin: 20px -10px;
    }
    .section__payment-methods__logos > img {
        margin: 10px;
        width: 130px;
    }
    @media screen and (max-width: 800px) {
        .section__payment-methods__logos img{
           width: 130px;
        }
    }
</style>