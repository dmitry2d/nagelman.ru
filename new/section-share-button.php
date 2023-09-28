
<?php
    $share_link = get_query_var ('share_link');
    $share_urls = array (
        'url' => $share_link,
        'tg' => '',
        'vk' => '',
        'wa' => ''
    );

    $share_image_url = get_template_directory_uri() . "/new/images/logo_share.png";
    $share_title = get_the_title();

    $share_urls['vk'] = "https://vk.com/share.php?url=" . urlencode ($share_link . "&image=" . $share_image_url . "&title=" . $share_title);
    $share_urls['tg'] = "https://telegram.me/share/url?url=" . urlencode ($share_link . "&text=" . $share_title);
    // $share_urls['wa'] = "https://wa.me/?text=" . urlencode ($share_title . ': ' . $share_link);
    $share_urls['wa'] = "https://api.whatsapp.com/send?text=" . urlencode ($share_title . ': ' . $share_link);
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
            <div show-share-message-id="<?= $share_button_id ?>" share-message-content="Ссылка скопирована" class="share__popup__item"
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

<div class="share-message" share-message-id="<?= $share_button_id?>">
    <div class="share-message__wrapper">
        <div class="share-message__content"></div>
    </div>
</div>

<script>
    (function () {

        // Открываю меню "поделиться"
        // У каждой кнопки уникальный ID
        const node = $('[share-button-id="<?=$share_button_id?>"]');

        // При нажатии показать меню
        node.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            setOffset(node);
            $(this).toggleClass('open');
        });
        // Поставить координаты для меню
        let setOffset = function (node) {
            let wrapper = node.find('.share__popup__wrapper');
            // Подвинуть меню от правого края, если экран узкий
            let maxLeft = Math.max (0, $(window).width() - wrapper.width() - 20);
            wrapper.css ({
                top: node.offset().top - $(window).scrollTop() + 30,
                left: Math.min(maxLeft - 40, node.offset().left + node.width() - 60)
            });
        }
        // Двигаю меню при скроллинге экрана
        $(window).on('scroll', e => {
            setOffset(node);
        });
        // Двигаю меню при ресайзе экрана
        $(window).resize('scroll', e => {
            setOffset(node);
        });

        // Кнопка соцсетей - открыть в новом окне
        $('[share-button-id="<?=$share_button_id?>"] [share-button-link]').on('click', function (e) {
            let url = $(this).attr('share-button-link');
            window.open(url, 'Поделиться', 'left=20,top=20,width=600,height=500,toolbar=1,resizable=0');
        });
        // Кнопка "скопировать" - скопировать в клипборд
        $('[share-button-id="<?=$share_button_id?>"] [share-button-copy]').on('click', function (e) {
            let url = $(this).attr('share-button-copy');
            navigator.clipboard.writeText(url);
        });
        // Показать подсказку при нажатии "скопировать"
        $('[show-share-message-id="<?= $share_button_id ?>"]').on('click', e => {
            const sharemessageContent = $(e.target).closest('[share-message-content]').attr('share-message-content');
            $('[share-message-id="<?=$share_button_id?>"] .share-message__content').html(sharemessageContent);
            $('[share-message-id="<?=$share_button_id?>"]').addClass('visible');
            setTimeout (() => {
                $('[share-message-id="<?=$share_button_id?>"]').removeClass('visible');
            }, 1300);
        });
    
    })();

</script>



<!-- 
    onClick = "window.open(this.href, 'VK', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"
-->
<style>
    .share__link {
        display: inline-flex;
        align-items: center;
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
        margin-left: 5px;
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

    .share-message {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
        background: #00000030;
    }
    .share-message.visible {
        opacity: 1;
        z-index: 10000;
    }
    .share-message__wrapper {
        padding: 20px 30px;
        border-radius: 5px;
        background: white;
        box-shadow: 0 10px 30px #00000010;
        pointer-events: none;
    }
    .share-message {
        pointer-events: none;
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
