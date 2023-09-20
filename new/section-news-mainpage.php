

<?php
/*
* News Main Page Section
*/
?>

<section class=section__news-mainpage>

	<div class="section__news-mainpage__container">
	    <div class="section__news-mainpage__title">
            Новости
	    </div>
        
        <div class="section__news-mainpage__news-list">
            <?php  get_template_part('new/section', 'news-list'); ?>
        </div>

        <a href="/news/" class="section__news-mainpage__link">Смотреть всё</a>

	</div>

</section>


<style>


    .section__news-mainpage__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
    }
    .section__news-mainpage__title {
        font-family: 'Roboto Slab', serif;
        font-weight: 500;
        font-size: 32px;
        line-height: 40px;
        display: flex;
        align-items: center;
        color: rgba(var(--color-basetext),1);
    }

    .section__news-mainpage__link {
        text-decoration: underline;
        color: #A18E80;
    }

    .section__news-mainpage__news-list {
        margin: 30px 0 40px;
    }

    @media screen and (max-width: 500px) {
        .section__news-mainpage__container {
            padding: 40px 30px 0;
        }
    }

</style>

