<?php 
function helen_theme_support($wp_customize) {
add_theme_support('title-tag');
add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'helen_theme_support');

function helen_customize($wp_customize) {
    $wp_customize->add_section('upperImg', array(
        'title' => 'Mobile controls'        
    ));
    $wp_customize->add_setting('barsSrc');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'imgBarsPlacement', array(
        'label' => 'Image',
        'section' => 'upperImg',
        'settings' => 'barsSrc',       
    )));
    $wp_customize->add_setting('closeSrc');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'imgClosePlacement', array(
        'label' => 'Image',
        'section' => 'upperImg',
        'settings' => 'closeSrc',
    )));
    $wp_customize->add_section("Videosection", array(
        "title" => __("Home page video", "customizer_ads_sections"),
        "priority" => 0,
    ));

$wp_customize->add_setting( 'helen_video_upload');

$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'helen_video_upload',
   array(
      'label' => __( 'Default Media Control' ),
      'description' => esc_html__( 'This is the description for the Media Control' ),
      'section' => 'Videosection',
      'mime_type' => 'video',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );
$wp_customize->add_section("LogoTxt", array(
        "title" => ("Text logo")
    ));
$wp_customize->add_setting('LogoTxtSetting');

$wp_customize->add_control('LogoTxtControll', array(
        'label' => 'Logo in text variation',
        'type' => 'textarea',
        'section' => 'LogoTxt',
        'settings' => 'LogoTxtSetting'
    ));
    $wp_customize->add_section('helenFooter', array(
        'title' => 'Custom footer'
    ));
    $wp_customize->add_setting('helenFooter_custom_text');
    $wp_customize->add_control('helenFooter_custom_text', array(
        'label' => 'Custom text',
        'type' => 'textarea',
        'section' => 'helenFooter',
        'settings' => 'helenFooter_custom_text'
    ));
    $wp_customize->add_setting('helenFooter_socialicon_FB');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'helenFooter_socialicon_FB_control', array(
        'label' => 'FB Icon',
        'mime_type' => 'image',
        'section' => 'helenFooter',
        'settings' => 'helenFooter_socialicon_FB'
    )));
    $wp_customize->add_setting('helenFooter_FB_url');
    $wp_customize->add_control('helenFooter_FB_url', array(
        'label' => 'Facebook profile link',
        'type' => 'url',
        'section' => 'helenFooter',
        'settings' => 'helenFooter_FB_url'
    ));
    $wp_customize->add_setting('helenFooter_socialicon_Instagram');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'helenFooter_socialicon_Instagram_control', array(
        'label' => 'Instagram Icon',
        'mime_type' => 'image',
        'section' => 'helenFooter',
        'settings' => 'helenFooter_socialicon_Instagram'
    )));
    $wp_customize->add_setting('helenFooter_socialicon_Twitter');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'helenFooter_socialicon_Twitter_control', array(
        'label' => 'Twitter Icon',
        'mime_type' => 'image',
        'section' => 'helenFooter',
        'settings' => 'helenFooter_socialicon_Twitter'
    )));
    $wp_customize->add_setting('helenFooter_socialicon_YT');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'helenFooter_socialicon_YT_control', array(
        'label' => 'YouTube Icon',
        'mime_type' => 'image',
        'section' => 'helenFooter',
        'settings' => 'helenFooter_socialicon_YT'
    )));
    $wp_customize->add_setting('helenFooter_YT_url');
    $wp_customize->add_control('helenFooter_YT_url_control', array(
        'label' => 'YouTube link',
        'type' => 'url',
        'section' => 'helenFooter',
        'settings' => 'helenFooter_YT_url'
    ));
}

add_action('customize_register', 'helen_customize' );

function helen_menu() {
    $locations = array (
        'primary' => "Top",
    );
    register_nav_menus($locations);
}
add_action('init', 'helen_menu');

function helen_register_style(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('helen-style', get_template_directory_uri() . "/style.css", array(),$version,'all');
}
add_action('wp_enqueue_scripts', 'helen_register_style');

function helen_register_scripts(){    
    wp_enqueue_script('helen-js', get_template_directory_uri() . "/assets/js/main.js", array(),true);
}
add_action('wp_enqueue_scripts', 'helen_register_scripts');
?>

<?php 
// To enable the use shortcode
add_filter( 'widget_text', 'do_shortcode' );
?>

