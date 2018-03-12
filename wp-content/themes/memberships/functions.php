<?php

////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

    $themename = "Make.co WP Theme";
    $developer_uri = "https://github.com/Make-Magazine";
    $version = '1.0';
    load_theme_textdomain( 'devdmbootstrap3', get_template_directory() . '/languages' );



////////////////////////////////////////////////////////////////////
// Define our current Version number using the stylesheet version
////////////////////////////////////////////////////////////////////
    function my_wp_default_styles($styles) {
      $my_theme = wp_get_theme();
      $my_version = $my_theme->get('Version');
      $styles->default_version = $my_version;
    }
    add_action("wp_default_styles", "my_wp_default_styles");



////////////////////////////////////////////////////////////////////
// Add admin.css enqueue
////////////////////////////////////////////////////////////////////

    function devdm_theme_style() {
        wp_enqueue_style('devdm-theme', get_template_directory_uri() . '/css/admin.css');
    }
    add_action('admin_enqueue_scripts', 'devdm_theme_style');


////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css and bootstrap.css)
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_stylesheets() {
        //wp_enqueue_style('stylesheet', get_stylesheet_uri());
        wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', '', 'all' );
        wp_enqueue_style('google-font-body', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700', '', 'all' );
        wp_enqueue_style('font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', '', 'all' );
        wp_enqueue_style('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/css/jquery.fancybox.min.css', '', 'all');
        wp_enqueue_style('style.css', get_template_directory_uri() . '/css/style.css');
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_stylesheets');


////////////////////////////////////////////////////////////////////
// Register Bootstrap JS with jquery
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_js() {
        wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '', true );
        wp_enqueue_script('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/js/jquery.fancybox.min.js', array('jquery'), '', true );
        wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/min/scripts.min.js?v=1.5', array('jquery'), '', true );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_js');


////////////////////////////////////////////////////////////////////
// Add Title Tag Support with Regular Title Tag injection Fall back.
////////////////////////////////////////////////////////////////////

    function devdmbootstrap3_title_tag() {
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'devdmbootstrap3_title_tag' );

    if(!function_exists( '_wp_render_title_tag')) {

        function devdmbootstrap3_render_title() {
            ?>
            <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php
        }
        add_action( 'wp_head', 'devdmbootstrap3_render_title' );

    }

////////////////////////////////////////////////////////////////////
// Register Custom Navigation Walker include custom menu widget to use walkerclass
////////////////////////////////////////////////////////////////////

    require_once('lib/wp_bootstrap_navwalker.php');

////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

    register_nav_menus(
        array(
            'main_menu' => 'Main Menu'
        )
    );

////////////////////////////////////////////////////////////////////
// Add support for a featured image and the size
////////////////////////////////////////////////////////////////////

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(300,300, true);

////////////////////////////////////////////////////////////////////
// Adds RSS feed links to for posts and comments.
////////////////////////////////////////////////////////////////////

    add_theme_support( 'automatic-feed-links' );


////////////////////////////////////////////////////////////////////
// Use Jetpack Photon if it exists, else use original photo
////////////////////////////////////////////////////////////////////

function get_resized_remote_image_url($url, $width, $height, $escape = true) {
    if (class_exists('Jetpack') && Jetpack::is_module_active('photon')) {
        $width = (int)$width;
        $height = (int)$height;

// Photon doesn't support redirects, so help it out by doing http://foobar.wordpress.com/files/ to http://foobar.files.wordpress.com/
        if (function_exists('new_file_urls'))
            $url = new_file_urls($url);

            $thumburl = jetpack_photon_url($url, array(
            'resize' => array($width, $height),
            'strip' => 'all',
        ));

        return ($escape) ? esc_url($thumburl) : $thumburl;
    } else{
      return $url;
    }
}


////////////////////////////////////////////////////////////////////
// Adds the Youtube inside Fancybox modal
// To use: [youtube-modal "wnnWrLt_RCo"]
// Place YT id in shortcade
////////////////////////////////////////////////////////////////////

add_shortcode('youtube-modal', 'youtube_shortcode_modal'); 

function youtube_shortcode_modal($atts) {  

  if(!isset($atts[0])) return;
  $id = strip_tags($atts[0]);
  ob_start();
  ?>

    <a class="fancytube fancybox.iframe" href="https://www.youtube.com/embed/<?php echo $id; ?>?autoplay=1">
      <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $id; ?>/mqdefault.jpg" alt="Youtube Video" />
      <i class="fa fa-play-circle-o fa-3x" aria-hidden="true"></i>
    </a>

  <?php
  return ob_get_clean();
}


