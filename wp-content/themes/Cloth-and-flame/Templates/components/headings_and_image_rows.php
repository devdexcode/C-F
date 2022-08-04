<?php $heading_1 = get_sub_field('heading_1');?>
<?php $heading_2 = get_sub_field('heading_2');?>
<?php $images_row_1 = get_sub_field('images_row_1');?>
<?php $images_row_2 = get_sub_field('images_row_2');?>
<?php $background_color = get_sub_field('background_color');?>
<?php if(!empty($heading_1) && !empty($images_row_1) && !empty($images_row_2)):?>
<section id="clum-card-section" style="<?php echo isset($background_color) ? $background_color : '';?>" data-id="headings_and_image_rows" class="headings_and_image_rows">
    <div class="container">
    <?php if(!empty($heading_1) ):?><h2><?=$heading_1?></h2><?php endif;?>
        <?php if(!empty($heading_1) ):?><h3><?=$heading_2?></h3><?php endif;?>
        <div class="row">
            <?php foreach($images_row_1 as $img):?>
            <div class="col" style="text-align: center;">
                <img src="<?=$img?>" class="img-fluid" alt="...">
            </div>
            <?php endforeach;?>
        </div>
        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="owl-crosal">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                <?php foreach($images_row_2 as $image):?>
                    <div class="owl-item">
                        <div class="item" style="text-align: center;">
                            <img src="<?=$image;?>" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                    class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button
                    role="button" class="owl-dot"><span></span></button><button role="button"
                    class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>

        <div class="row second-roww">
            <div class="col-md-1">

            </div>
            <?php foreach($images_row_2 as $image):?>
            <div class="col" style="text-align: center;">
                <img src="<?=$image;?>" class="img-fluid" alt="...">
            </div>
            <?php endforeach;?>
            <div class="col-md-1">

            </div>

        </div>
    </div>
</section>
<?php endif;?>