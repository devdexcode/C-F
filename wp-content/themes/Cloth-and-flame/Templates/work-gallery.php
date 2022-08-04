<?php /* Template Name: Work Gallery*/ ?>
<?php get_header();?> 
<style>.titlelink{color:#221E15 !important;text-transform: uppercase;font-family: 'Founders Grotesk';}.trigger,.load_more{cursor: pointer;} .large-title {  font-family: 'Founders Grotesk';  font-style: normal;  font-weight: 400;  font-size: 27px;  line-height: 32px;  letter-spacing: 0.08em;  color: #221E15;  padding-top: 51px;}.card-text {  font-family: 'Founders Grotesk';  font-style: normal;  font-weight: 400;  font-size: 24px;  line-height: 40px;  letter-spacing: 0.02em;  color: #221E15;}</style>
<section id="threecol">
        <div class="container">
            <div class="row">
                <?php
                        $id = get_the_ID();
                        $taxonomies = get_terms([
                            'taxonomy' => 'work_category',
                            'hide_empty' => false,
                        ]);
                        ?>

                <!-- <div class="col-md-5 col-sm-3">
                    <h1>Previous Work</h1>
                </div> -->

                <?php foreach($taxonomies as $tax): ?> 
                    <?php //print_r($tax);?>
                    <div class="col-md-4  col-sm-4 col">
                        <h1 data-target="<?php echo $tax->slug?>" class="trigger"><?=$tax->name;?></h1>
                    </div>
                <?php endforeach;?>
               
            </div>
            <div class="d-flex justify-content-end">
                <div class="smtitle">SORT BY</div>
                <div class="dropdown d-flex">
                    <a class="button dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                        LATEST
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item latest" href="#">LATEST</a>
                        <a class="dropdown-item load_more" href="#">VIEW ALL</a>
                    </div>
                </div>
               
            </div>
            <div class="lie"></div>
    </section>
    <section id="img" style="background-color: #F4F7F4;">
        <div class="container">
        <div class="row">
    <?php $i =1;    
    $the_args = array( 'post_type' => 'work','posts_per_page' => -1, 'orderby' => 'ID', 'order' => $order);
    $query = new WP_Query($the_args);
     while ($query->have_posts()): $query->the_post(); 
        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
      <?php   
      $terms_assigned = "";
      $terms = get_the_terms($post->ID, 'work_category'); //print_r($terms);
      foreach($terms as $term){
        $terms_assigned = $term->slug;
      }
      ?>
      <?php 
          if($i == 1){ $the_class = 'col-md-12';}
          elseif($i == 2 || $i == 3){ $the_class = 'col-md-4'; }
          elseif($i == 4){ $the_class = 'col-md-8'; }
          elseif($i == 5){ $the_class = 'col-md-4'; }
          else{ $the_class = 'col-md-4'; }
        ?>
        <?php if($i == 2 ):?><div class="col-md-4"></div><?php endif;?>
        <div class="col target <?=$i==1 ? 'first':'';?> <?=$terms_assigned;?> position_<?=$i;?> <?php echo $the_class;?> mt-4 mb-4" data-position="<?=$i?>" id="item-<?=$i;?>" data-id="<?=$terms_assigned;?>" <?=($i > 8)?'style="display:none;"':'';?>>
            <img data-orig_src="<?php echo $feat_image[0];?>" data-hover="<?php echo the_field('hover_logo', $post->ID);?>" src="<?php echo $feat_image[0];?>" class="img-fluid img-hover" alt="...">
            <div class="large-title"><a class="titlelink" href="<?php echo the_permalink();?>"><?php echo get_the_title();?></a></div>
            
            <div class="card-text"><?php echo the_excerpt();?></div>
            <div class="redmorebtn">
                <a href="<?php echo the_permalink();?>" id="myBtn">Read More 
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 30 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.875 16C1.875 15.7347 1.97377 15.4804 2.14959 15.2929C2.3254 15.1053 2.56386 15 2.8125 15L24.9244 15L19.0238 8.70796C18.8477 8.52018 18.7488 8.26551 18.7488 7.99996C18.7488 7.73441 18.8477 7.47973 19.0238 7.29196C19.1998 7.10418 19.4385 6.99869 19.6875 6.99869C19.9365 6.99869 20.1752 7.10418 20.3513 7.29196L27.8513 15.292C27.9386 15.3848 28.0078 15.4952 28.0551 15.6167C28.1024 15.7382 28.1267 15.8684 28.1267 16C28.1267 16.1315 28.1024 16.2617 28.0551 16.3832C28.0078 16.5047 27.9386 16.6151 27.8513 16.708L20.3513 24.708C20.1752 24.8957 19.9365 25.0012 19.6875 25.0012C19.4385 25.0012 19.1998 24.8957 19.0238 24.708C18.8477 24.5202 18.7488 24.2655 18.7488 24C18.7488 23.7344 18.8477 23.4797 19.0238 23.292L24.9244 17L2.8125 17C2.56386 17 2.3254 16.8946 2.14959 16.7071C1.97377 16.5195 1.875 16.2652 1.875 16V16Z" fill="#AF663F"/></svg>
                </a>
            </div>
        </div>
<?php $i++; endwhile;?> 
    <div class="btncenter clearfix" style="position: relative;clear: both;display: block;min-width: 100%;">
        <a class="button-2 load_more" data-start="9">LOAD MORE</a>
    </div>

    
    </div>
     </div>
    </section>
    <script>

function img_hover_change_source(img_class, data_hover, data_orig_src){
    $(img_class).on('mouseenter',function(){
        let hover_src = $(this).data(data_hover);
        $(this).attr('src',hover_src);
    }).on('mouseleave',function(){
        $(this).attr('src',$(this).data(data_orig_src));
    });
}

    (function ($) {
        $(document).ready(function() {	

            $('.trigger').on('click',function(){
                let target= $(this).data('target');
                $('.target').hide();
                $('.'+target).show();
                $('.load_more').show();
            });

            $('.load_more').on('click',function(){
                // let starting_point = $(this).data('start');
                // let new_start = starting_point+3;
                // let the_target = $('.target').data('position');
                // debugger;
                // if(the_target > starting_point && the_target < new_start){
                //     $('.target').show();
                // }
                // $(this).data('start', new_start);
                $('.target').show();
                $('.load_more').hide();
            });

            img_hover_change_source('.img-hover', 'hover', 'orig_src');

        });
    })(jQuery);
    </script> 
    <?php $img = get_template_directory_uri().'/images/edit.png'; $edit = "<img title='Edit this page' src='".$img."'>"; edit_post_link($edit, '');?>    
<?php get_footer();?> 