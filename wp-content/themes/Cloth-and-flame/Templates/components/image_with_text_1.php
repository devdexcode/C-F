<?php //print_r(get_sub_field('image_with_text_1'));?>
<?php $img = get_sub_field('the_image');?>
<?php $text = get_sub_field('text');?>
<?php $text_2 = get_sub_field('text_2');?>
<?php if (!empty($img)): ?>
<section id="section2" data-id="image_with_text_1" class="image_with_text_1">
    <div class="container">
        <div class="row first-row">

            <div class="col-md-4 ">
            <?php if (!empty($text)): ?>
                <?php echo $text; ?>
            <?php else:?>
                <h5>EXPERIENTIAL <br> EVENT <span>CO.</span></h5>
            <?php endif;?>
            </div>
            <div class="col-md-8 call3">
            <?php if (!empty($text_2)): ?><h1> <?php echo $text_2; ?></h1><?php endif;?>
            </div>


        </div>
        <?php if (!empty($img)): ?>
        <div class="imag">
            <div class="imgbox">
                <img src="<?php echo $img; ?>" class="img-fluid" alt="...">
            </div>
        </div>
            <?php endif;?>
    </div>
</section>
<?php endif;?>