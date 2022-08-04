<?php $heading = get_sub_field('heading');?>
<?php $the_team = get_sub_field('the_team');?>
<?php if(!empty($the_team) ):?>
<section id="card-section" data-id="team_section" class="team_section">
    <div class="container">
    <?php if(!empty($heading)):?> <h1><span><?=$heading?></span></h1><?php endif;?>
        <div class="row">

        <?php foreach($the_team as $member): ?>
            <div class="col-md-3 mb-3">
                <div class="card"><?php $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' ); ?>
                    <div class="card-img" style="background-image: url('<?php echo $feat_image[0];?>');"></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $member->post_title;?></h5>
                        <p class="card-text"><?php the_field('position', $member->ID);?></p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
            
        </div>
    </div>
</section>
<?php endif;?>