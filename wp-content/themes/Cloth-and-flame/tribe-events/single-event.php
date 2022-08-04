<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */
?><style>.tribe-events-spinner-medium {display: none;}#flip-card .p-tag {font-family: 'Founders Grotesk';font-style: normal;font-weight: 400;font-size: 24px;line-height: 40px;letter-spacing: 0.02em;color: #221E15;padding: 0px 90px 0px 0px;}#flip-card .para1 {font-family: 'Founders Grotesk';font-style: normal;font-weight: 400;font-size: 24px;line-height: 40px;letter-spacing: 0.02em;color: #221E15;padding: 140px 105px 0px 0px;}#flip-card .para2 {font-family: 'Founders Grotesk';font-style: normal;font-weight: 400;font-size: 24px;line-height: 40px;letter-spacing: 0.02em;color: #221E15;padding: 0px 50px 0px 50px;}</style> <?php global $options;// global $social_arr;?>

<?php if (have_posts()): while (have_posts()): the_post(); $id = get_the_ID();?>
  <section id="logo-emp1" style="background-color: #F4F7F4">
        <div class="container">
            <div class="event1">
                TICKETED<br> EVENTS
            </div>
			<?php if (has_post_thumbnail()) {?><img src="<?=get_the_post_thumbnail_url();?>" class="img-fluid" alt="..."><?php }?>
        </div>
    </section>
    <section id="heading-display" style="background-color: #F4F7F4">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="section-title">
						<?php the_title();?>
                    </div>
                    <h1><?php echo get_post_meta($id, 'second_heading',true);?></h1>

                </div>
                <div class="col-md-3">
                    <div class="card-title ">
                        <div>
                            <h5>LOCATION</h5>
                            <h6><?php echo tribe_get_venue() ?></h6>
                            <h5>DATE</h5>
                            <h6><?=$start_date = tribe_get_start_date( null, false );?></h6>
                        </div>
                        <div>
<?php $event_id = Tribe__Main::post_id_helper(); 
    $time_format = get_option( 'time_format', Tribe__Date_Utils::TIMEFORMAT );?>                            
     <h5>TIME</h5>
     <h6 style="text-transform:uppercase;"><?=tribe_get_start_date( null, false, $time_format );?></h6>
     <h5>Tickets</h5>
     <h6><?php if ( tribe_get_cost() ) : ?><?php echo tribe_get_cost( null, true ) ?> / Person <?php endif; ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btnsoli">
                        <a class="btn-solid" href="#">BUY TICKETS</a>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>

    <section id="flip-card" style="background-color: #F4F7F4">
        <div class="container">

		<?php 
		$sect1_layouts = array('left_text_right_image','left_image_right_text','left_text_right_two_images');
		if( have_rows('event_layout', $id) ):
			while ( have_rows('event_layout', $id) ) : the_row();
				if( in_array(get_row_layout() , $sect1_layouts) ):
					include_once('components/'.get_row_layout().'.php'); 
				endif;
			endwhile;
		else :
		endif;?>

            <div class="line2"></div>
        </div>
    </section>
    <section id="only-text" style="background-color: #F4F7F4">
        <div class="container">
		<?php 
		if( have_rows('event_layout', $id) ):
			while ( have_rows('event_layout', $id) ) : the_row();
				if(  get_row_layout()  == 'small_text_row' ):
					include_once('components/small_text_row.php'); 
				endif;
			endwhile;
		else :
		endif;?>



        </div>
    </section>
		<?php 
		if( have_rows('event_layout', $id) ):
			while ( have_rows('event_layout', $id) ) : the_row();
				if(  get_row_layout()  == 'the_big_image' ):
					include_once('components/the_big_image.php'); 
				endif;
			endwhile;
		else :
		endif;?>

	<?php $img = get_template_directory_uri().'/images/edit.png'; $edit = "<img title='Edit this page' src='".$img."'>"; edit_post_link($edit, '');?>
<?php endwhile;
endif;
?>