
<?php $image        = get_sub_field('image');?>
<?php $the_link     = get_sub_field('the_link');?>
<?php $heading      = get_sub_field('heading');?> 
<?php $text         = get_sub_field('text');?>
<?php if(!empty($heading) || !empty($text) || !empty($image)):?>
<section id="img-with-text" data-id="call_to_action_3" class="call_to_action_3">
    <div class="container">
        <img src="<?php echo $image  ?>" class="img-fluid" alt="..." style="text-align: center;">
        <h1><span><?php echo $heading;  ?></span></h1>
        <?php echo $text;  ?>
            <?php if(!empty($the_link)):?> <div class="btncenter">
            <a class="button-1" href="<?php echo esc_url( $the_link['url'] ); ?>" target="<?php echo esc_attr( $the_link['target'] ); ?>"><?php echo $the_link['title'] ; ?></a>
                </div><?php endif;?>
    </div>
</section><?php endif;?>