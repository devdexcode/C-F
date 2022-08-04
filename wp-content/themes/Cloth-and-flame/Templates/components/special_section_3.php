<?php $the_heading     = get_sub_field('the_heading');?>
<?php $special_text   = get_sub_field('special_text');?>
<?php $the_image    = get_sub_field('the_image');?>
<?php $the_text     = get_sub_field('the_text');?>
<?php $the_link     = get_sub_field('the_link');?>
<?php if (!empty($special_text) ): ?>
    <section id="sec" style="background-color: #EEE8E0;" data-id="special_section_3">
        <div class="container">
            <div class="event1">
                <?php echo $special_text;?>
            </div>
        </div>
    </section>
<?php endif;?>  
<?php if (!empty($the_image) || !empty($the_text) ): ?>  
    <section id="two-cards-image" style="background-color: #EEE8E0;margin-top:-16px;" data-id="special_section_3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $the_image;?>" class="img-fluid" alt="...">
                </div>
                <div class="col-md-6">
                <?php echo $the_heading;?>
                <?php echo $the_text;?>
                    <div class="btnlas1" style=" background: transparent;">
                            <a class="button-1" href="<?php echo esc_url( $the_link['url'] ); ?>" target="<?php echo esc_attr( $the_link['target'] ); ?>"><?php echo $the_link['title'] ; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
<?php endif;?>