
<?php $image = get_sub_field('image');?>
<?php $text_1 = get_sub_field('text_1');?>
<?php $text_2 = get_sub_field('text_2');?>
<?php $image_1 = get_sub_field('image_1');?>
<?php $image_2 = get_sub_field('image_2');?>
<?php $the_link = get_sub_field('the_link');?>
<?php if (!empty($text_1) || !empty($text_2)  || !empty($image_1)  || !empty($image_2) ): ?>
<section id="flip-card2" style="background-color: #EEE8E0" data-id="text_image_columns" class="text_image_columns">
    <div class="container">
        <div class="row">
            <div class="col-md-6 flip-card-row">
            <?php if(!empty($image)):?>
                <img src="<?php echo $image;?>" class="img-fluid two-imag" alt="...">
            <?php endif;?>
            <?php echo $text_1;?>
            </div>
            <div class="col-md-6">
                <img src="<?php echo $image_1;?>" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="row too">
            <div class="col-md-6 two-for-pading">
                <img src="<?php echo $image_2;?>" class="img-fluid" alt="...">
            </div>
            <div class="col-md-6 secnd">
            <?php echo $text_2;?>
                <?php if(!empty($the_link)):?><div class="btnlas" style="float: left;">
                    <a class="button-1" href="<?php echo esc_url( $the_link['url'] ); ?>" target="<?php echo esc_attr( $the_link['target'] ); ?>"><?php echo $the_link['title'] ; ?></a>
                </div><?php endif;?>
            </div>
        </div>
    </div>
</section><?php endif;?> 