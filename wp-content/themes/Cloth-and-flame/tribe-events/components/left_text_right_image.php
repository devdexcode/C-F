<?php $the_text = get_sub_field('the_text');?>
<?php $the_right_image = get_sub_field('the_right_image');?>
<?php if ( !empty($the_text) || !empty($the_image) ):?>
<div class="row one">
        <div class="col-md-6">
        <div class="p-tag">
            <?php echo $the_text;?>
        </div>

        </div>
        <div class="col-md-6">
            <img src="<?php echo $the_right_image;?>" class="img-fluid" alt="...">
        </div>
</div><?php endif;?>