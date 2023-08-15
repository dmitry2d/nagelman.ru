

<?php
/*
* Diploma and Certificates Section
*/
?>


<section class="section__diploma">

    <div class="section__diploma__title">Дипломы</div>

    <div class="diploma__list">
        
        <?php 
            $items = get_field('diploma-list');
            foreach ($items as $item):
        ?>

            <div class="diploma__list__item">
                <a href="<?=$item['image']?>" data-lightbox="diploma">
                    <img src="<?=$item['image']?>" alt="">
                </a>
            </div>

        <?php
            endforeach;
        ?>

    </div>

</section>

<style>

    .section__diploma {
        padding-bottom: 50px;
    }

    .section__diploma__title {
        font-family: 'Roboto Slab', serif;
        font-weight: 500;
        font-size: 32px;
        line-height: 40px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-basetext),1);
        padding-top: 15px;
        margin-bottom: 40px;
    }
    .diploma__list {
        margin: 0 -20px;
        display: flex;
        flex-wrap: wrap;
    }
    .diploma__list__item {
        min-width: calc(25% - 40px);
        max-width: calc(25% - 40px);
        margin: 0 20px;
    }
    .diploma__list__item a {
        display: block;
        position: relative;
        height: 0;
        padding-top:100%;
    }
    .diploma__list__item a img{
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
        
    @media screen and (max-width: 800px) {
        .section__diploma__title {
            margin-bottom: 20px;
        }
        .diploma__list {
            margin: 0 -20px;
            display: flex;
            flex-wrap: wrap;
        }
        .diploma__list__item {
            min-width: calc(50% - 40px);
            max-width: calc(50% - 40px);
            margin: 0 20px;
        }
    }
    @media screen and (max-width: 350px) {
        .diploma__list {
            margin: 0;
            display: flex;
            flex-wrap: wrap;
        }
        .diploma__list__item {
            min-width: 100%;
            max-width: 100%;
            margin: 0;
        }
    }

</style>


<script>
    $(document).ready(() => {

    });
</script>


