<?php $the_link = get_sub_field('the_link');?>
<?php $heading = get_sub_field('heading');?>
<?php $text = get_sub_field('text');?>
<?php if (!empty($heading) || !empty($text)): ?>
<section id="Dreaming" data-id="call_to_action_5" class="call_to_action_5">
    <div class="container">
    <?php echo $heading; ?>
        <?php echo $text; ?>
        <?php if (!empty($the_link)): ?>
            <div class="btncenter">
                <a class="button-2" href="<?php echo esc_url($the_link['url']); ?>" target="<?php echo esc_attr($the_link['target']); ?>">
                    <?php echo $the_link['title']; ?>
                </a>
            </div>
        <?php endif;?>
    </div>
</section>
<?php endif;?>