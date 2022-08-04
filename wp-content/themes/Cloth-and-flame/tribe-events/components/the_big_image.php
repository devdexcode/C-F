<?php $the_image = get_sub_field('the_image');?>
<?php if (!empty($the_image)): ?><section id="imagesection1" style="background-image: url('<?php echo $the_image?>');"></section><?php endif;?>