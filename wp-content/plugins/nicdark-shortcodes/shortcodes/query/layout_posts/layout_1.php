<?php

$str .= '

    <div style="box-sizing:border-box;" class="grid '.$atts['post_grid_columns'].' percentage nicdark_padding10 nicdark_masonry_item nicdark_width100_ipadpotr'; 

    foreach($categories as $category) {
      $str .= ' '.$category->category_nicename.' ';
    }

    $str .= '">
      

        <div class="nicdark_focus nicdark_padding40 nicdark_sizing" style="background-image:url('.$image_attributes[0].'); background-size:cover;">
            <div class="nicdark_focus nicdark_filter white nicdark_padding40 nicdark_sizing center">
                <h3 class="grey">'.$titlepost.'</h3>
                <div class="nicdark_space20"></div>
                <h5 class="grey"><strong>'.$datepost.'</strong></h5>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider center small"><span class="nicdark_bg_grey2 "></span></div>
                <div class="nicdark_space20"></div>
                <p>'.do_shortcode($excerptpost).'</p>
                <div class="nicdark_space20"></div>
                <a href="'.$permalink.'" class="nicdark_btn nicdark_border_grey nicdark_press nicdark_transition title medium grey">'.$nicdark_text_postquery_more.'</a>
            </div>
        </div>    

      
    </div>

';











