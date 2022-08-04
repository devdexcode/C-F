<?php $big_heading = get_sub_field('big_heading');?>
<?php $left_image = get_sub_field('left_image');?>
<?php $right_text = get_sub_field('right_text');?>
<?php if (!empty($big_heading) || !empty($right_text) ): ?>
<section id="text" data-id="big_heading_image_with_text" class="big_heading_image_with_text">
        <div class="container">
            <?php echo $big_heading;?>
            <div class="row">
                <div class="col-md-6">
                    <div class="smll-text">
                <?php if (!empty($left_image) ): ?><img src="<?=$left_image;?>" class="img-fluid"><?php endif;?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smll-text">
                    <?php echo $right_text;?>
                    </div>
                </div>
            </div>
        </div>
</section><?php endif;?>