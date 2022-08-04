<?php $the_title = get_sub_field('the_title');?>
<?php $the_background_image = get_sub_field('the_background_image');?>
<?php if (!empty($the_title) || !empty($the_background_image) ): ?>
<section id="logo-emp" style="background-image: url('<?php echo $the_background_image ?>');background-repeat: no-repeat;background-size: cover;" data-id="title_with_background_image" class="title_with_background_image">
    <div class="container">
        <div class="event">
        <?php echo $the_title ?>
        </div>
    </div>
</section><?php endif;?> 