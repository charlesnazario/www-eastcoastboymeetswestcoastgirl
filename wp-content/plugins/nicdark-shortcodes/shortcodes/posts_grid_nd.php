<?php


/////////////////////////////////////////////////////////posts grid/////////////////////////////////////////
add_shortcode('posts_grid_nd', 'nicdark_shortcode_posts_grid');
function nicdark_shortcode_posts_grid($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'post_grid_type' => '',
         'post_grid_number' => '',
         'post_grid_columns' => '',
         'post_grid_order' => '',
         'post_grid_orderby' => '',
         'post_grid_postid' => '',

          //for post
         'post_grid_posts_layout' => '',
         'post_grid_categories' => '',
         'show_filter' => ''
         
      ), $atts);



    $args = array(
      'post_type' => ''.$atts['post_grid_type'].'',
      'posts_per_page' => $atts['post_grid_number'],
      'orderby' => $atts['post_grid_orderby'],
      'order' => ''.$atts['post_grid_order'].'',
      'p' => $atts['post_grid_postid'],
      'category_name' => ''.$atts['post_grid_categories'].''
    );

    $the_query = new WP_Query( $args );

    if ( $atts['post_grid_type'] == 'post' ) { include 'query/post_query.php';  }

    wp_reset_postdata();


   return apply_filters('uds_shortcode_out_filter', $str);
}


//vc
add_action( 'vc_before_init', 'nicdark_posts_grid' );
function nicdark_posts_grid() {
   vc_map( array(
      "name" => __( "Posts Grid", "nicdark-shortcodes" ),
      "base" => "posts_grid_nd",
      'description' => __( 'Insert Posts Grid', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/posts_grid.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

         array(
         'type' => 'dropdown',
          'heading' => "Post Type",
          'param_name' => 'post_grid_type',
          'admin_label' => true,
          'value' => array( "select", "post" ),
          'description' => __( "Choose the post type", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Posts per page ", "nicdark-shortcodes" ),
            "param_name" => "post_grid_number",
            "description" => __( "Insert the number of posts that you want to show. E.g. 4. Leave empty for show the default settings of WP (Settings -> Reading), -1 for view all posts", "nicdark-shortcodes" )
         ),
         array(
         'type' => 'dropdown',
          'heading' => "Order By",
          'param_name' => 'post_grid_orderby',
          'value' => array( "select", "date", "title", "rand", "modified" ),
          'description' => __( "Choose the order of the visualization", "nicdark-shortcodes" )
         ),
         array(
         'type' => 'dropdown',
          'heading' => "Order",
          'param_name' => 'post_grid_order',
          'value' => array( "select", "DESC", "ASC" ),
          'description' => __( "Choose the type order", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Specific Post ID ", "nicdark-shortcodes" ),
            "param_name" => "post_grid_postid",
            "description" => __( "If you want, insert the ID of your post, need for ONLY one post. E.g. 38", "nicdark-shortcodes" )
         ),
         array(
         'type' => 'dropdown',
          'heading' => "Columns",
          'param_name' => 'post_grid_columns',
          'admin_label' => true,
          'value' => array( __( 'select', 'nicdark-shortcodes' ) => 'select_field' ,  __( '4 Columns', 'nicdark-shortcodes' ) => 'grid_3', __( '3 Columns', 'nicdark-shortcodes' ) => 'grid_4', __( '2 Columns', 'nicdark-shortcodes' ) => 'grid_6', __( '1 Column', 'nicdark-shortcodes' ) => 'grid_12' ),
          'description' => __( "Choose columns style", "nicdark-shortcodes" )
         ),



         //post
         array(
         'type' => 'dropdown',
          'heading' => "Preview Layout",
          'param_name' => 'post_grid_posts_layout',
          'value' => array(  __( 'select', 'nicdark-shortcodes' ) => 'select_field' , __( 'Layout 1', 'nicdark-shortcodes' ) => 'post_layout_1', __( 'Layout 2', 'nicdark-shortcodes' ) => 'post_layout_2', __( 'Layout 3', 'nicdark-shortcodes' ) => 'post_layout_3' ),
          'dependency' => array( 'element' => 'post_grid_type', 'value' => array( 'post' ) ),
          'description' => __( "Choose your preview layout for posts", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Categories ", "nicdark-shortcodes" ),
            "param_name" => "post_grid_categories",
            'dependency' => array( 'element' => 'post_grid_type', 'value' => array( 'post' ) ),
            "description" => __( "Insert the category slug (NOT NAME) separated by comma without space. E.g. category1,category2,category3", "nicdark-shortcodes" )
         ),

         array(
            'type' => 'checkbox',
            'heading' => "Show Filter",
            'param_name' => 'show_filter',
            'value' => array( __( '', 'nicdark-shortcodes' ) => '1' ),
            'dependency' => array( 'element' => 'post_grid_type', 'value' => array( 'post' ) ),
            'description' => __( "Show all categories for filter.", "nicdark-shortcodes" )  
          )

      )
   ) );
}
//end shortcode