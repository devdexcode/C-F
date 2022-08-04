<?php get_header();?> <?php global $options;
// global $social_arr;
?><?php if (have_posts()): while (have_posts()): the_post();?>
<?php /*?><section id="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="sectitle"><?php the_title();?></div>
			</div>
			<div class="col-md-8">
				<div class="about-banner">
				<?php if (has_post_thumbnail()) {?><img src="<?=get_the_post_thumbnail_url();?>" class="img-fluid" alt="..."><?php }?>
			</div>
				<div class="description"><?php the_content();?></div>
			</div>
		</div>
	</div>
</section><?php */?>
<?php include_once('Templates/page-builder.php');?>
<?php endwhile;
endif;
?><?php $img = get_template_directory_uri().'/images/edit.png'; $edit = "<img title='Edit this page' src='".$img."'>"; edit_post_link($edit, '');?>
<?php get_footer();?>