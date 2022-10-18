<html>
<head>
<?php 
wp_head();
?>

</head>
<body>
<a class="helen_customtxtLogo" href="/home"><?php echo get_theme_mod('LogoTxtSetting')?></a>
<a href="javascript:void(0);" onclick="mobileMenu()" class="menu_bars"><img class="bars visible" src="<?php echo wp_get_attachment_url(get_theme_mod('barsSrc')) ?>" /><img class="closeMob" src="<?php echo wp_get_attachment_url(get_theme_mod('closeSrc')) ?>" /></a>

 
<?php     
wp_nav_menu(
    
    array(
        'menu' => 'Top',
        'container' => '',
        'theme_location' => 'primary',
        'items_wrap' => '<ul id="helen_menu_id" class="helen_menu block">%3$s</ul>'
    )
);


    ?>