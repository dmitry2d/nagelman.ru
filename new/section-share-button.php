
<?php
    $share_link = get_site_url() . get_query_var ('share_link');
    $share_urls = array(
        'url' => $share_link,
        'tg' => '',
        'vk' => '',
        'wa' => ''
    );

    $share_image_url = get_template_directory_uri() . "/new/images/logo_share.png";
    $share_title = get_the_title();

    $share_urls['vk'] = "https://vk.com/share.php?url=" . $share_link . "&image=" . $share_image_url . "&title=" . $share_title;
    $share_urls['tg'] = "https://telegram.me/share/url?url=" . $share_link . "&text=" . $share_title;
    $share_urls['wa'] = "https://wa.me/?text=" . $share_title . ': ' . $share_link;

    $share_button_id = uniqid();

?>
<a 
    share-button-id = "<?= $share_button_id ?>"
    href="" class="share__link"
>
    <span class="share__link__title">
        Поделиться
    </span>
    <img src="<?= get_template_directory_uri(); ?>/new/images/icn_share.svg">
    <div class="share__popup">
        <div class="share__popup__wrapper">
            <div class="share__popup__item"
                share-button-copy="<?=$share_urls['url']?>">
                <div class="share__popup__item__icon">
                    <img src="<?= get_template_directory_uri(); ?>/new/images/icn_share_url.svg" alt="">
                </div>
                <div class="share__popup__item__link">Скопировать</div>
            </div>
            <div class="share__popup__item"
                share-button-link="<?=$share_urls['vk']?>">
                <div class="share__popup__item__icon">
                    <img src="<?= get_template_directory_uri(); ?>/new/images/icn_share_vk.svg" alt="">
                </div>
                <div class="share__popup__item__link">Вконтакте</div>
            </div>
            <div class="share__popup__item"
                share-button-link="<?=$share_urls['tg']?>">
                <div class="share__popup__item__icon">
                    <img src="<?= get_template_directory_uri(); ?>/new/images/icn_share_tg.svg" alt="">
                </div>
                <div class="share__popup__item__link">Телеграм</div>
            </div>
            <div class="share__popup__item"
                share-button-link="<?=$share_urls['wa']?>">
                <div class="share__popup__item__icon">
                    <img src="<?= get_template_directory_uri(); ?>/new/images/icn_share_wa.svg" alt="">
                </div>
                <div class="share__popup__item__link">Whatsapp</div>
            </div>
        </div>
    </div>
</a>

<script>
    (function () {

        const node = $('[share-button-id="<?=$share_button_id?>"]');

        node.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            setOffset(node);
            $(this).toggleClass('open');
        });

        let setOffset = function (node) {
            let wrapper = node.find('.share__popup__wrapper');
            let maxLeft = Math.max (0, $(window).width() - wrapper.width() - 20);
            
            wrapper.css ({
                top: node.offset().top - $(window).scrollTop() + 30,
                left: Math.min(maxLeft - 40, node.offset().left + node.width() - 60)
            });
        }

        $(window).on('scroll', e => {
            setOffset(node);
        });

        $(window).resize('scroll', e => {
            setOffset(node);
        });


        $('[share-button-link]').on('click', function (e) {
            let url = $(this).attr('share-button-link');
            window.open(url, 'Поделиться', 'left=20,top=20,width=600,height=500,toolbar=1,resizable=0');

        });
        $('[share-button-copy]').on('click', function (e) {
            let url = $(this).attr('share-button-copy');
            navigator.clipboard.writeText(url);
        });
    
    })();

</script>



<!-- 
    onClick = "window.open(this.href, 'VK', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"
-->
<style>
    .share__link {
        display: inline-block;
        width: fit-content;
        margin-right: auto;
        font-weight: 500;
        font-size: 18px;
    }
    .share__link,
    .share__link:focus,
    .share__link:hover {
        color: #3A6F84;
    }
    .share__link span {
        font-size: 18px;
        font-weight: 500;
        color: #3A6F84;
    }
    .share__link img {
        width: 24px;
        margin-left: 10px;
    }
    .share__popup__wrapper {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10000;
        padding: 20px;
        border: 1px solid #ECE8E6;
        background: white;
        border-radius: 20px;
        opacity: 0;
        /* transition: opacity 0.2s; */
        pointer-events: none;
    }
    .share__link.open .share__popup__wrapper {
        opacity: 1;
        pointer-events: all;
    }
    .share__popup__item {
        display: flex;
        align-items: center;
    }
    .share__popup__item__icon {
        box-sizing: border-box;
        width: 44px;
        padding-right: 20px;
    }
    .share__popup__item__icon img {
        width: 100%;
    }      
    .share__popup__item__link {      
        color: #3A6F84;
        font-weight: 500;
        font-size: 15px;
        padding: 5px 10px;
    }
    @media screen and (max-width: 800px) {
        .share__link,
        .share__link a span{
            font-size: 16px;
        }
        .share__link a img {
            width: 20px;
        }
    }

</style>