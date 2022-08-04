<?php $the_text = get_sub_field('the_text');?>
<?php if (!empty($the_text) ): ?>
    <section id="backimgsec" style="background-color: #EEE8E0;" data-id="special_section" class="special_section">
        <div class="container">
            <div class="section-title" style="text-align: center;">
                <?php echo $the_text;?>
            </div>
        </div>
    </section>
<?php endif;?> 