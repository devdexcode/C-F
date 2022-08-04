<?php $big_text = get_sub_field('the_text');?>
<?php if (!empty($big_text)): ?>
<section id="embricing-section" style="background-color: #C4C4C4;" data-id="big_text" class="big_text">
    <div class="container">
        <div class="oversezing-heading">
            <?php echo $big_text ?>
        </div>
    </div>
</section><?php endif;?>