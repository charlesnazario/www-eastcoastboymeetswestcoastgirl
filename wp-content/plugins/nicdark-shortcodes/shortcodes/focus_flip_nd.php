<?php

///////////////////////////////////////////////////////// FOCUS FLIP/////////////////////////////////////////
add_shortcode('focus_flip_nd', 'nicdark_shortcode_focus_flip');
function nicdark_shortcode_focus_flip($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'image' => '',
         'title' => '',
         'subtitle' => '',
         'icon' => '',
         'class' => ''
      ), $atts);

   $str = '';

   //if icon e subtitle
   $outputsubtitle = ( $atts['subtitle'] != '' ) ? '<div class="nicdark_space20"></div><h3 class="white">'.$atts['subtitle'].'</h3>' : '';
   $outputicon = ( $atts['icon'] != '' ) ? '<div class="nicdark_space20"></div><h2 class="white"><span class="nicdark_displaynone">.</span><i class="'.$atts['icon'].'"></i></h2>' : '';


  $imgsrc = wp_get_attachment_image_src($atts['image'],'large');
      
   $str .= '

        <!--start image-->
        <div class=" '.$atts['class'].' nicdark_focus percentage nicdark_relative nicdark_fadeinout nicdark_overflow">
                
              <img alt="" class="nicdark_focus nicdark_zoom_image" src="'.$imgsrc[0].'">
              
              <!--filter-->
              <div class="nicdark_fadein nicdark_filter grey nicdark_absolute nicdark_height100percentage nicdark_width_percentage100">  
              </div>
              <!--end filter-->
              
              <!--start content-->
              <div class="nicdark_fadeout  nicdark_bg_greydark nicdark_absolute nicdark_height100percentage nicdark_width_percentage100">
                  <div class="nicdark_absolute nicdark_display_table nicdark_height100percentage nicdark_width_percentage100">
                      <div class="nicdark_cell nicdark_vertical_middle">
                          <h1 class="white">'.$atts['title'].'</h1>
                          '.$outputsubtitle.'
                          '.$outputicon.'
                      </div>   
                  </div>   
              </div>
              <!--end content-->
              
          </div>
          <!--end image-->

   ';

   return apply_filters('uds_shortcode_out_filter', $str);
}

//vc
add_action( 'vc_before_init', 'nicdark_focus_flip' );
function nicdark_focus_flip() {
   vc_map( array(
      "name" => __( "Focus Flip", "nicdark-shortcodes" ),
      "base" => "focus_flip_nd",
      'description' => __( 'Add single focus flip', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/focus_flip.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

        array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'nicdark-shortcodes' ),
            'param_name' => 'image',
            'admin_label' => true,
            'value' => '',
            'description' => __( 'Select image from media library.', 'nicdark-shortcodes' )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nicdark-shortcodes" ),
            "param_name" => "title",
            'value' => '',
            "description" => __( "Insert the title", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Subtitle", "nicdark-shortcodes" ),
            "param_name" => "subtitle",
            'value' => '',
            "description" => __( "Insert the subtitle", "nicdark-shortcodes" )
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
            "heading" => __( "Custom class", "nicdark-shortcodes" ),
            "param_name" => "class",
            'value' => '',
            "description" => __( "Insert custom class", "nicdark-shortcodes" )
         )

      )
   ) );
}
//end shortcode