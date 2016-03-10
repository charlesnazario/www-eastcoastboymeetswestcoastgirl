<?php

/////////////////////////////////////////////////////////IMAGE GALLERY/////////////////////////////////////////
add_shortcode('image_gallery_nd', 'nicdark_shortcode_image_gallery');
function nicdark_shortcode_image_gallery($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'title' => '',
         'image' => '',
         'link_text' => '',
         'class' => ''
      ), $atts);

   $str = '';


  $imgsrc = wp_get_attachment_image_src($atts['image'],'large');
      
   $str .= '

        <!--start image-->
        <div class=" '.$atts['class'].' nicdark_focus percentage nicdark_relative nicdark_fadeinout nicdark_overflow">
                
              <img alt="" class="nicdark_focus nicdark_zoom_image" src="'.$imgsrc[0].'">
              
              <!--filter-->
              <div class="nicdark_fadeout nicdark_filter grey nicdark_absolute nicdark_height100percentage nicdark_width_percentage100">  
              </div>
              <!--end filter-->
              
              <!--start content-->
              <div class="nicdark_fadein nicdark_filter greydark2 nicdark_absolute nicdark_height100percentage nicdark_width_percentage100">
                  <div class="nicdark_absolute nicdark_display_table nicdark_height100percentage nicdark_width_percentage100">
                      <div class="nicdark_cell nicdark_vertical_middle">
                          <h4 class="white"><strong>'.$atts['title'].'</strong></h4>
                          <div class="nicdark_space10"></div>
                          <a href="'.$imgsrc[0].'" class="nicdark_outline nicdark_btn  title white small">'.$atts['link_text'].'</a>
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
add_action( 'vc_before_init', 'nicdark_image_gallery' );
function nicdark_image_gallery() {
   vc_map( array(
      "name" => __( "Image Gallery", "nicdark-shortcodes" ),
      "base" => "image_gallery_nd",
      'description' => __( 'Add single gallery image', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/image_gallery.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nicdark-shortcodes" ),
            "param_name" => "title",
            'admin_label' => true,
            'value' => '',
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
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Button Text", "nicdark-shortcodes" ),
            "param_name" => "link_text",
            'value' => '',
            "description" => __( "Insert custom text for your button", "nicdark-shortcodes" )
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