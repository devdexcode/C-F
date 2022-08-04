<?php get_header();?> <?php global $options;
?><?php if (have_posts()): while (have_posts()): the_post();?>
			<?php include_once 'Templates/page-builder.php';?>
		<?php endwhile;
endif;
?> <?php $img = get_template_directory_uri().'/images/edit.png'; $edit = "<img title='Edit this page' src='".$img."'>"; edit_post_link($edit, '');?>
<?php get_footer();?>