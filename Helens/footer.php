 <footer>
 <p class="helen_customtxtFooter"><?php echo get_theme_mod('helenFooter_custom_text')?></p>
 <div class="soclialIcon-wrapper">
<a href="<?php echo get_theme_mod('helenFooter_FB_url')?>" class="socialIcon"><img src="<?php echo wp_get_attachment_url(get_theme_mod('helenFooter_socialicon_FB')) ?>" /></a>
<a href="<?php echo get_theme_mod('helenFooter_YT_url')?>" class="socialIcon"><img src="<?php echo wp_get_attachment_url(get_theme_mod('helenFooter_socialicon_YT')) ?>" /></a>
</div>
</footer>
<?php 
wp_footer();
?>
</body>
</html>