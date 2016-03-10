<!--start header-->
<div class="nicdark_menu_type_1 nicdark_section nicdark_borderbottom_grey nicdark_bg_grey <?php if ($redux_demo['metabox_pages_header_menu_transparent'] == 1) { ?> nicdark_transparent_navigation <?php } ?>  <?php if ($redux_demo['metabox_posts_header_menu_transparent'] == 1) { ?> nicdark_transparent_navigation <?php } ?>  <?php if ($redux_demo['archive_post_header_transparent_menu'] == 1) { ?> nicdark_transparent_navigation <?php } ?>">
    
    <!--start container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12 percentage nicdark_menu_center">
                
            <div class="nicdark_space25"></div>

            <!--start menu-->
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <!--end menu-->    
        
            <div class="nicdark_space25"></div>

        </div>

    </div>
    <!--end container-->

</div>
<!--end header-->