<?php $the_text = get_sub_field('the_text');?>
<?php $the_image = get_sub_field('the_image');?>
<?php if ( !empty($the_text) || !empty($the_image) ):?>

<div class="row too">
    <div class="col-md-6 midimg-col">
        <img src="<?php echo $the_image;?>" class="img-fluid" alt="...">
    </div>
    <div class="col-md-6">
        <div class="para1"><?php echo $the_text;?></div>
    </div>
</div>
<?php endif;?>