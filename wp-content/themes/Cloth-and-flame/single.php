<?php get_header();?> <?php global $options;
// global $social_arr;
?><?php if (have_posts()): while (have_posts()): the_post();?>
<section id="aboutus">
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
				<p><?php edit_post_link('Edit', '<p>', '</p><br/>');?></p>
			</div>
		</div>
	</div>
</section>
<?php endwhile;
endif;
?>
    <?php get_footer();?>