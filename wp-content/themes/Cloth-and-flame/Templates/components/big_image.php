<?php $big_image = get_sub_field('big_image');?>

<?php if(!empty($big_image)):?>
    <section id="imagesection" style="background-image: url('<?php echo $big_image;?>');" data-id="big_image" class="big_image"></section>
<?php endif;?>