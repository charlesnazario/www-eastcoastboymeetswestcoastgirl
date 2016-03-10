<?php

/////////////////////////////////////////////////////////BUTTON ICON/////////////////////////////////////////
add_shortcode('button_icon_nd', 'nicdark_shortcode_button_icon');
function nicdark_shortcode_button_icon($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'link' => '',
         'icon' => '',
         'size' => '',
         'textcolor' => '',
         'bgcolor' => '',
         'bordercolor' => '',
         'align' => '',
         'class' => '',
      ), $atts);

   $str = '';


    //extract link
    $atts['link'] = vc_build_link( $atts['link'] );
    $a_href = $atts['link']['url'];
    $a_title = $atts['link']['title'];
    $a_target = ( $atts['link']['target'] != '' ) ? 'target= '.$atts['link']['target'].'; ' : '';

    //color
    $outputtextcolor = ( $atts['textcolor'] != '' ) ? 'color: '.$atts['textcolor'].'; ' : '';
    $outputbgcolor = ( $atts['bgcolor'] != '' ) ? 'background-color: '.$atts['bgcolor'].'; ' : '';
    $outputbordercolor = ( $atts['bordercolor'] != '' ) ? 'border: 1px solid '.$atts['bordercolor'].'; ' : '';
    $outputcolor = 'style=" '.$outputtextcolor.' '.$outputbgcolor.' '.$outputbordercolor.'  "';

    //icon
    $outputicon = ( $atts['icon'] != '' ) ? ' <i class="'.$atts['icon'].'"></i> ' : '';
    $outputclassiconorbtn = ( $a_title == '' ) ? ' nicdark_btn_icon ' : ' nicdark_btn ';

    $str .= '<a '.$a_target.' '.$outputcolor.' href="'.$a_href.'" class=" '.$atts['class'].' '.$atts['align'].' nicdark_outline '.$outputclassiconorbtn.' '.$atts['size'].' title">'.$outputicon.''.$a_title.'</a>';


   return apply_filters('uds_shortcode_out_filter', $str);
}

//vc
add_action( 'vc_before_init', 'nicdark_button_icon' );
function nicdark_button_icon() {
   vc_map( array(
      "name" => __( "Button and Icon", "nicdark-shortcodes" ),
      "base" => "button_icon_nd",
      'description' => __( 'Add single button', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/button.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

        array(
         'type' => 'vc_link',
          'heading' => "Link",
          'param_name' => 'link',
          'value' => '',
          'description' => __( "Insert link", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Icon Code", "nicdark-shortcodes" ),
            "param_name" => "icon",
            'description' => __( "Insert icon code e.g. icon-diamond <a target='_blank' href='http://www.nicdarkthemes.com/themes/wedding-couple/wp/demo/icons.php'>Set 1</a> , <a target='_blank' href='http://www.nicdarkthemes.com/themes/wedding-couple/wp/demo/icons-2.php'>Set 2</a>", "nicdark-shortcodes" )
         ),
         array(
          'type' => 'dropdown',
          'heading' => "Size",
          'param_name' => 'size',
          'value' => array( "size", "small", "medium", "big" ),
          'description' => __( "Select your size", "nicdark-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Text color", "nicdark-shortcodes" ),
            "param_name" => "textcolor",
            "description" => __( "Choose color for your text", "nicdark-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Background color", "nicdark-shortcodes" ),
            "param_name" => "bgcolor",
            "description" => __( "Choose color for your background", "nicdark-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Border color", "nicdark-shortcodes" ),
            "param_name" => "bordercolor",
            "description" => __( "Choose color for your border", "nicdark-shortcodes" )
         ),
         array(
          'type' => 'dropdown',
          'heading' => "Align",
          'param_name' => 'align',
          'value' => array( "align", "left", "right" ),
          'description' => __( "Select your alignment, for center it please add the class 'nicdark_center' in the column class setting", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Custom class", "nicdark-shortcodes" ),
            "param_name" => "class",
            "description" => __( "Insert custom class", "nicdark-shortcodes" )
         )
         


      )
   ) );
}
//end shortcode