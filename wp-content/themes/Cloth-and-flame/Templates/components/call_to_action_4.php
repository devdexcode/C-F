<?php $heading = get_sub_field('heading');?>
<?php $image = get_sub_field('image');?>
<?php $text = get_sub_field('text');?>
<?php $special_text = get_sub_field('special_text');?>
<?php $the_link = get_sub_field('the_link');?>
<?php if (!empty($heading) || !empty($image)  || !empty($text)  ): ?>
<section id="text-with-img" style="background-color: #F4F7F4 ;" data-id="call_to_action_4" class="call_to_action_4">
    <div class="container">
        <div class="head">
            <div class="pic" style="text-align: center;">
                <img src="<?php echo $image;?>" class="img-fluid" alt="...">
            </div>
            <div class="Oversized-Headline">
                <?php echo $heading;?>
            </div>
        </div>
        <?php echo $text;?>
            <?php if(!empty($special_text)):?><div class="section-title" style="text-align: center;">
            <?php echo $special_text ?>
            </div><?php endif;?>
            <?php if(!empty($the_link)):?>
                <div class="btnlas">
                    <a class="button-1" href="<?php echo esc_url( $the_link['url'] ); ?>" target="<?php echo esc_attr( $the_link['target'] ); ?>"><?php echo $the_link['title'] ; ?></a>
                </div>
            <?php endif;?>
    </div>        
</section><?php endif;?> 