<?php $small_heading = get_sub_field('small_heading');?>
<?php $big_heading = get_sub_field('big_heading');?>
<?php $the_link = get_sub_field('the_link');?>
<?php $background_color = get_sub_field('background_color');?>
<?php if (!empty($big_heading) || !empty($the_link)): ?>
    <section id="section7" style="background-color:<?php echo $background_color; ?>;" data-id="call_to_action_1" class="call_to_action_1">
        <div class="container">
        <?php if (!empty($small_heading)): ?><div class="section-title"><?=$small_heading?></div><?php endif;?>
            <?php if (!empty($big_heading)): ?><h2><?=$big_heading?></h2><?php endif;?>
               <div class="btncenter">
                <a class="button-2" href="<?php echo esc_url($the_link['url']); ?>" target="<?php echo esc_attr($the_link['target']); ?>">
                    <?php echo esc_html($the_link['title']); ?>
                </a>
            </div>
        </div>
    </section>
<?php endif;?>