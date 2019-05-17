<?php

// Bootstrap 4 NavBar
// https://github.com/mebishalnapit/bootstrap-navwalker
require get_template_directory() . '/bootstrap-navwalker.php';
register_nav_menus( array(
    'Main' => esc_html__( 'Primary', 'theme-textdomain' ),
) );

// Add featured image
add_theme_support( 'post-thumbnails' );

?>
