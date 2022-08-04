
<?php $heading_1    = get_sub_field('heading_1');?>
<?php $heading_2    = get_sub_field('heading_2');?>
<?php $slider       = get_sub_field('slider');?>

<?php if(!empty($slider)):?>
<section id="section3" data-id="slider_section_1" class="slider_section_1">
        <div class="container">
            <?php if(!empty($heading_1)):?><div class="section-title"><h5><?=$heading_1?></h5></div><?php endif;?>
            <?php if(!empty($heading_2)):?><h1><?=$heading_2?></h1><?php endif;?>
            <div class="customOwlClasss">
                <div class="owl-carousel owl-theme" id="owl-cro1">
                <?php if(!empty($slider)):?>
                    <?php foreach($slider as $slide):?>
                    <div class="item">
                        <div class="item-img" style="background-image:url('<?php echo $slide;?>');"></div>
                    </div>
                    <?php endforeach;?>
                <?php endif;?>
                </div>
            </div>
        </div>
</section>
<?php endif;?>