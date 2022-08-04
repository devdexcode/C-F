<?php $the_text = get_sub_field('the_text');?>
<?php $image_1 = get_sub_field('image_1');?>
<?php $image_2 = get_sub_field('image_2');?>
<?php if ( !empty($the_text) || !empty($image_1) || !empty($image_2) ):?>

    <div class="row threeee">

<div class="col-md-6">
    <div class="par">
        <div class="para2"><?php echo $the_text;?></div>

    </div>
</div>
<div class="col-md-6">
    <div class="row inner">
        <div class="col-md-6">
            <img src="<?php echo $image_1;?>" class="img-fluid" alt="...">
        </div>
        <div class="col-md-6">
            <img src="<?php echo $image_2;?>" class="img-fluid" alt="...">
        </div>
    </div>
</div>
</div>
<?php endif;?>