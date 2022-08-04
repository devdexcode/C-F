<?php $heading  = get_sub_field('heading');?>
<?php $text     = get_sub_field('text');?>
<?php $image    = get_sub_field('image');?>
<?php $link     = get_sub_field('link');?>
<?php if ( !empty($heading) || !empty($text) || !empty($image) || !empty($link) ): ?>
   <section id="two-cards-image2" style="background-color: #F4F7F4;" data-id="special_section_4" class="special_section_4">
        <div class="container">
            <div class="row card-2">
                <div class="col-md-6">
                <?php echo $heading; ?>
                <?php echo $text; ?>   
                    <div class="btnlas1" style=" background: transparent;">
                        <a class="button-1" href="<?php echo esc_url( $the_link['url'] ); ?>" target="<?php echo esc_attr( $the_link['target'] ); ?>"><?php echo $the_link['title'] ; ?></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo $image; ?>" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </section>
<?php endif;?>