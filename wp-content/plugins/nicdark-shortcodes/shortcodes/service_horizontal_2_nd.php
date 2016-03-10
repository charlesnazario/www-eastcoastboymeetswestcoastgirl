<?php

/////////////////////////////////////////////////////////service HORIZONTAL/////////////////////////////////////////
add_shortcode('service_horizontal_2_nd', 'nicdark_shortcode_service_horizontal_2');
function nicdark_shortcode_service_horizontal_2($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'title' => '',
         'description' => '',
         'imgicon' => '',
         'class' => ''
      ), $atts);

   $str = '';


   $imgicon = wp_get_attachment_image_src($atts['imgicon']);


   $str .= '

   
    <div class="'.$atts['class'].' nicdark_activity nicdark_relative">
                  
        <img class="nicdark_width_fix_60 nicdark_absolute_left nicdark_absolute" alt="" src="'.$imgicon[0].'">
        
        <!--descr-->
        <div class="nicdark_activity nicdark_marginleft110">
            <h3>'.$atts['title'].'</h3>                        
            <div class="nicdark_space20"></div>
            <p class="nicdark_paddingright20">'.$atts['description'].'</p>
        </div>
        <!--end descr-->

    </div>


   ';

   return apply_filters('uds_shortcode_out_filter', $str);
}

//vc
add_action( 'vc_before_init', 'nicdark_service_horizontal_2' );
function nicdark_service_horizontal_2() {
   vc_map( array(
      "name" => __( "Service Horizontal", "nicdark-shortcodes" ),
      "base" => "service_horizontal_2_nd",
      'description' => __( 'Add single service', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/service_horizontal_2.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nicdark-shortcodes" ),
            "param_name" => "title",
            'admin_label' => true,
            "description" => __( "Insert the title", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textarea",
            "class" => "",
            "heading" => __( "Description", "nicdark-shortcodes" ),
            "param_name" => "description",
            "description" => __( "Insert the description", "nicdark-shortcodes" )
         ),
        array(
            'type' => 'attach_image',
            'heading' => __( 'Icon Image', 'js_composer' ),
            'param_name' => 'imgicon',
            'description' => __( 'Select image from media library.', 'js_composer' )
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