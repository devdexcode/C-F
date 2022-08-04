<?php $heading_1    = get_sub_field('heading_1');?>
<?php $heading_2    = get_sub_field('heading_2');?>
<?php $link_1       = get_sub_field('link_1');?> 
<?php $link_2       = get_sub_field('link_2');?>
<?php if(!empty($heading_1) || !empty($link_1)|| !empty($link_2)):?>
<section id="section6" data-id="headings_with_links" class="headings_with_links">
        <div class="container">
            <?php if(!empty($heading_1)):?><h1><span><?=$heading_1?></span></h1><?php endif;?>
            <?php if(!empty($heading_2)):?><h2><?=$heading_2?></h2><?php endif;?>
            <div class="row">
            <?php if(!empty($link_1)):?><div class="col-md-6 borderleft">
                    <div class="twobtn twobtn_border">
                    <a class="btnn" href="<?php echo esc_url( $link_1['url'] ); ?>" target="<?php echo esc_attr( $link_1['target'] ); ?>">
                        BROWSE <u><?php echo  $link_1['title'] ; ?></u>
                    </a>
                    </div><?php endif;?>

                </div>
                <?php if(!empty($link_2)):?><div class="col-md-6">
                    <div class="twobtn">
                    <a class="btnn" href="<?php echo esc_url( $link_2['url'] ); ?>" target="<?php echo esc_attr( $link_2['target'] ); ?>">
                        VIEW OUR <u><?php echo $link_2['title'] ; ?></u>
                    </a>
                    </div><?php endif;?>
                </div>
            </div>
        </div>
    </section><?php endif;?> 