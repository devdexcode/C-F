<?php $heading = get_sub_field('heading');?>
<?php $image = get_sub_field('image');?>
<?php $the_description = get_sub_field('the_description');?>
<?php if ( !empty($the_description) ): ?>
<section id="aboutus" data-id="heading_image_and_description" class="heading_image_and_description">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <?php if ( !empty($the_description) ): ?><div class="sectitle"><?=$heading?></div><?php endif;?>
            </div>
            <div class="col-md-8">
                <div class="about-banner">
                <?php if ( !empty($image) ): ?><img src="<?=$image?>" class="img-fluid" alt="..."><?php endif;?>
                </div>
                <?php if ( !empty($the_description) ): ?><div class="description"><?=$the_description?></div><?php endif;?>
            </div>
        </div>
    </div>
</section><?php endif;?>