<?php get_header();?> <?php global $options;
// global $social_arr;
?><?php if (have_posts()): while (have_posts()): the_post();?>
<section id="heading-text" style="background-color: #F4F7F4;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex">
                    <a  id="myBtn">WORK
                        <div class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M8.25 18.3334L15.5833 11L8.25 3.66671" stroke="#AF663F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                    </a>
                    <div class="span">
                    <?php 
        $id = get_the_ID();
        $term_obj_list = get_the_terms( $id, 'work_category' ); ?>
   <?php foreach($term_obj_list as $tax): ?> 
             <a id="myBtn"><?=$tax->name?></a>
    <?php endforeach;?>
                </div>
                </div>
            </div>
                <div class="col-md-8">
                    <h1><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="imagesection" <?php if (has_post_thumbnail()) {?> style="background:url('<?=get_the_post_thumbnail_url();?>');background-repeat:no-repeat;background-size: cover;" <?php }?>></section>

<?php
$row_layouts = array('services_section', 'standalone_image', 'three_images_section','big_image');
 
if( have_rows('work_fields', $id) ):
    while ( have_rows('work_fields', $id) ) : the_row();
        if( in_array(get_row_layout() , $row_layouts) ):
            include('Templates/components/work/'.get_row_layout().'.php'); 
        endif;
    endwhile;
else :
endif;
?>
    <?php endwhile;
endif;
?><?php $img = get_template_directory_uri().'/images/edit.png'; $edit = "<img title='Edit this page' src='".$img."'>"; edit_post_link($edit, '');?>
    <?php get_footer();?>