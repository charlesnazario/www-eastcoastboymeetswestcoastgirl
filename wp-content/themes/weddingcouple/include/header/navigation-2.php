<!--start top header-->
<div class="nicdark_displaynone_iphoneland nicdark_displaynone_ipadpotr nicdark_displaynone_iphonepotr nicdark_section nicdark_bg_white">
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12 percentage">
                
                <div class="nicdark_space10"></div>

                <!--start logo-->
                <div class="grid_4">
                    <div class="nicdark_space5"></div>
                    <a href="<?php echo home_url(); ?>"><img alt="" src="<?php echo esc_url( $redux_demo['header_type2_logo']['url'] ); ?>"></a>
                </div>
                <!--end logo-->

                <?php echo $redux_demo['header_type2_content']; ?>
                
                <div class="nicdark_space10"></div>

        </div>

    </div>
    <!--end container-->

</div>
<!--end top header-->



<!--start menu-->
<div class="nicdark_menu_type_2 nicdark_section nicdark_bg_<?php echo $redux_demo['header_type_color']; ?>  fade-down">
    
    <!--start container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12 percentage">
                
            <div class="nicdark_space25 nicdark_displaynone_ipadpotr nicdark_displaynone_iphoneland nicdark_displaynone_iphonepotr"></div>

            
            <!--logo mobile-->
            <div class="nicdark_margintop20 nicdark_marginbottom20 nicdark_displaynone_desktop nicdark_displayblock_iphonepotr nicdark_displayblock_iphoneland nicdark_displayblock_ipadpotr nicdark_center nicdark_focus">
                <a href="<?php echo home_url(); ?>"><img alt="" src="<?php echo esc_url( $redux_demo['header_type2_logo_mobile']['url'] ); ?>"></a>
            </div>
            <!--end logo mobile-->

            <!--social-->
            <?php if ( $redux_demo['header_icon_social_1'] != "" ){ ?> <a target="_blank" href="<?php echo $redux_demo['header_link_social_1']; ?>" class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom   nicdark_marginright10 nicdark_bg_<?php echo $redux_demo['header_type_color']; ?>dark extrasmall  white right"><i class="<?php echo $redux_demo['header_icon_social_1']; ?>"></i></a>  <?php } ?>
            <?php if ( $redux_demo['header_icon_social_2'] != "" ){ ?> <a target="_blank" href="<?php echo $redux_demo['header_link_social_2']; ?>" class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom   nicdark_marginright20 nicdark_bg_<?php echo $redux_demo['header_type_color']; ?>dark extrasmall  white right"><i class="<?php echo $redux_demo['header_icon_social_2']; ?>"></i></a>  <?php } ?>
            <?php if ( $redux_demo['header_icon_social_3'] != "" ){ ?> <a target="_blank" href="<?php echo $redux_demo['header_link_social_3']; ?>" class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom   nicdark_marginright20 nicdark_bg_<?php echo $redux_demo['header_type_color']; ?>dark extrasmall  white right"><i class="<?php echo $redux_demo['header_icon_social_3']; ?>"></i></a>  <?php } ?>
            <?php if ( $redux_demo['header_icon_social_4'] != "" ){ ?> <a target="_blank" href="<?php echo $redux_demo['header_link_social_4']; ?>" class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom   nicdark_marginright20 nicdark_bg_<?php echo $redux_demo['header_type_color']; ?>dark extrasmall  white right"><i class="<?php echo $redux_demo['header_icon_social_4']; ?>"></i></a>  <?php } ?>
            <?php if ( $redux_demo['header_icon_social_5'] != "" ){ ?> <a target="_blank" href="<?php echo $redux_demo['header_link_social_5']; ?>" class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom   nicdark_marginright20 nicdark_bg_<?php echo $redux_demo['header_type_color']; ?>dark extrasmall  white right"><i class="<?php echo $redux_demo['header_icon_social_5']; ?>"></i></a>  <?php } ?>
            <!--end social-->

            <!--start menu-->
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <!--end menu--> 

            <div class="nicdark_space25"></div>

        </div>

    </div>
    <!--end container-->

</div>
<!--end menu-->