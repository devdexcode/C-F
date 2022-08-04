<?php $heading_1 = get_sub_field('heading_1');?>
<?php $heading_2 = get_sub_field('heading_2');?>
<?php $venues = get_sub_field('venues');?>
<?php $the_link = get_sub_field('venues_link');?>
<?php $background_color = get_sub_field('background_color');?>
<?php if(!empty($venues) || !empty($heading_1) ):?>
<section id="section8" <?php if(!empty($background_color)):?>style="background-color:<?php echo $background_color;?>;"<?php endif;?> data-id="open_venues" class="open_venues">
        <div class="container">
            <?php if(!empty($heading_1)):?><h1><span><?=$heading_1?></span></h1><?php endif;?>
            <?php if(!empty($heading_2)):?> <p><?=$heading_2?></p> <?php endif;?>
                    
            <div class="row">
                <?php foreach($venues as $venue){?>
                    <?php $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $venue ), 'single-post-thumbnail' ); ?>
                <div class="col-md-6 text-center">
                    <img src="<?php echo $feat_image[0];?>" class="img-fluid" alt="...<?=$venue;?>">
                </div>
                <?php }?>
            </div>

            <?php if(!empty($the_link)):?><div class="btn-explor">
                <a class="button-1" href="<?php echo esc_url( $the_link['url'] ); ?>" target="<?php echo esc_attr( $the_link['target'] ); ?>"><?php echo ( $the_link['title'] ); ?></a>
            </div><?php endif;?>
        </div>
    </section><?php endif;?>