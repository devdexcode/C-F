<?php $testimonials = get_sub_field('testimonials');?>
<?php $background_color = get_sub_field('background_color');?>
<section id="testimonial" style="background-color: <?=@$background_color?>;" data-id="testimonials_section" class="testimonials_section">
                <div class="owl-carousel owl-theme" id="owl-best">
<?php foreach($testimonials as $testimonial):?>
                    <div class="item">
                        <div class="section-title">
                            <?=$testimonial->post_title;?>
                        </div>
                        <p><?=substr($testimonial->post_content, 0, 290);?></p>
                        <div class="small-title">
                            – <?php the_field('client_name', $testimonial->ID);?>
                        </div>
                    </div>
<?php endforeach;?>
                </div>
        </section>