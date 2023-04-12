<?php

/**
 * Returns the parsed shortcode.
 *
 * @param array   {
 *     Attributes of the shortcode.
 *
 *     @type string $id ID of...
 * }
 * @param string  Shortcode content.
 *
 * @return string HTML content to display the shortcode.
 */
// function shortcode_accordion( $atts = array(), $content = '' ) {
//   $atts = shortcode_atts( array(
//     'id' => '1',
//     'class' => ''
//   ), $atts, 'accordion' );

//   return '<div id="accordion-'.$atts['id'].'" class="'.$atts['class'].'">'.do_shortcode($content).'</div>'.
//   	'<script type="text/javascript">
//         $(function(){
//             $( "#accordion-'.$atts['id'].'" ).accordion();
//           });
//       </script>';
// }
// add_shortcode( 'accordion', 'shortcode_accordion' );

// function shortcode_accordion_item( $atts = array(), $content = '' ) {
//   $atts = shortcode_atts( array(
//     'title' => 'Вкладка',
//     'class' => ''
//   ), $atts, 'accordion_item' );

//   return '<h3>'.$atts['title'].'</h3><div class="'.$atts['class'].'">'. do_shortcode($content) .'</div>';
// }
// add_shortcode( 'accordion_item', 'shortcode_accordion_item' );
