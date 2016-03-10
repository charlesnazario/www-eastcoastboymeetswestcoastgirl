<?php


vc_set_as_theme( $disable_updater = true );

//STRUCTURE
vc_remove_element( "vc_raw_html" );
vc_remove_element( "vc_raw_js" );

//DEPRECATED
vc_remove_element( "vc_button2" );
vc_remove_element( "vc_button" );
vc_remove_element( "vc_cta_button" );
vc_remove_element( "vc_cta_button2" );
vc_remove_element( "vc_tabs" );
vc_remove_element( "vc_tour" );
vc_remove_element( "vc_accordion" );

//CONTENT
vc_remove_element( "vc_separator" );
vc_remove_element( "vc_text_separator" );
vc_remove_element( "vc_message" );
vc_remove_element( "vc_toggle" );
vc_remove_element( "vc_tta_accordion" );
vc_remove_element( "vc_tta_tour" );
vc_remove_element( "vc_posts_slider" );
vc_remove_element( "vc_images_carousel" );
vc_remove_element( "vc_gallery" );
vc_remove_element( "vc_custom_heading" );
vc_remove_element( "vc_cta" );
vc_remove_element( "vc_btn" );
vc_remove_element( "vc_icon" );
vc_remove_element( "vc_tta_pageable" );


//GRID
vc_remove_element( "vc_basic_grid" );
vc_remove_element( "vc_media_grid" );
vc_remove_element( "vc_masonry_grid" );
vc_remove_element( "vc_masonry_media_grid" );


//CHART
vc_remove_element( "vc_progress_bar" );
vc_remove_element( "vc_pie" );
vc_remove_element( "vc_round_chart" );
vc_remove_element( "vc_line_chart" );

//SOCIAL
vc_remove_element( "vc_flickr" );
vc_remove_element( "vc_facebook" );
vc_remove_element( "vc_tweetmeme" );
vc_remove_element( "vc_googleplus" );
vc_remove_element( "vc_pinterest" );



////////////////////////////////////EDIT ROW////////////////////////////////////

//remove param
vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "parallax" );
vc_remove_param( "vc_row", "el_id" );
vc_remove_param( "vc_row", "parallax_image" );

//add row param
vc_add_param("vc_row", array(
  'type' => 'textfield',
  'heading' => __( 'Section ID', 'weddingcouple' ),
  'param_name' => 'idsection',
  'description' => __( 'Insert section ID for anchor link. E.g. my_section_id_1', 'weddingcouple' )
));
vc_add_param("vc_row", array(
   'type' => 'dropdown',
    'heading' => "Style",
    'param_name' => 'row_style',
    'value' => array( "container", "full_width" ),
    'description' => __( "Choose the style for the row", "weddingcouple" )
));
//add row param
vc_add_param("vc_row", array(
  'type' => 'dropdown',
  'heading' => __( 'Parallax', 'weddingcouple' ),
  'param_name' => 'imgparallax',
  'value' => array(
    __( 'No', 'weddingcouple' ) => 'no',
    __( 'Yes', 'weddingcouple' ) => 'yes'
  ),
  'description' => __( 'Set the image in Design Options Tab', 'weddingcouple' )
));
vc_add_param("vc_row", array(
  'type' => 'textfield',
  'heading' => __( 'ID for parallax', 'weddingcouple' ),
  'param_name' => 'idparallax',
  'description' => __( 'Insert parallax ID name. E.g. my_first_parallax_1', 'weddingcouple' ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
vc_add_param("vc_row", array(
  'type' => 'attach_image',
  'heading' => __( 'Image Parallax', 'js_composer' ),
  'param_name' => 'srcparallax',
  'value' => '',
  'description' => __( 'Select image from media library.', 'js_composer' ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
vc_add_param("vc_row", array(
  'type' => 'dropdown',
  'heading' => __( 'Color Filter', 'weddingcouple' ),
  'param_name' => 'filter',
  'description' => __( 'Choose color filter', 'weddingcouple' ),
  'value' => array( "none", "greydark", "greydark2" ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));



vc_add_param("vc_row_inner", array(
  'type' => 'textfield',
  'heading' => __( 'Section ID', 'weddingcouple' ),
  'param_name' => 'idsection',
  'description' => __( 'Insert section ID for anchor link. E.g. my_section_id_1', 'weddingcouple' )
));
vc_add_param("vc_row_inner", array(
   'type' => 'dropdown',
    'heading' => "Style",
    'param_name' => 'row_style',
    'value' => array( "full_width", "container" ),
    'description' => __( "Choose the style for the row", "weddingcouple" )
));
vc_add_param("vc_row_inner", array(
  'type' => 'dropdown',
  'heading' => __( 'Parallax', 'weddingcouple' ),
  'param_name' => 'imgparallax',
  'value' => array(
    __( 'No', 'weddingcouple' ) => 'no',
    __( 'Yes', 'weddingcouple' ) => 'yes'
  ),
  'description' => __( 'Set the image in Design Options Tab', 'weddingcouple' )
));
vc_add_param("vc_row_inner", array(
  'type' => 'textfield',
  'heading' => __( 'ID for parallax', 'weddingcouple' ),
  'param_name' => 'idparallax',
  'description' => __( 'Insert parallax ID name. E.g. my_first_parallax_1', 'weddingcouple' ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
vc_add_param("vc_row_inner", array(
  'type' => 'attach_image',
  'heading' => __( 'Image Parallax', 'js_composer' ),
  'param_name' => 'srcparallax',
  'value' => '',
  'description' => __( 'Select image from media library.', 'js_composer' ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
vc_add_param("vc_row_inner", array(
  'type' => 'dropdown',
  'heading' => __( 'Color Filter', 'weddingcouple' ),
  'param_name' => 'filter',
  'description' => __( 'Choose color filter', 'weddingcouple' ),
  'value' => array( "none", "greydark", "greydark2" ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
//remove param
vc_remove_param( "vc_row", "font_color" );
vc_remove_param( "vc_row_inner", "el_id" );
vc_remove_param( "vc_row", "full_height" );
vc_remove_param( "vc_row", "video_bg" );
vc_remove_param( "vc_row", "content_placement" );
vc_remove_param( "vc_row", "video_bg_url" );
vc_remove_param( "vc_row", "video_bg_parallax" );



////////////////////////////////////EDIT MAP////////////////////////////////////

//remove param
vc_remove_param( "vc_gmaps", "title" );











