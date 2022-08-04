<?php $the_services = get_sub_field('the_services');?>
<?php $the_link = get_sub_field('the_link');?>
<?php if (!empty($the_services) || !empty($the_link)): ?>
<section id="brand-action" style="background-color: #F4F7F4;" data-id="services_section" class="services_section">
        <div class="container">
            <?php $x = 1;?>
         <?php foreach ($the_services as $service): ?>
            <?php if ($x == 1) {$row_num = 'one';} elseif ($x == 2) {$row_num = 'second';} elseif ($x == 3) {$row_num = 'third';} elseif ($x == 4) {$row_num = 'fourth';}?>
        <div class="row <?=$row_num?>">
        <?php $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($service->ID), 'single-post-thumbnail');?>
                <div class="col-md-7 <?php if ($x % 2 == 0): ?>order-md-2 order-2-img-inside<?php endif;?>  display-table">
                    <div class="inner-content-middle"><img src="<?=$feat_image[0]?>" class="img-fluid" alt="..."></div>
                </div>

                <div class="col-md-5 <?php if ($x % 2 == 0): ?>order-md-1<?php endif;?> display-table">
                    <div class="inner-content-middle">
                    <h1><?=$service->post_title;?></h1>
                    <p><?=substr($service->post_content, 0, 70);?></p>
                    <div class="parent">
                        <div class="small-title1">PAST WORK</div>
                        <div class="link">
                            <?php $past_work = get_field('past_work', $service->ID);?>
                            <?php if (!empty($past_work) || $past_work != "" || $past_work != null): foreach ($past_work as $work): ?>
	                                <a href="<?php echo esc_url($work['work']['url']); ?>" target="<?php echo esc_attr($work['work']['target']); ?>">
	                                    <?php echo @$work['work']['title']; ?>
	                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 30 32" fill="none">
	                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.875 16C1.875 15.7347 1.97377 15.4804 2.14959 15.2929C2.3254 15.1053 2.56386 15 2.8125 15L24.9244 15L19.0238 8.70796C18.8477 8.52018 18.7488 8.26551 18.7488 7.99996C18.7488 7.73441 18.8477 7.47973 19.0238 7.29196C19.1998 7.10418 19.4385 6.99869 19.6875 6.99869C19.9365 6.99869 20.1752 7.10418 20.3513 7.29196L27.8513 15.292C27.9386 15.3848 28.0078 15.4952 28.0551 15.6167C28.1024 15.7382 28.1267 15.8684 28.1267 16C28.1267 16.1315 28.1024 16.2617 28.0551 16.3832C28.0078 16.5047 27.9386 16.6151 27.8513 16.708L20.3513 24.708C20.1752 24.8957 19.9365 25.0012 19.6875 25.0012C19.4385 25.0012 19.1998 24.8957 19.0238 24.708C18.8477 24.5202 18.7488 24.2655 18.7488 24C18.7488 23.7344 18.8477 23.4797 19.0238 23.292L24.9244 17L2.8125 17C2.56386 17 2.3254 16.8946 2.14959 16.7071C1.97377 16.5195 1.875 16.2652 1.875 16V16Z" fill="#AF663F"></path>
	                                    </svg>
	                                </a><br>
	                            <?php endforeach;endif;?>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
            <?php $x++;endforeach;?>





            <?php if (  !empty($the_link) ): ?>
            <div class="btnlas">
                <a class="button-1" href="<?php echo esc_url($the_link['url']); ?>" target="<?php echo esc_attr($the_link['target']); ?>"><?php echo $the_link['title']; ?></a>
            </div><?php endif;?>
        </div>

    </section><?php endif;?>