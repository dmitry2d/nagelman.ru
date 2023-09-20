<?php
/**
 * News List
 * 
 */
?>

<?php
global $post;
$args = array(
    'posts_per_page' => 3,
    'offset'=> 0,
    'category' => 7,
    'exclude'  => array(get_the_id()),
);
$items = get_posts( $args );
foreach ( $items as $item ):
    $post = get_post($item);
    setup_postdata( $GLOBALS['post'] =& $post );
    get_template_part ('new/section', 'news-item');
    // reset_post_data();
endforeach;
?>