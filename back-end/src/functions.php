<?php
require get_template_directory() . '/bootstrap-navwalker.php';

register_nav_menus( array(
    'Main' => esc_html__( 'Primary', 'theme-textdomain' ),
) );
?>
