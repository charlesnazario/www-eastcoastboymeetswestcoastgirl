<?php

/////////////////////////////////////////////////////////countdown/////////////////////////////////////////
add_shortcode('countdown_nd', 'nicdark_shortcode_countdown');
function nicdark_shortcode_countdown($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'date' => '',
         'showd' => '',
         'showm' => '',
         'showh' => '',
         'shows' => '',
         'columns' => '',
         'colord' => '',
         'colorh' => '',
         'colorm' => '',
         'colors' => ''
      ), $atts);

   $str = '';

  //display fields
  $outputshowd = ( $atts['showd'] != 'yes' ) ? 'nicdark_displaynone' : '';
  $outputshowm = ( $atts['showm'] != 'yes' ) ? 'nicdark_displaynone' : '';
  $outputshowh = ( $atts['showh'] != 'yes' ) ? 'nicdark_displaynone' : '';
  $outputshows = ( $atts['shows'] != 'yes' ) ? 'nicdark_displaynone' : '';

  //start translate
  $nicdark_text_days = __('DAYS','nicdark-shortcodes');
  $nicdark_text_hours = __('HOURS','nicdark-shortcodes');
  $nicdark_text_minutes = __('MIN','nicdark-shortcodes');
  $nicdark_text_seconds = __('SEC','nicdark-shortcodes');
  //end translate

  $textcolor = "#fff";

  $script = '

    <script type="text/javascript">
    (function($) { "use strict"; 

      //variables
      var endDate = "'.$atts['date'].'";
      var grid = "'.$atts['columns'].' percentage";
      //insert the class nicdark_displaynone in the var if you wnat to hide the visualization
      var display_years = "nicdark_displaynone";
      var display_days = "'.$outputshowd.'";
      var display_hours = "'.$outputshowh.'";
      var display_minutes = "'.$outputshowm.'";
      var display_seconds = "'.$outputshows.'";
      //call
      $(".nicdark_countdown").countdown({
        date: endDate,
        render: function(data) {
          $(this.el).html("<div class=\"grid "+ grid +" "+ display_days +" nicdark_bg_'.$atts['colord'].' \"><div class=\"nicdark_textevidence center\"><div class=\"nicdark_space40\"></div><h1 style=\"color:'.$textcolor.'\" class=\" white extrasize\">"+ this.leadingZeros(data.days, 3) +"</h1><div class=\"nicdark_space10\"></div><h2 style=\"color:'.$textcolor.'\" class=\" white\">'.$nicdark_text_days.'</h2><div class=\"nicdark_space40\"></div></div></div><div class=\"grid "+ grid +" "+ display_hours +" nicdark_bg_'.$atts['colorh'].' \"><div class=\"nicdark_textevidence center\"><div class=\"nicdark_space40\"></div><h1 style=\"color:'.$textcolor.'\" class=\" white extrasize\">"+ this.leadingZeros(data.hours, 2) +"</h1><div class=\"nicdark_space10\"></div><h2 style=\"color:'.$textcolor.'\" class=\" white\">'.$nicdark_text_hours.'</h2><div class=\"nicdark_space40\"></div></div></div><div class=\"grid "+ grid +" "+ display_minutes +" nicdark_bg_'.$atts['colorm'].'  \"><div class=\"nicdark_textevidence center\"><div class=\"nicdark_space40\"></div><h1 style=\"color:'.$textcolor.'\" class=\" white extrasize\">"+ this.leadingZeros(data.min, 2) +"</h1><div class=\"nicdark_space10\"></div><h2 style=\"color:'.$textcolor.'\" class=\" white\">'.$nicdark_text_minutes.'</a><div class=\"nicdark_space40\"></div></div></div><div class=\"grid "+ grid +" "+ display_seconds +" nicdark_bg_'.$atts['colors'].' \"><div class=\"nicdark_textevidence center\"><div class=\"nicdark_space40\"></div><h1 style=\"color:'.$textcolor.'\" class=\" white extrasize\">"+ this.leadingZeros(data.sec, 2) +"</h1><div class=\"nicdark_space10\"></div><h2 style=\"color:'.$textcolor.'\" class=\" white\">'.$nicdark_text_seconds.'</h2><div class=\"nicdark_space40\"></div></div></div>");
        }
      });





    })(jQuery);
    </script>

  ';

  $str .= '<div class="nicdark_countdown"></div>'.$script.'';


  return apply_filters('uds_shortcode_out_filter', $str);
}

//vc
add_action( 'vc_before_init', 'nicdark_countdown' );
function nicdark_countdown() {
   vc_map( array(
      "name" => __( "Countdown", "nicdark-shortcodes" ),
      "base" => "countdown_nd",
      'description' => __( 'Add event countdown', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/countdown.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Date", "nicdark-shortcodes" ),
            "param_name" => "date",
            'admin_label' => true,
            "value" => __( "", "nicdark-shortcodes" ),
            "description" => __( "Insert the Date E.g. June 06, 2017", "nicdark-shortcodes" )
         ),
         array(
            'type' => 'checkbox',
            'heading' => __( 'Show Days', 'nicdark-shortcodes' ),
            'param_name' => 'showd',
            'description' => __( 'Check it for display days', 'nicdark-shortcodes' ),
            'value' => array(
              __( '', 'nicdark-shortcodes' ) => 'yes'
            )
          ),
         array(
            'type' => 'checkbox',
            'heading' => __( 'Show Hours', 'nicdark-shortcodes' ),
            'param_name' => 'showh',
            'description' => __( 'Check it for display hours', 'nicdark-shortcodes' ),
            'value' => array(
              __( '', 'nicdark-shortcodes' ) => 'yes'
            )
          ),
         array(
            'type' => 'checkbox',
            'heading' => __( 'Show Minutes', 'nicdark-shortcodes' ),
            'param_name' => 'showm',
            'description' => __( 'Check it for display minutes', 'nicdark-shortcodes' ),
            'value' => array(
              __( '', 'nicdark-shortcodes' ) => 'yes'
            )
          ),
         array(
            'type' => 'checkbox',
            'heading' => __( 'Show Seconds', 'nicdark-shortcodes' ),
            'param_name' => 'shows',
            'description' => __( 'Check it for display seconds', 'nicdark-shortcodes' ),
            'value' => array(
              __( '', 'nicdark-shortcodes' ) => 'yes'
            )
          ),
         array(
         'type' => 'dropdown',
          'heading' => "Columns",
          'param_name' => 'columns',
          'value' => array( __( 'Select Columns', 'nicdark-shortcodes' ) => 'grid_12', __( '4 Columns', 'nicdark-shortcodes' ) => 'grid_3', __( '3 Columns', 'nicdark-shortcodes' ) => 'grid_4', __( '2 Columns', 'nicdark-shortcodes' ) => 'grid_6', __( '1 Column', 'nicdark-shortcodes' ) => 'grid_12' ),
          'description' => __( "Choose columns style", "nicdark-shortcodes" )
         ),
         array(
          'type' => 'dropdown',
          'heading' => __( 'Choose Colors', 'nicdark-shortcodes' ),
          'param_name' => 'advancedcolor',
          'value' => array(
          __( 'No', 'nicdark-shortcodes' ) => 'no',
          __( 'Yes', 'nicdark-shortcodes' ) => 'yes'
          ),
          'description' => __( 'Choose "yes" for set the colors', 'nicdark-shortcodes' )
         ),
         array(
         'type' => 'dropdown',
          'heading' => "Bg Color Days",
          'param_name' => 'colord',
          'value' => array( "Select Colors", "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
          'description' => __( "Select your color", "nicdark-shortcodes" ),
          'dependency' => array( 'element' => 'advancedcolor', 'value' => array( 'yes' ) )
         ),
         array(
         'type' => 'dropdown',
          'heading' => "Bg Color Hours",
          'param_name' => 'colorh',
          'value' => array( "Select Colors", "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
          'description' => __( "Select your color", "nicdark-shortcodes" ),
          'dependency' => array( 'element' => 'advancedcolor', 'value' => array( 'yes' ) )
         ),
         array(
         'type' => 'dropdown',
          'heading' => "Bg Color Minutes",
          'param_name' => 'colorm',
          'value' => array( "Select Colors", "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
          'description' => __( "Select your color", "nicdark-shortcodes" ),
          'dependency' => array( 'element' => 'advancedcolor', 'value' => array( 'yes' ) )
         ),
         array(
         'type' => 'dropdown',
          'heading' => "Bg Color Seconds",
          'param_name' => 'colors',
          'value' => array( "Select Colors", "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
          'description' => __( "Select your color", "nicdark-shortcodes" ),
          'dependency' => array( 'element' => 'advancedcolor', 'value' => array( 'yes' ) )
         )

      )
   ) );
}
//end shortcode