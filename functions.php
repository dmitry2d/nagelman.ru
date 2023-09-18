<?php


/**
 * Dev Vars
 */
define('WP_DEBUG', true);
// define( 'WP_DEBUG_DISPLAY', true );
// @ini_set('display_errors', 1);
$NEW_SITE = true;


 

/**
* загружаемые скрипты и стили
*/
function load_style_script(){
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', array(), null, true);
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);
  wp_enqueue_script('jquery.fancybox.min', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), null, true);
  wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), null, true);
  // wp_enqueue_script('jquery.easing', get_template_directory_uri() . '/js/jquery.easing.js', array(), null, true);
  // wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.js');
  
  wp_enqueue_script('jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), null, true);
  wp_enqueue_script('imask', get_template_directory_uri() . '/new/scripts/imask.js', array(), null, true);

 
  wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
   wp_enqueue_style('fa', get_template_directory_uri() . '/css/font-awesome.min.css');
 
  wp_enqueue_style('jquery.fancybox.min', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
  wp_enqueue_style('style-flexslider', get_template_directory_uri() . '/css/flexslider.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  // wp_enqueue_style('style-jquery-ui-1.9.2', get_template_directory_uri() . '/css/jquery-ui-1.9.2.custom.css');

}


/**
* загружаем скрипты и стили
*/
add_action('wp_enqueue_scripts', 'load_style_script');

/**
* поддержка миниатюр
**/
add_theme_support('post-thumbnails');

add_image_size( 'fotography-bxslider', 930, 350, true); 
  //grid image cropt
  add_image_size( 'fotography-grid-large', 600, 600, true);
  //grid image cropt
  add_image_size( 'fotography-grid-medium', 300, 300, true);

// допустим в functions.php мы регистрируем дополнительный размер так:
// add_image_size( 'small_dog', 150, 180, true );
// add_image_size( 'small_dog_m', 200, 240, true );
/**
* добавляем виджеты
*/
register_sidebar(array(
				'name' => 'Sidebar',
				'id' => 'sidebar',
				'before_widget' => '<div class="sidebar-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'));
// Register custom navigation walker
    require_once('wp-bootstrap-navwalker.php');


/**
* регистрируем меню
**/
register_nav_menus(array(
  'header_menu' => 'Меню в шапке',
  'footer_menu' => 'Меню в подвале'
));

add_theme_support( 'custom-background' );

add_action('customize_register', function($wp_customize){

    $wp_customize->add_panel('basic_settings', array(
        'title'         => __('Основные данные','main_theme'),
        'description'   => '',
        'capability'    => 'edit_theme_options',
        'priority'      => 10,
        'theme_supports'=>'',
        ));


    $wp_customize->get_section('title_tagline' )->panel = 'basic_settings';

    $wp_customize->add_setting( 'main_phone', array(
      'default' => '')
    );

    $wp_customize->add_control('main_phone', array(
            'label' => 'Телефон',
            'section' => 'title_tagline',
            'type' => 'text',
        )
    );

       //Background Settings
    $wp_customize->get_section('background_image')->title = __( 'Фоновое изображение', 'main_theme' );
    $wp_customize->get_section('background_image')->priority = 60;
    $wp_customize->get_section('background_image')->panel = 'basic_settings'; 

    $wp_customize->add_setting( 'opacity_bg', array(
      'default' => '0.8')
    );

    $wp_customize->add_control('opacity_bg', array(
            'label' => 'Прозрачность фона',
            'section' => 'background_image',
            'type' => 'text',
        )
    );

    //Footer Copy Right Text
   $wp_customize->add_section('footer_copyright', array(
        'priority' => 70,
        'title' => __('Доп текст футера', 'main_theme'),
        'panel' => 'basic_settings'
    ));

    $wp_customize->add_setting('copyright', array(
        'default' => '',
        'transport' => 'postMessage'
    ));
    
    $wp_customize->add_control('copyright',array(
        'type' => 'textarea',
        'label' => __('Copyright', 'main_theme'),
        'section' => 'footer_copyright',
        'setting' => 'copyright',
    ));

    $wp_customize->add_section('social_links', array(
        'priority' => 70,
        'title' => __('Ссылки на соц.сети', 'main_theme'),
        'panel' => 'basic_settings'
    ));

    $wp_customize->add_setting( 'link_vk', array(
      'default' => '')
    );

    $wp_customize->add_control('link_vk', array(
            'label' => 'Ссылка на VK',
            'section' => 'social_links',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting('link_fb', array(
      'default' => '')
    );

    $wp_customize->add_control( 'link_fb', array(
            'label' => 'Ссылка на FB',
            'section' => 'social_links',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting( 'link_inst', array(
      'default' => '')
    );

    $wp_customize->add_control('link_inst', array(
            'label' => 'Ссылка на Inst',
            'section' => 'social_links',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting('link_ut', array(
      'default' => '')
    );

    $wp_customize->add_control('link_ut', array(
            'label' => 'Ссылка на YouTube',
            'section' => 'social_links',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting('link_ok', array(
      'default' => '')
    );

    $wp_customize->add_control('link_ok', array(
            'label' => 'Ссылка на ОК',
            'section' => 'social_links',
            'type' => 'text',
        )
    );

    $wp_customize->add_panel('main_settings', array(
        'title'         => __('Настройки главной страницы','main_theme'),
        'description'   => '',
        'capability'    => 'edit_theme_options',
        'priority'      => 20,
        'theme_supports'=>'',
        ));

    $wp_customize->get_section('static_front_page' )->panel = 'main_settings';
    $wp_customize->get_section('static_front_page' )->priority = 10;
    $wp_customize->get_section('static_front_page' )->title = 'Что отображать на главной';

    $wp_customize->add_setting('opacity_section', array(
      'default' => '0.8',
   ));

   $wp_customize->add_control('opacity_section', array(
      'type' => 'text',
      'label' => __('Прозрачность секций', 'main_theme'),
      'section' => 'static_front_page',
      'setting' => 'opacity_section',
   ));

    // секция услуги
    $wp_customize->add_section('services_section', array(
        'priority' => 20,
        'title' => __('Настройки секции Услуги', 'main_theme'),
        'panel' => 'main_settings'
    ));

    $wp_customize->add_setting('disp_services_section', array(
      'default' => 'yes',
      'capability' => 'edit_theme_options',
      
   ));

   $wp_customize->add_control('disp_services_section', array(
      'type' => 'radio',
      'label' => __('Скрыть/показать секцию', 'main_theme'),
      'section' => 'services_section',
      'setting' => 'disp_services_section',
      'choices' => array(
         'yes' => __('Да', 'main_theme'),
         'no' => __('Нет', 'main_theme'),
      )
   ));

   $wp_customize->add_setting('header_services_section', array(
      'default' => 'У меня для вас есть три варианта работы:',
   ));

   $wp_customize->add_control('header_services_section', array(
      'type' => 'text',
      'label' => __('Текст заголовка', 'main_theme'),
      'section' => 'services_section',
      'setting' => 'header_services_section',
   ));

   $wp_customize->add_setting('num_posts_services_section', array(
      'default' => '3',
   ));

   $wp_customize->add_control('num_posts_services_section', array(
      'type' => 'text',
      'label' => __('Количество записей', 'main_theme'),
      'section' => 'services_section',
      'setting' => 'num_posts_services_section',
   ));

   $wp_customize->add_setting('bg_color_services_section', array(
      'default' => '#fff',
   ));

   $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
      $wp_customize, 
      'link_color1', 
      array(
        'label'      => __( 'Фоновый цвет', 'main_theme' ),
        'section'    => 'services_section',
        'settings'   => 'bg_color_services_section',
      ) ) 
    );

   // секция отзывы
   $wp_customize->add_section('otzyvy_section', array(
        'priority' => 20,
        'title' => __('Настройки секции Отзывы', 'main_theme'),
        'panel' => 'main_settings'
    ));

    $wp_customize->add_setting('disp_otzyvy_section', array(
      'default' => 'yes',
      'capability' => 'edit_theme_options',
      
   ));

   $wp_customize->add_control('disp_otzyvy_section', array(
      'type' => 'radio',
      'label' => __('Скрыть/показать секцию', 'main_theme'),
      'section' => 'otzyvy_section',
      'setting' => 'disp_otzyvy_section',
      'choices' => array(
         'yes' => __('Да', 'main_theme'),
         'no' => __('Нет', 'main_theme'),
      )
   ));

   $wp_customize->add_setting('header_otzyvy_section', array(
      'default' => 'Отзывы о моей работе',
   ));

   $wp_customize->add_control('header_otzyvy_section', array(
      'type' => 'text',
      'label' => __('Текст заголовка', 'main_theme'),
      'section' => 'otzyvy_section',
      'setting' => 'header_otzyvy_section',
   ));

   $wp_customize->add_setting('num_posts_otzyvy_section', array(
      'default' => '5',
   ));

   $wp_customize->add_control('num_posts_otzyvy_section', array(
      'type' => 'text',
      'label' => __('Количество отзывов с слайдере', 'main_theme'),
      'section' => 'otzyvy_section',
      'setting' => 'num_posts_otzyvy_section',
   ));

   $wp_customize->add_setting('bg_color_otzyvy_section', array(
      'default' => '#fff',
   ));

   $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
      $wp_customize, 
      'link_color2', 
      array(
        'label'      => __( 'Фоновый цвет', 'main_theme' ),
        'section'    => 'otzyvy_section',
        'settings'   => 'bg_color_otzyvy_section',
      ) ) 
    );

   // секция последние записи
   $wp_customize->add_section('recent_post_section', array(
        'priority' => 20,
        'title' => __('Настройки секции послдение записи', 'main_theme'),
        'panel' => 'main_settings'
    ));

    $wp_customize->add_setting('disp_recent_section', array(
      'default' => 'yes',
      'capability' => 'edit_theme_options',
      
   ));

   $wp_customize->add_control('disp_recent_section', array(
      'type' => 'radio',
      'label' => __('Скрыть/показать секцию', 'main_theme'),
      'section' => 'recent_post_section',
      'setting' => 'disp_recent_section',
      'choices' => array(
         'yes' => __('Да', 'main_theme'),
         'no' => __('Нет', 'main_theme'),
      )
   ));

   $wp_customize->add_setting('header_recent_section', array(
      'default' => 'Отзывы о моей работе',
   ));

   $wp_customize->add_control('header_recent_section', array(
      'type' => 'text',
      'label' => __('Текст заголовка', 'main_theme'),
      'section' => 'recent_post_section',
      'setting' => 'header_recent_section',
   ));

   $wp_customize->add_setting('num_posts_recent_section', array(
      'default' => '4',
   ));

   $wp_customize->add_control('num_posts_recent_section', array(
      'type' => 'text',
      'label' => __('Количество отзывов с слайдере', 'main_theme'),
      'section' => 'recent_post_section',
      'setting' => 'num_posts_recent_section',
   ));

   $wp_customize->add_setting('bg_color_recent_section', array(
      'default' => '#fff',
   ));

   $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
      $wp_customize, 
      'link_color3', 
      array(
        'label'      => __( 'Фоновый цвет', 'main_theme' ),
        'section'    => 'recent_post_section',
        'settings'   => 'bg_color_recent_section',
      ) ) 
    );

   // секция быстрые контакты
   $wp_customize->add_section('quikcontact_section', array(
        'priority' => 20,
        'title' => __('Настройки секции контакты', 'main_theme'),
        'panel' => 'main_settings'
    ));

    $wp_customize->add_setting('disp_quikcontact_section', array(
      'default' => 'yes',
      'capability' => 'edit_theme_options',
      
   ));

   $wp_customize->add_control('disp_quikcontact_section', array(
      'type' => 'radio',
      'label' => __('Скрыть/показать секцию', 'main_theme'),
      'section' => 'quikcontact_section',
      'setting' => 'disp_quikcontact_section',
      'choices' => array(
         'yes' => __('Да', 'main_theme'),
         'no' => __('Нет', 'main_theme'),
      )
   ));

   $wp_customize->add_setting('header_quikcontact_section', array(
      'default' => '',
   ));

   $wp_customize->add_control('header_quikcontact_section', array(
      'type' => 'text',
      'label' => __('Текст заголовка', 'main_theme'),
      'section' => 'quikcontact_section',
      'setting' => 'header_quikcontact_section',
   ));

   $wp_customize->add_setting('email_quick', array(
      'default' => 'example@mail.ru',
   ));

   $wp_customize->add_control('email_quick', array(
      'type' => 'text',
      'label' => __('Оснвоной Email для связи', 'main_theme'),
      'section' => 'quikcontact_section',
      'setting' => 'email_quick',
   ));

   $wp_customize->add_setting('skype_quik', array(
      'default' => 'http://vk.com',
   ));

   $wp_customize->add_control('skype_quik', array(
      'type' => 'text',
      'label' => __('Ссылка на Skype', 'main_theme'),
      'section' => 'quikcontact_section',
      'setting' => 'skype_quik',
   ));

   $wp_customize->add_setting('bg_color_qc_section', array(
      'default' => '#d28d56',
   ));

   $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
      $wp_customize, 
      'link_color4', 
      array(
        'label'      => __( 'Фоновый цвет', 'main_theme' ),
        'section'    => 'quikcontact_section',
        'settings'   => 'bg_color_qc_section',
      ) ) 
    );

    // Настройки для вывода записей в блоке
    $wp_customize->add_section('blog_archive_section', array(
        'priority' => 30,
        'title' => __('Настройки страницы блога', 'main_theme'),
    ));

    $wp_customize->add_setting( 'blog_page_archive_section', array(
        'default' => 'medium',
        'capability' => 'edit_theme_options',
    ) );
 
    $wp_customize->add_control('blog_page_archive_section', array(
      'type' => 'radio',
      'label' => __('Выбрать размер фото у записи', 'main_theme'),
      'section' => 'blog_archive_section',
      'setting' => 'blog_page_archive_section',
      'choices' => array(            
         'mediumthumbslistview' => __('Средний размер фото записи', 'main_theme'),
         'largethumbslistview' => __('Большой размер фото записи', 'main_theme')
      )
   ));

    $wp_customize->add_setting('blog_author_archive_section', array(
      'default' => 'yes',
      'capability' => 'edit_theme_options',
      
   ));

   $wp_customize->add_control('blog_author_archive_section', array(
      'type' => 'radio',
      'label' => __('Скрыть/показать автора', 'main_theme'),
      'section' => 'blog_archive_section',
      'setting' => 'blog_author_archive_section',
      'choices' => array(
         'yes' => __('Да', 'main_theme'),
         'no' => __('Нет', 'main_theme'),
      )
   ));

   $wp_customize->add_setting('blog_postdate_archive_section', array(
      'default' => 'yes',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control('blog_postdate_archive_section', array(
      'type' => 'radio',
      'label' => __('Скрыть/показать дату публикации', 'main_theme'),
      'section' => 'blog_archive_section',
      'setting' => 'blog_postdate_archive_section',
      'choices' => array(
         'yes' => __('Да', 'main_theme'),
         'no' => __('Нет', 'main_theme'),
      )
   ));

   $wp_customize->add_setting('blog_metacategory_archive_section', array(
      'default' => 'yes',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control('blog_metacategory_archive_section', array(
      'type' => 'radio',
      'label' => __('Скрыть/показать мета данные', 'main_theme'),
      'section' => 'blog_archive_section',
      'setting' => 'blog_metacategory_archive_section',
      'choices' => array(
         'yes' => __('Да', 'main_theme'),
         'no' => __('Нет', 'main_theme'),
      )
   ));
   

   $wp_customize->add_setting('blog_description_archive_section', array(
      'default' => 'Читать полностью',
   ));

   $wp_customize->add_control('blog_description_archive_section', array(
      'type' => 'text',
      'label' => __('Текст кнопки', 'main_theme'),
      'section' => 'blog_archive_section',
      'setting' => 'blog_description_archive_section',
   ));

   $wp_customize->add_setting('blog_description_video_section', array(
      'default' => 'Подробнее',
   ));

   $wp_customize->add_control('blog_description_video_section', array(
      'type' => 'text',
      'label' => __('Текст кнопки для видео', 'main_theme'),
      'section' => 'blog_archive_section',
      'setting' => 'blog_description_video_section',
   ));

   
});


// Замена стандартной формы поиска
function fotography_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <button id="searchsubmit" /><i class="fa fa-search"></i></button>
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'fotography_search_form' );

/**
 * Remove the slug from published post permalinks.
 */
function custom_remove_cpt_slug( $post_link, $post, $leavename ) {

    if ( 'dogs' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'custom_remove_cpt_slug', 10, 3 );


/**
* пагинация
**/
function wp_corenavi($max = '') {
  global $wp_query;
  $pages = '';
  $max = empty($max) ? $wp_query->max_num_pages : $max;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation text-center">';
  // if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  // echo $pages . paginate_links($a);
  echo paginate_links($a);
  if ($max > 1) echo '</div>';
}

//вывод записей только родительской рубрики start
function wph_only_parent_category($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_category())
        $query->set('category__in', array(get_queried_object_id()));
}
add_action('pre_get_posts', 'wph_only_parent_category');
//вывод записей только родительской рубрики end

//замена вывода стандартной галереи
add_filter('use_default_gallery_style', '__return_false');

/* 
 * Изменение вывода галереи через шоткод 
 * Смотреть функцию gallery_shortcode в http://wp-kama.ru/filecode/wp-includes/media.php
 * $output = apply_filters( 'post_gallery', '', $attr );
 */
add_filter('post_gallery', 'my_gallery_output', 10, 2);
function my_gallery_output( $output, $attr ){
  if(is_array($attr['ids'])) $ids_arr = $attr['ids'];
  else $ids_arr = explode(',', $attr['ids']);
  $ids_arr = array_map('trim', $ids_arr );

  $pictures = get_posts( array(
    'posts_per_page' => -1,
    'post__in'       => $ids_arr,
    'post_type'      => 'attachment',
    'orderby'        => 'post__in',
  ) );

  if( ! $pictures ) return 'Запрос вернул пустой результат.';

  // Вывод
  $out = '<div class="row gallery">';

  // Выводим каждую картинку из галереи
  foreach( $pictures as $pic ){
    // print_r($pic);
    $src = $pic->guid;
    $t = esc_attr( $pic->post_title );
    $title = ( $t && false === strpos($src, $t)  ) ? $t : '';

    $caption = ( $pic->post_excerpt != '' ? $pic->post_excerpt : $title );
    

  switch ($attr['size']) {
    case 'large':
      $size = 'fotography-grid-large';
      break;
    case 'medium':
      $size = 'fotography-grid-medium';
      break;
    default:
      $size = 'thumbnail';
      break;
  }
    $image_output =  wp_get_attachment_image( $pic->ID,  $size, false, $attr );

    $col = (!empty($attr['columns'])) ? 'col-sm-'.(12 / $attr['columns']) : 'col-sm-4';
    
    $out .= '<div class="foto '.$col.'">
      <a href="'. $src .'" data-fancybox="gallery" data-caption="'.$caption.'">'.$image_output.'</a></div>';
  }
  $out .= '</div>';

  return $out;
}

require_once 'shortcode.php';


// добавление доп кнопок в редкатор tinyMCE
add_action('admin_head', 'ex_add_my_first_button');

function ex_add_my_first_button() {
    global $typenow;
    // проверяем права доступа
    if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
      return;
    }
    // проверяем тип поста
    if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return;
    // проверяем что WYSIWYG включен
    if ( get_user_option('rich_editing') == 'true') {
        add_filter("mce_external_plugins", "ex_add_tinymce_plugin");
        add_filter('mce_buttons', 'ex_register_my_first_button');
    }
}

function ex_add_tinymce_plugin($plugin_array) {
    $plugin_array['ex_first_button'] = get_template_directory_uri()."/js/btn.js";
    return $plugin_array;
}

function ex_register_my_first_button($buttons) {
   array_push($buttons, "ex_first_button");
   array_push($buttons, "ex_second_button");
   // array_push($buttons, "accord_schortcode_button");
   // array_push($buttons, "accord_item_schortcode_button");
   return $buttons;
}


/* Convert hexdec color string to rgb(a) string */
 
function hex2rgba($color, $opacity = false) {
 
  $default = 'rgb(0,0,0)';

  //Return default if no color provided
  if(empty($color))
          return $default; 
 
  //Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
          $color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
          if(abs($opacity) > 1)
            $opacity = 1.0;
          $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
          $output = 'rgb('.implode(",",$rgb).')';
        }
        //Return rgb(a) color string
        return $output;
}


//Удаляем category из УРЛа категорий
add_filter('category_link', create_function('$a', 'return str_replace("category/", "", $a);'), 9999);

// Вывод сообщения при неверной авторизации
function true_change_default_login_errors(){
  return '<strong>ОШИБКА</strong>: Вы ошиблись при вводе логина или пароля.';
}
 
add_filter( 'login_errors', 'true_change_default_login_errors' );

// Ставим ссылку на себя в футере в админке
function true_change_admin_footer () {
  $footer_text = array(
    'Спасибо вам за творчество с <a href="http://wordpress.org">WordPress</a>',
    'Разработал <a href="http://iggiweb.ru" target="_blank">Игорь Кураж</a>'
  );
  return implode( ' &bull; ', $footer_text);
}
 
add_filter('admin_footer_text', 'true_change_admin_footer');

/* микроразметка изображений */ 
function micro_image($content) {
  global $post;
  if(is_single( $post->ID )) {
    $pattern = "<img";
    $replacement = '<img itemprop="image"';
    $content = str_replace($pattern, $replacement, $content);
  }
  return $content; 
} 
add_filter('the_content', 'micro_image'); 
/* микроразметка изображений */

/* микроразметка хлебных крошек*/ 
function add_micro_to_category( $thelist, $separator, $parents){
    if(!is_admin()) {
      $re = '@<a\s(.*?href=".+?".*?)>(.+?)</a>@mi';
      if(mb_strpos($thelist, ' / ')) {
      $cats = explode(' / ', $thelist);
      $len = count($cats);
        foreach ($cats as $key => $cat) {
          preg_match_all($re, $cat, $matches, PREG_SET_ORDER, 0);
          $str .= '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" '.$matches[0][1].'><span itemprop="title">'.$matches[0][2].'</span></a></span>';
          if($key != ($len - 1)) $str .= ' / ';
        }
      } else {
        preg_match_all($re, $thelist, $matches, PREG_SET_ORDER, 0);
        $str = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" '.$matches[0][1].'><span itemprop="title">'.$matches[0][2].'</span></a></span>';
      }
      return $str;
    } else return $thelist;
}
add_filter('the_category','add_micro_to_category',10,3);

function get_excerpt(){
  $excerpt = get_the_excerpt();
  $excerpt = mb_substr($excerpt, 0, 250);
  return $excerpt;
}


/**
* Skip Email Sending if Robot fills a hidden field
* 
*/
function my_skip_mail($f){
    $submission = WPCF7_Submission::get_instance();
    $data = $submission->get_posted_data();
			if (!empty($data)) {
            	$robot_field_text = isset($data['robot_field']) ? $data['robot_field'] : "";
				if ($robot_field_text) {
                	return true;
            	}
                return false;
            }
            return false;
}
add_filter('wpcf7_skip_mail','my_skip_mail');


//add_action("wpcf7_before_send_mail", "wpcf7_check_for_robot");  
function wpcf7_check_for_robot ($wpcf7) {

    //$wpcf7 = WPCF7_ContactForm::get_current();

    $submission = WPCF7_Submission::get_instance();
    
    if ($submission) {
            $data = $submission->get_posted_data();
            if (!empty($data)) {
            	$robot_field_text = isset($data['robot_field']) ? $data['robot_field'] : "";
				if ($robot_field_text) {
                    $mail = $wpcf7->prop('mail');
                    $mail['body'] = "spam";
                    $wpcf7->set_properties(array(
                        "mail" => $mail
                    ));
                    $wpcf7->skip_mail = true;
            	}
            }
    }
    return $wpcf7;
}


## Функция для подсветки слов поиска в WordPress

add_filter('the_content', 'kama_search_backlight');
add_filter('the_excerpt', 'kama_search_backlight');
add_filter('the_title', 'kama_search_backlight');
function kama_search_backlight( $text ){
  // ------------ Настройки -----------
  $st1 = 'color: #000; background: #99ff66;';
  $st2 = 'color: #000; background: #ffcc66;';
  $st3 = 'color: #000; background: #99ccff;';
  $st4 = 'color: #000; background: #ff9999;';
  $st5 = 'color: #000; background: #FF7EFF;';

  // только для страниц поиска...
  if ( ! is_search() ) return $text;

  $query_terms = get_query_var('search_terms');
  if( empty($query_terms) ) $query_terms = array(get_query_var('s'));
  if( empty($query_terms) ) return $text;

  $n = 0;
  foreach( $query_terms as $term ){
    $n++;
    if ($n==1)    $style = $st1;
    elseif($n==2) $style = $st2;
    elseif($n==3) $style = $st3;
    elseif($n==4) $style = $st4;
    elseif($n==5) $style = $st5;

    $term = preg_quote( $term, '/' );
    $text = preg_replace("@(?<!<|</)($term)@iu","<span style='{$style}'>$1</span>",$text);
  }

  return $text;
}

//настройка поиска по сайту только в в категориях services,news
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('category_name','services,news');
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');

add_action( 'wp_footer', 'mycustom_wp_footer' );



// SVG Support

function cc_mime_types($mimes) {
   $mimes['svg'] = 'image/svg+xml';
   return $mimes;
 }
 add_filter('upload_mimes', 'cc_mime_types');
 function fix_svg_thumb_display() {
   echo '
   <style>
   td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
      width: 100% !important; 
      height: auto !important; 
   }
   </style>
   ';
 }
 add_action('admin_head', 'fix_svg_thumb_display');



 
function mycustom_wp_footer() {
?>
    <script type="text/javascript">
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if ( '382' == event.detail.contactFormId ) {
                //yaCounter47499343.reachGoal('form-main');
                ym(47499343, 'reachGoal', 'form-main');
                ga('send', 'event', 'submit', 'form-main');
            }
        }, false );
        
        $(document).on('click', '.ow-button-align-center', function(){
            ga('send', 'event', 'click', 'click-on-ask-question'); alert('Спасибо!');
        });
        
    </script>
    
<?php
}