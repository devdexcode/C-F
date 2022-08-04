<?php 
$layout      = get_field('layout');
$id          = get_the_ID();
$row_layouts = array('big_image','big_text','big_section', 'image_with_text_1','two_columns_text','slider_section_1','slider_section_2','two_columns_headings_with_an_image','headings_with_links','open_venues','heading_image_and_description','big_image','team_section','headings_and_image_rows','heading_image_and_description_2','services_section','celibrate_outside','testimonials_section','contact_form_section_1','title_with_background_image','big_heading_image_with_text','events_section','text_image_columns','special_heading_with_big_text','call_to_action_1','call_to_action_2','call_to_action_3','call_to_action_4','call_to_action_5','special_section','special_section_2','special_section_3','special_section_4');
 
if( have_rows('layout', $id) ):
    while ( have_rows('layout', $id) ) : the_row();
        if( in_array(get_row_layout() , $row_layouts) ):
            include('components/'.get_row_layout().'.php'); 
        endif;
    endwhile;
else :
endif;
?>