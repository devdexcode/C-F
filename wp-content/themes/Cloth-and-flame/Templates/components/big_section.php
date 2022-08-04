<?php $small_heading = get_sub_field('small_heading');?>
<?php $big_heading = get_sub_field('big_heading');?>
<?php $the_link = get_sub_field('the_link');?>
<?php $background_color = get_sub_field('background_color');?>
<?php $left = get_sub_field('left');?>
<?php $right = get_sub_field('right');?>
<style>.capt-cont{width:100%;margin:0;padding:0;}.capt-cont div{max-width: 75% !important;margin: 0 !important;padding: 0 !important;}</style>
<?php if (!empty($big_heading) || !empty($small_heading) || !empty($the_link) || !empty($left) || !empty($right)): ?>

    <section id="section7" style="background-color:<?php echo $background_color; ?>;" data-id="big_section" class="big_section">
        <div class="container">
        <?php if (!empty($small_heading)): ?><div class="section-title"><?=$small_heading?></div><?php endif;?>
            <?php if (!empty($big_heading)): ?><h2><?=$big_heading?></h2><?php endif;?>
            <div class="btncenter">
                <a class="button-2" href="<?php echo esc_url($the_link['url']); ?>" target="<?php echo esc_attr($the_link['target']); ?>">
                    <?php echo esc_html($the_link['title']); ?>
                </a>
            </div>
		<div class="row">
                <div class="col-md-6">
                    <div class="imag">
                        <img src="<?php echo $left['big_image']; ?>" class="img-fluid" alt="...">
                    </div>
                    <hr>
                    <div class="capt-cont"><div class="Caption1 "><?php echo $left['text']; ?></div></div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <img src="<?php echo $right['big_image']; ?>" class="img-fluid" alt="...">
                <hr>
                <div class="capt-cont"><div class="Caption2 "><?php echo $right['text']; ?></div></div>
                </div>
            </div>
        </div>
    </section> 
<?php endif;?>