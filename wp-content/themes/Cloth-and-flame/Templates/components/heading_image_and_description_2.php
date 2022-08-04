<?php $heading_1 = get_sub_field('heading_1');?>
<?php $heading_2 = get_sub_field('heading_2');?>
<?php $image = get_sub_field('image');?>
<?php $the_description = get_sub_field('the_description');?>
<?php if (!empty($heading_1) || !empty($the_description)): ?>
<section id="section2" data-id="heading_image_and_description_2" class="heading_image_and_description_2">
<div class="container service-sec1">
<div class="row first-row">
    <div class="col-md-4">
    <?php if(!empty($heading_1)):?> <h5><?=$heading_1?> </h5><?php endif;?>
    </div>
    <div class="col-md-8 call3">
    <?php if(!empty($heading_2)):?> <h1><?=$heading_2?> </h1><?php endif;?>
    </div>
</div>
<div class="imag">
    <div class="">
    <?php if(!empty($image)):?><img src="<?=$image?>" class="img-fluid" alt="..."><?php endif;?>
    </div>
</div>
<section id="innersection">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
        <?php echo $the_description; ?>
        </div>
    </div>
</section>
</div>
</section><?php endif;?>