<?php $heading = get_sub_field('heading');?>
<?php $the_link = get_sub_field('the_link');?>
<?php $the_slider = get_sub_field('slider');?>
<?php if (!empty($the_slider)): ?>
<section id="section4" data-id="slider_section_2" class="slider_section_2">

<?php if (!empty($heading)): ?><h2><?php echo $heading; ?></h2><?php endif;?>
        <?php if (!empty($the_link)): ?>
        <div class="btn4">
            <a class="link" href="<?php echo esc_url($the_link['url']); ?>" target="<?php echo esc_attr($the_link['target']); ?>"><?php echo esc_html($the_link['title']); ?> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 30 32" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.875 15C1.875 14.7347 1.97377 14.4804 2.14959 14.2929C2.3254 14.1053 2.56386 14 2.8125 14L24.9244 14L19.0238 7.70796C18.8477 7.52018 18.7488 7.26551 18.7488 6.99996C18.7488 6.73441 18.8477 6.47973 19.0238 6.29196C19.1998 6.10418 19.4385 5.99869 19.6875 5.99869C19.9365 5.99869 20.1752 6.10418 20.3513 6.29196L27.8513 14.292C27.9386 14.3848 28.0078 14.4952 28.0551 14.6167C28.1024 14.7382 28.1267 14.8684 28.1267 15C28.1267 15.1315 28.1024 15.2617 28.0551 15.3832C28.0078 15.5047 27.9386 15.6151 27.8513 15.708L20.3513 23.708C20.1752 23.8957 19.9365 24.0012 19.6875 24.0012C19.4385 24.0012 19.1998 23.8957 19.0238 23.708C18.8477 23.5202 18.7488 23.2655 18.7488 23C18.7488 22.7344 18.8477 22.4797 19.0238 22.292L24.9244 16L2.8125 16C2.56386 16 2.3254 15.8946 2.14959 15.7071C1.97377 15.5195 1.875 15.2652 1.875 15V15Z" fill="white"/>
                    </svg>
            </a>
        </div>
        <?php endif;?>

            <div class="owl-carousel owl-theme special_cara" id="owl-crosal">
                <?php foreach ($the_slider as $slide): ?>
                <div class="item">
                    <img src="<?php echo $slide ?>" class="img-fluid imgg" alt="...">
                </div>
                <?php endforeach;?>
            </div>
</section>
<?php endif;?>