<?php

/////////////////////////////////////////////////////////FOCUS IMAGE/////////////////////////////////////////
add_shortcode('focus_image_nd', 'nicdark_shortcode_focus_image');
function nicdark_shortcode_focus_image($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'title' => '',
         'image' => '',
         'link' => '',
         'openpopup' => '',
         'class' => ''
      ), $atts);

   $str = '';

   $outputopenpopup = ( $atts['openpopup'] == 'yes' ) ? 'nicdark_mpopup_iframe' : '';

  //target if
  $atts['link'] = vc_build_link( $atts['link'] );
  $a_href = $atts['link']['url'];
  $a_title = $atts['link']['title'];
  $a_target = ( $atts['link']['target'] != '' ) ? 'target= '.$atts['link']['target'].'; ' : '';

  $imgsrc = wp_get_attachment_image_src($atts['image'],'large');
      
   $str .= '

        <!--start image-->
        <div class=" '.$atts['class'].' nicdark_focus nicdark_relative nicdark_fadeinout nicdark_overflow">    

            <img alt="" class="nicdark_focus nicdark_zoom_image" src="'.$imgsrc[0].'">

            <!--filter-->
            <div class="nicdark_fadeout nicdark_filter grey nicdark_absolute nicdark_height100percentage nicdark_width_percentage100">  
            </div>
            <!--end filter-->

            <!--start content-->
            <div class="nicdark_fadein nicdark_filter greydark2 nicdark_absolute nicdark_height100percentage nicdark_width_percentage100">
                <div class="nicdark_absolute nicdark_display_table nicdark_height100percentage nicdark_width_percentage100">
                    <div class="nicdark_cell nicdark_vertical_middle">
                        <h1 class="signature extrasize white">'.$atts['title'].'</h1>
                        <div class="nicdark_space20"></div>
                        <h4><span class="nicdark_displaynone">.</span><a '.$a_target.' class="nicdark_outline white '.$outputopenpopup.' " href="'.$a_href.'">'.$a_title.'</a></h4>
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
add_action( 'vc_before_init', 'nicdark_focus_image' );
function nicdark_focus_image() {
   vc_map( array(
      "name" => __( "Focus Image", "nicdark-shortcodes" ),
      "base" => "focus_image_nd",
      'description' => __( 'Add single focus image', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/focus_image.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nicdark-shortcodes" ),
            "param_name" => "title",
            'admin_label' => true,
            "value" => __( "TITLE", "nicdark-shortcodes" ),
            "description" => __( "Insert the title", "nicdark-shortcodes" )
         ),

         array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'nicdark-shortcodes' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library.', 'nicdark-shortcodes' )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link",
          'param_name' => 'link',
          'value' => '',
          'description' => __( "Insert link", "nicdark-shortcodes" )
         ),
         array(
            'type' => 'checkbox',
            'heading' => __( 'Open your link on PopUp', 'nicdark-shortcodes' ),
            'param_name' => 'openpopup',
            'description' => __( 'Check it for open your link on popup', 'nicdark-shortcodes' ),
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