<?php

/////////////////////////////////////////////////////////FOCUS TIME/////////////////////////////////////////
add_shortcode('focus_time_nd', 'nicdark_shortcode_focus_time');
function nicdark_shortcode_focus_time($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'title' => '',
         'description' => '',
         'icon' => '',
         'label' => '',
         'color' => '',
         'border' => '',
         'link' => '',
         'class' => ''
      ), $atts);

   $str = '';


   //extract link
    $atts['link'] = vc_build_link( $atts['link'] );
    $a_href = $atts['link']['url'];
    $a_title = $atts['link']['title'];
    $a_target = $atts['link']['target'];

    $a_target = ( $atts['link']['target'] != '' ) ? 'target= '.$atts['link']['target'].'; ' : '';

    $outputborder = ( $atts['border'] == 'yes' ) ? 'nicdark_vertical_border_focus_time' : '';

    //if icon
    $outputicon = ( $atts['icon'] != '' ) ? '<i class="'.$atts['icon'].'"></i>' : '';

    //if link
    $outputtitle = ( $a_href != '' ) ? '<h3><a class="title" '.$a_target.' href="'.$a_href.'">'.$atts['title'].'</a></h3> ' : '<h3>'.$atts['title'].'</h3> ';

  $str .= '

    <div class=" '.$atts['class'].' nicdark_textevidence nicdark_relative nicdark_padding20 nicdark_sizing '.$outputborder.'">

        <a style="background-color:'.$atts['color'].';" '.$a_target.' href="'.$a_href.'" class="nicdark_displaynone_responsive nicdark_radius nicdark_width80 nicdark_marginleft20 nicdark_btn nicdark_absolute title small white">'.$outputicon.''.$atts['label'].'</a>

        <div class="nicdark_activity nicdark_marginleft140 nicdark_disable_marginleft_responsive ">
            
            '.$outputtitle.'

            <div class="nicdark_space20"></div>
            <p>'.$atts['description'].'</p> 
        </div>
    </div>

  ';


   return apply_filters('uds_shortcode_out_filter', $str);
}

//vc
add_action( 'vc_before_init', 'nicdark_focus_time' );
function nicdark_focus_time() {
   vc_map( array(
      "name" => __( "Focus Time", "nicdark-shortcodes" ),
      "base" => "focus_time_nd",
      'description' => __( 'Add single focus time', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/focus_time.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nicdark-shortcodes" ),
            "param_name" => "title",
            'admin_label' => true,
            "value" => __( "", "nicdark-shortcodes" ),
            "description" => __( "Insert the title", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textarea",
            "class" => "",
            "heading" => __( "Description", "nicdark-shortcodes" ),
            "param_name" => "description",
            "value" => __( "", "nicdark-shortcodes" ),
            "description" => __( "Insert the description", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Icon Code", "nicdark-shortcodes" ),
            "param_name" => "icon",
            "value" => __( "", "nicdark-shortcodes" ),
            'description' => __( "Insert icon code e.g. icon-diamond <a target='_blank' href='http://www.nicdarkthemes.com/themes/wedding-couple/wp/demo/icons.php'>Set 1</a> , <a target='_blank' href='http://www.nicdarkthemes.com/themes/wedding-couple/wp/demo/icons-2.php'>Set 2</a>", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Label Text", "nicdark-shortcodes" ),
            "param_name" => "label",
            "value" => __( "", "nicdark-shortcodes" ),
            'description' => __( "Insert text label", "nicdark-shortcodes" )
         ),
         array(
            'type' => 'colorpicker',
            'heading' => __( 'Label Color', 'js_composer' ),
            'param_name' => 'color',
            'description' => __( 'Select the label color. E.g. #c38e9e', 'nicdark-shortcodes' )
         ),
         array(
           'type' => 'vc_link',
            'heading' => "Label Link",
            'param_name' => 'link',
            'value' => '',
            'description' => __( "Insert the link on label", "nicdark-shortcodes" )
         ),
         array(
            'type' => 'checkbox',
            'heading' => __( 'Add Dashed Line', 'nicdark-shortcodes' ),
            'param_name' => 'border',
            'description' => __( 'Add Dashed Vertical Line', 'nicdark-shortcodes' ),
            'value' => array(
              __( '', 'nicdark-shortcodes' ) => 'yes'
            )
          ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Custom class", "nicdark-shortcodes" ),
            "param_name" => "class",
            "value" => __( "", "nicdark-shortcodes" ),
            "description" => __( "Insert custom class", "nicdark-shortcodes" )
         )
      )
   ) );
}
//end shortcode