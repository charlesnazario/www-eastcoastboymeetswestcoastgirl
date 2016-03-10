<?php

/////////////////////////////////////////////////////////service HORIZONTAL/////////////////////////////////////////
add_shortcode('service_horizontal_nd', 'nicdark_shortcode_service_horizontal');
function nicdark_shortcode_service_horizontal($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'title' => '',
         'description_1' => '',
         'description_2' => '',
         'icon' => '',
         'service_layout' => '',
         'class' => ''
      ), $atts);

   $str = '';


if ( $atts['service_layout'] == 'service_2' ) {

  $str .= '
    <div class="nicdark_textevidence">
            
       <div class="nicdark_textevidence nicdark_relative '.$atts['class'].'">
            <h1 class="extrasize nicdark_displaynone_ipadpotr">
              <a class="nicdark_cursor_initial nicdark_btn_icon white nicdark_absolute">
                <span class="nicdark_displaynone">.</span>
                <i class="'.$atts['icon'].'"></i>
              </a>
            </h1>

            <div class="nicdark_activity nicdark_marginleft70">
                <h2 class="white">'.$atts['title'].'</h2>                        
                <div class="nicdark_space20"></div>
                <h4 class="white">'.$atts['description_1'].'</h4> 
                <div class="nicdark_space20"></div>
                <h4 class="white">'.$atts['description_2'].'</h4> 
            </div>
        </div>

    </div>
  ';

  }elseif ( $atts['service_layout'] == 'service_3' ){

  $str .= '
    <div class="nicdark_textevidence">
            
       <div class="nicdark_textevidence nicdark_relative '.$atts['class'].'">
            <h1 class="extrasize nicdark_displaynone_ipadpotr">
              <a class="nicdark_cursor_initial nicdark_btn_icon white nicdark_absolute">
                <span class="nicdark_displaynone">.</span>
                <i class="'.$atts['icon'].'"></i>
              </a>
            </h1>

            <div class="nicdark_activity nicdark_marginleft70">
                <h3 class="white">'.$atts['title'].'</h3>                        
                <div class="nicdark_space15"></div>
                <h1 class="white"><strong>'.$atts['description_1'].'</strong></h1> 
            </div>
        </div>

    </div>
  ';

  }else{

  $str .= '
    <div class="nicdark_textevidence">
            
       <div class="nicdark_textevidence nicdark_relative '.$atts['class'].'">
            <h1 class="extrasize nicdark_displaynone_ipadpotr">
              <a class="nicdark_cursor_initial nicdark_btn_icon white nicdark_absolute">
                <span class="nicdark_displaynone">.</span>
                <i class="'.$atts['icon'].'"></i>
              </a>
            </h1>

            <div class="nicdark_activity nicdark_marginleft70">
                <h1 class="white"><strong>'.$atts['title'].'</strong></h1>                        
                <div class="nicdark_space15"></div>
                <h3 class="white">'.$atts['description_1'].'</h3> 
            </div>
        </div>

    </div>
  ';

  }


   return apply_filters('uds_shortcode_out_filter', $str);
}

//vc
add_action( 'vc_before_init', 'nicdark_service_horizontal' );
function nicdark_service_horizontal() {
   vc_map( array(
      "name" => __( "Service Horizontal", "nicdark-shortcodes" ),
      "base" => "service_horizontal_nd",
      'description' => __( 'Add single service', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/service_horizontal.png",
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
            "heading" => __( "Description 1", "nicdark-shortcodes" ),
            "param_name" => "description_1",
            "value" => __( "", "nicdark-shortcodes" ),
            "description" => __( "Insert the first description", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textarea",
            "class" => "",
            "heading" => __( "Description 2", "nicdark-shortcodes" ),
            "param_name" => "description_2",
            "value" => __( "", "nicdark-shortcodes" ),
            "description" => __( "Insert the second description ( only for service_2 layout )", "nicdark-shortcodes" )
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
          'type' => 'dropdown',
          'heading' => "Service Layout",
          'param_name' => 'service_layout',
          'value' => array( "Select", "service_1", "service_2", "service_3" ),
          'description' => __( "Choose the layout for your service component:<br/>service_1 : h1 - h3<br/>service_2 : h2 - h4 - h4<br/>service_3 : h3 - h1", "nicdark-shortcodes" )
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