    <?php $images = get_sub_field('images');?>
<?php if (!empty($images) ): ?>
    <section id="empty-card">
        <div class="container">
            <div class="row">
                <?php foreach($images as $image):?>
                <div class="col-md-4">
                    <img src="<?=$image?>" class="img-fluid" alt="...">
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>  <?php endif;?>