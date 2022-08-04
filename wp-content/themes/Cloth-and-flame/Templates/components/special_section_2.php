<?php $big_text     = get_sub_field('big_text');?>
<?php $small_text   = get_sub_field('small_text');?>
<?php $the_image    = get_sub_field('the_image');?>
<?php $the_link     = get_sub_field('the_link');?>
<?php if (!empty($big_text) || !empty($small_text) || !empty($the_image) || !empty($the_link) ): ?>
<section id="section22" style="background-color: #EEE8E0;" data-id="special_section_2" class="special_section_2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="culum-text-img">
                    <?php echo $big_text ;?>
                    <div class="btnlas1" style=" background: transparent;">
                            <a class="button-1" href="<?php echo esc_url( $the_link['url'] ); ?>" target="<?php echo esc_attr( $the_link['target'] ); ?>"><?php echo $the_link['title'] ; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <?php echo $small_text ;?>
                <img src="<?php echo $the_image;?>" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</section><?php endif;?>