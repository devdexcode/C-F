<?php
////////////////////////////
// THEME OPTIONS
///////////////////////////

include('theme-options/themeOptions.php');
/* get theme options */ $options = get_option('theme_settings');
global $options;

/***
 * ADDING CSS AND JS 
 * THE WP WAY
 * */

function theme_enqueue_scripts() {
    //css
    wp_register_style( 'style-css', get_template_directory_uri().'/style.css' );
    wp_enqueue_style('style-css');
    
    //js
    wp_enqueue_script('jquery');
}
if(!is_admin()):
add_action( 'init', 'theme_enqueue_scripts' );
endif;
/* * *********
 * ADDING MENU
 */
include( get_template_directory() . '/inc/walker.php');
include( get_template_directory() . '/inc/walker_mobile.php');
add_theme_support('menus');

function register_theme_menus() {
    register_nav_menus(
            array('primary_menu' => _('Primary Menu'))
    );
    register_nav_menus(
            array('secondary_menu' => _('Secondary Menu'))
    );
}
add_action('init', 'register_theme_menus');

/* * *********
 * DISABLING GUTENBURG 
 */

//PAGE SLUG BODY CLASS
function add_slug_body_class($classes) {
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');

/* * *********
 * DISABLING GUTENBURG 
 */

add_filter('use_block_editor_for_post', '__return_false', 10);
add_theme_support( 'block-templates' );
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );




/* * *********
 * WIDGETS
 */

function create_widget($name, $id, $description) {
    register_sidebar(array(
        'name' => __($name),
        'id' => $id,
        'description' => __($description),
        'before_widget' => '',
        'after_widget' => '',
//            'before_title' => '',
//            'after_title' => ''
        'before_title' => '<h5 style="margin-left:45px;" class="about">',
        'after_title' => '</h4>'
    ));
}

//create_widget( 'Default Header Right', 'default_header_right', 'On the right side of the header' );

create_widget('Page Sidebar', 'page', 'Appears on the side of pages with a sidebar');
create_widget('Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section');


create_widget(' Footer 1', 'footer-1', '');
create_widget(' Footer 2', 'footer-2', '');
create_widget(' Footer 3', 'footer-3', '');

create_widget(' Footer 5', 'footer-5', '');
create_widget(' Footer 6', 'footer-6', '');
create_widget(' Footer 7', 'footer-7', '');
create_widget(' Footer 8', 'footer-8', '');


/* Disable WordPress Admin Bar for all users but admins. */
//add_filter( 'show_admin_bar', '__return_false' );

/* * *********
 * ADDING FEATURED IMAGE THEME SUPPORT
 */
function theme_post_thumbnails() {
    add_theme_support('post-thumbnails');
    add_image_size( 'small-thumbnail', 100, 100, true );
	add_image_size( 'single-post-image', 250, 250, true );
}
    add_action( 'after_setup_theme', 'theme_post_thumbnails' );
/**
 * ADDING WP COLORPICKER SUPPORT
 */
add_action('admin_enqueue_scripts', 'wplite_add_color_picker');

function wplite_add_color_picker($hook) {

    if (is_admin()) {

        // Add the color picker css file       
        wp_enqueue_style('wp-color-picker');

        // Include our custom jQuery file with WordPress Color Picker dependency
        wp_enqueue_script('custom-script-handle', get_template_directory_uri() . '/theme-options/inc/custom-script.js', array('wp-color-picker'), false, true);
    }
}

add_action('admin_footer', 'colorPicker_scripts');

function colorPicker_scripts() {
    ?>
    <script>(function ($) {

            // Add Color Picker to all inputs that have 'color-field' class
            $(function () {
                $('.color-field').wpColorPicker();
            });

        })(jQuery);</script>
    <?php

}

/* * *********
 * Removing p Tags
 * * */
//remove_filter ('the_content',  'wpautop');
remove_filter('the_excerpt', 'wpautop');
add_filter( 'get_the_excerpt', 'wp_trim_excerpt', 20, 2 );
//remove_filter ('acf_the_field', 'wpautop');


/**
 * CSS FOR ACF PAGE TEMPLATE BACKEND
 * * */
add_action('admin_head', 'pagebg_custom_css');

function pagebg_custom_css() {
    echo '<style>    .special, .special * {background:#EEE;}   </style>';
}

/* * *********
 * REMOVING UNWANTED SCRIPTS
 */

remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action( 'wp_head', 'bs_shortcodes-css' );
remove_action( 'wp_head', 'bs_bootstrap-css' );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);

/////////////////////////////////////////
// CATEGORY ID IN BODY AND POST CLASS
////////////////////////////////
function category_id_class($classes) {
    global $post;
    foreach ((get_the_category($post->ID)) as $category)
        $classes [] = 'cat-' . $category->cat_ID . '-id';
    return $classes;
}

add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');


include_once('inc/sc.php');

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

/**
 * CUSTOM POST TYPES
 * **/
include_once('inc/cpt.php');
/****
 * EVENT LOAD 
 * ***/
  
function load_events($show=null){
    // print_r($_REQUEST); exit;

    $event_id = Tribe__Main::post_id_helper(); 
    $time_format = get_option( 'time_format', Tribe__Date_Utils::TIMEFORMAT );
    
    $the_args = array( 'post_type' => 'tribe_events','posts_per_page' => -1, 'orderby' => 'ID', 'order' => $order);
    $query = new WP_Query($the_args);
     while ($query->have_posts()): $query->the_post(); 
        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
        <?php   if(isset($show) || !empty($show) || $show != ""){
        if($show == 'asc' || $show == 'desc'){
                $order = $show;
        }elseif($show == 'past'){
            if( tribe_get_start_date( null, false ) > date('F.jS Y') ){
                $event_era = 'future';
                $filter_class = 'hidden';
            }else{
                $event_era = 'past';
                $filter_class = 'show';
            }
        }elseif($show == 'future'){
            if( tribe_get_start_date( null, false ) > date('F.jS Y') ){
                $event_era = 'future';
                $filter_class = 'show';
            }else{
                $event_era = 'past';
                $filter_class = 'hidden';
            }
        }elseif($show == 'latest'){
            if( tribe_get_start_date( null, false ) > date('F.jS Y') ){
                $event_era = 'future';
                $filter_class = 'show';
            }else{
                $event_era = 'past';
                $filter_class = 'hidden';
            }
        }else{
            if( tribe_get_start_date( null, false ) > date('F.jS Y') ){
                $event_era = 'future';
                $filter_class = 'show';
            }else{
                $event_era = 'past';
                $filter_class = 'hidden';
            } 
        }
    }else{
        if( tribe_get_start_date( null, false ) > date('F.jS Y') ){
            $event_era = 'future';
            $filter_class = 'show';
        }else{
            $event_era = 'past';
            $filter_class = 'hidden';
        } 
    }?>
            <div class="col-md-4 mt-4 mb-4 <?=($show=='all')?'':$filter_class;?> target">
            <div class="card">
                <div class="card-header d-flex justify-content-between"><a href="<?php echo the_permalink();?>"><?php echo get_the_title();?></a>
                    <!-- <i class="fa fa-heart-o" aria-hidden="true"></i> -->
                </div>
            <?php if(!empty($feat_image)):?><a class="feat_img_cont" href="<?php echo the_permalink();?>"><img src="<?php echo $feat_image[0];?>" class="card-img-top" alt="..."></a><?php endif;?>
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                    
                        <div>
                            <h5>LOCATION</h5>
                            <h6><?php echo tribe_get_venue() ?></h6>
                        </div>
                        <div>
                            <h5>TIME</h5>
                            <h6 style="text-transform:uppercase;"><?= tribe_get_start_date( null, false, $time_format );?></h6>
                            <h6><?php echo tribe_get_start_date( null, false );?>
                        
                        </h6>
                            <h5>TICKETS</h5>
                            <?php if ( tribe_get_cost() ) : ?><h6><?php echo tribe_get_cost( null, true ) ?>/person</h6><?php endif; ?>

                        </div>
                    </div>


                </div>
            </div>
        </div>
     <?php endwhile;
   wp_reset_query();
} 


/****
 * EXCERPT MORE
 * ***/
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more( $more ) {
    return '...';
}


/****
 * REMOVING POSTS(post type 'post')
 * ***/
function post_remove (){ 
   remove_menu_page('edit.php');
}
add_action('admin_menu', 'post_remove');



/****
 * APPLIED CSS TO ACF HINT
 * ***/
add_action('admin_head', 'cf_custom_css');

function cf_custom_css() {
  echo '<style>.hint::before {text-align: left;float: left;margin-right: 4px;color: #EEE;content: "ID: ";}.hint{font-style: italic;text-align: right;float: right;margin-right: 30px;color: #EEE;}</style>';
}



/****
 * SVG SUPPORT
 * ***/

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;

    return false;
}

if (current_user_can('administrator')) {
    add_filter('upload_mimes', 'cc_mime_types');
}

// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext' => $filetype['ext'],
        'type' => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

}, 10, 4);

function fix_svg() {
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}

add_action('admin_head', 'fix_svg');