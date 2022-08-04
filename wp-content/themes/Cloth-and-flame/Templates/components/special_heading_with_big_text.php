<?php $special_heading = get_sub_field('special_heading');?>
<?php $big_text = get_sub_field('big_text');?>
<?php if (!empty($special_heading) || !empty($big_text) ): ?>
    <section id="sect-last" style="background-color: #EEE8E0;" data-id="special_heading_with_big_text" class="special_heading_with_big_text">
        <div class="container">
            <div class="section-title" style="text-align: center;">
                <?=$special_heading;?>
            </div>
            <?php echo  $big_text; ?>
        </div>
    </section>
<?php endif;?> 