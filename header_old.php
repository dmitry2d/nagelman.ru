<html class="no-js" lang="ru-RU"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(); ?></title>

       
    <meta name="yandex-verification" content="65d45f812625503d" />
    
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
       
    <?php wp_head(); ?>
    </head>

    <body  <?php body_class(); ?> >
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
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
          <div class="alert alert-warning">
            Вы используете <strong>устаревшую версию </strong> браузера. Пожалуйста, обновите ваш браузер до более свежей версии</div>
        <![endif]-->
        <!-- Navigation -->
        
    <header>
        <div class="container" >
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php if (get_header_image()) : ?>
                                <div class="logo-image">
                                    <img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="site-branding">
                                <h1 class="site-title">
                                    <?php bloginfo('name'); ?>
                                </h1>
                                <p class="site-description"><?php bloginfo('description'); ?></p>
                            </div><!-- .site-branding -->                                
                        </a>                            
                        <?php //endif; ?>
                    </div>
                </div>
                <div class="col-sm-6 text-right hidden-xs">
                    <div class="phone_header">
                        <p>
                            <i class="fa fa-phone"></i>
                            <a class='phone-button' href="tel:<?php echo get_theme_mod('main_phone', 'Телефон'); ?>"><?php echo get_theme_mod('main_phone', 'Телефон'); ?></a>
                        </p>
                         
                    </div>
                    <ul class="list-inline social-buttons">
                    <?php if(!empty(get_theme_mod('link_vk'))) : ?>
                        <li><a onclick="yaCounter47499343.reachGoal('click-on-vk-top');" target="_blank" href="<?php echo get_theme_mod('link_vk'); ?>"><i class="fa fa-vk"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty(get_theme_mod('link_inst'))) : ?>
                        <li><a onclick="yaCounter47499343.reachGoal('click-on-instagram-top');" target="_blank" href="<?php echo get_theme_mod('link_inst'); ?>"><i class="fa fa-instagram"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty(get_theme_mod('link_fb'))) : ?>
                        <li><a onclick="yaCounter47499343.reachGoal('click-on-facebook-top');" target="_blank" href="<?php echo get_theme_mod('link_fb'); ?>"><i class="fa fa-facebook"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty(get_theme_mod('link_ut'))) : ?>
                        <li><a onclick="yaCounter47499343.reachGoal('click-on-youtube-top');" target="_blank" href="<?php echo get_theme_mod('link_ut'); ?>"><i class="fa fa-youtube"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty(get_theme_mod('link_ok'))) : ?>
                        <li><a onclick="yaCounter47499343.reachGoal('click-on-odnoklassniki-top');" target="_blank" href="<?php echo get_theme_mod('link_ok'); ?>"><i class="fa fa-odnoklassniki"></i></a>
                        </li>
                    <?php endif; ?>
                  </ul>
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
        