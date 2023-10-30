<html class="no-js" lang="ru-RU">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <meta name="yandex-verification" content="65d45f812625503d" />
  <meta name='wmail-verification' content='9b2a6a897118713b8712be1fc92b67fc' />
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134623459-1"></script>
  <script async>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-134623459-1');
  </script>
</head>
<body  <?php body_class(); ?> >
<!-- Yandex.Metrika counter -->
<script async type="text/javascript" >
  (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
  m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
  ym(47499343, "init", {
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true,
    webvisor:true,
    trackHash:true
  });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47499343" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php $color = hex2rgba(esc_attr(get_theme_mod( 'background_color' )), get_theme_mod('opacity_bg'))?>
<div class="wrapper" style="<?php echo 'background-color:'.$color;?>">
<!--[if lt IE 9]>
  <div class="alert alert-warning">Вы используете <strong>устаревшую версию</strong> браузера. Пожалуйста, обновите ваш браузер до более свежей версии</div>
<![endif]-->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <div class="header-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="Вернуться на главную">
              <div class="logo-image">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/avatar.png" srcset="<?php echo get_stylesheet_directory_uri() ?>/img/avatar@2x.png 2x" width="89" height="89" alt="Елена Нагельман">
              </div>
              <div class="site-branding">
                <div class="site-title"><?php bloginfo('name');?></div>
                <p class="site-description"><?php bloginfo('description');?></p>
              </div>
            </a>
          </div>
        </div>
        <style>
        header {
          padding-top: 22px;
          min-height: 153px;
        }

        .header-logo {
          padding-left: 15px;
        }

        .header-logo a {
          display: flex;
          justify-content: space-between;
        }

        .site-branding {
          padding-left: 0;
          background: none;
        }

        .site-title {
          padding-top: 12px;
          margin-bottom: 12px;
          font-size: 40px;
          line-height: 47px;
          color: #755433;
        }

        .site-description {
          font-size: 18px;
          line-height: 21px;
        }
        </style>
        <div class="col-sm-3">
          <div class="header-form">
            <p class="form-hidden popmake-539">Записаться онлайн</p>
            <div class="form-visible" style="display: none;">
              <?php echo do_shortcode( '[contact-form-7 id="478" title="Форма в шапке"]' );?>
            </div>
          </div>
        </div>
        <style>
          .form-hidden {
            font-size: 20px;
            border: 1px solid #755433;
            border-radius: 50px;
            color: #755433;
            text-align: center;
            padding: 15px 8px 16px 8px;
            margin-bottom: 0;
            cursor: pointer;
            background: none;
          }

          .mesengers__link {
            transition: opacity 0.3s;
          }

          .mesengers__link:hover,
          .mesengers__link:focus {
            opacity: 0.6
          }

          .mesengers__link:active {
            opacity: 0.3
          }
        </style>
        <div class="col-sm-4 text-right hidden-xs">
          <div class="header-contacts">
            <div class="header-contcts-left">
              <ul class="mesengers">
                <li>
                  <a class="mesengers__link" onclick="ym('47499343', 'reachGoal', 'click-on-telegram-top');" rel="nofollow" href="tg://resolve?domain=ElenaNagelman" title="Мой Telegram">
                    <svg class="mesengers__icon" width="17" height="17" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-telegram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a class="mesengers__link" onclick="ym('47499343', 'reachGoal', 'click-on-viber-top');" rel="nofollow" href="viber://chat?number=%2B79210205165" title="Мой Viber">
                    <svg class="mesengers__icon" width="17" height="17" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-viber"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a class="mesengers__link" onclick="ym('47499343', 'reachGoal', 'click-on-whatsapp-top');" rel="nofollow" href="https://wa.me/79210205165" target="_blank" title="Мой Whatsapp">
                    <svg class="mesengers__icon" width="17" height="17" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-whatsapp"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a class="mesengers__link" onclick="ym('47499343', 'reachGoal', 'click-on-skype-top');" rel="nofollow" href="skype:nagelman3?call" title="Мой Skype">
                    <svg class="mesengers__icon" width="17" height="17" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-skype"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <div class="header-contacts-right">
              <div class="phone_header">
                <p>
                  <i class="fa fa-phone"></i>
                  <a onclick="ym('47499343', 'reachGoal', 'click-on-phone-top');" class='phone-button' href="tel:<?php echo get_theme_mod('main_phone', 'Телефон'); ?>"><?php echo get_theme_mod('main_phone', 'Телефон'); ?></a>
                </p>
              </div>
              <style>
                .social__link {
                  background: none!important;
                }
              </style>
              <ul class="list-inline social-buttons">
                <li>
                  <a class="social__link" onclick="ym('47499343', 'reachGoal', 'click-on-vk-top');" target="_blank" rel="nofollow" href="<?php echo get_theme_mod('link_vk'); ?>">
                    <svg class="social__icon" width="36" height="36" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-vk"></use>
                    </svg>
                  </a>
                </li>
                <?php /* ?><li>
                  <a class="social__link" onclick="ym('47499343', 'reachGoal', 'click-on-instagram-top');" target="_blank" rel="nofollow" href="<?php echo get_theme_mod('link_inst'); ?>">
                    <svg class="social__icon" width="36" height="36" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a class="social__link" onclick="ym('47499343', 'reachGoal', 'click-on-facebook-top');" target="_blank" rel="nofollow" href="<?php echo get_theme_mod('link_fb'); ?>">
                    <svg class="social__icon" width="36" height="36" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-facebook"></use>
                    </svg>
                  </a>
                </li><?php */ ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <div class="menu-tag">меню</div>
                <div class="icon-justify" style="float: right;margin-top: 3px;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php /* Primary navigation */
                        wp_nav_menu( array(
                          'menu' => 'header_menu',
                          'depth' => 2,
                          'container' => false,
                          'menu_class' => 'nav',
                          //Process nav menu using our custom nav walker
                          'walker' => new wp_bootstrap_navwalker())
                        );
                    ?>
                <ul class="list-inline social-buttons">
                  <?php if(!empty(get_theme_mod('link_vk'))) : ?>
                        <li class="social-vk"><a target="_blank" href="<?php echo get_theme_mod('link_vk'); ?>"></a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty(get_theme_mod('link_inst'))) : ?>
                        <li class="social-inst"><a target="_blank" href="<?php echo get_theme_mod('link_inst'); ?>"></a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty(get_theme_mod('link_fb'))) : ?>
                        <li class="social-fb"><a target="_blank" href="<?php echo get_theme_mod('link_fb'); ?>"></a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty(get_theme_mod('link_ut'))) : ?>
                        <li class="social-yt"><a target="_blank" href="<?php echo get_theme_mod('link_ut'); ?>"></a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty(get_theme_mod('link_ok'))) : ?>
                        <li class="social-ok"><a target="_blank" href="<?php echo get_theme_mod('link_ok'); ?>"></a>
                        </li>
                    <?php endif; ?>
                  </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>