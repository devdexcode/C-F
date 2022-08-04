    <?php $big_image = get_sub_field('big_image');?>
<?php if (!empty($big_image) ): ?>
<section id="imagesection" style="background-image: url(<?=$big_image?>);background-repeat:no-repeat;background-size: cover;"></section> <?php endif;?>