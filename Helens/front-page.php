<?php 
get_header();
?>



<div class="wrap_All">
<div class="helen_movie">
    <?php the_field('heroclip'); ?>
</div>
<div class="hero-home"> 
    <div class="home-logo"><?php if(function_exists('the_custom_logo')) {
the_custom_logo();
    } ?></div>
<video loop autoplay muted class="video-home" src="<?php echo wp_get_attachment_url(get_theme_mod('helen_video_upload')) ?>"></video>
</div>
<?php 
if(have_posts()){
    while(have_posts()) {
        the_post();
        the_content();
    }
}

?>


</div>
<?php 
get_footer();
?>
