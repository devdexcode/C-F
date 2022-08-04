
<?php $text_on_the_left_column = get_sub_field('text_on_the_left_column');?>
<?php $text_on_the_right_column = get_sub_field('text_on_the_right_column');?>
<?php if (!empty($text_on_the_left_column) || !empty($text_on_the_right_column)): ?>

<div class="row">
    <div class="col-md-6 only-text-cal1">
    <?php echo $text_on_the_left_column ?>
    </div>
    <div class="col-md-6 only-text-cal2">
    <?php echo $text_on_the_right_column ?>
    </div>
</div><?php endif;?>