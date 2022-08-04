<?php $the_image = get_sub_field('the_image');?>
<?php if (!empty($the_image) ): ?>
    <section id="empty-image">
        <div class="container">
            <img src="<?=$the_image;?>" class="img-fluid" alt="...">
        </div>
    </section>  <?php endif;?>