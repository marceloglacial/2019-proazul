<?php

//
// Bootstrap 4 NavBar
// https://github.com/mebishalnapit/bootstrap-navwalker
//
require get_template_directory() . '/bootstrap-navwalker.php';
register_nav_menus( array(
    'Main' => esc_html__( 'Primary', 'theme-textdomain' ),
) );

//
// Add featured image
//
add_theme_support( 'post-thumbnails' );

//
// https://www.daddydesign.com/wordpress/how-to-hide-the-wordpress-content-editor-on-specific-pages/
//
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  $pagetitle = get_the_title($post_id);
  if(($pagetitle == 'Página Inicial') or ($pagetitle == 'Home')) {
    remove_post_type_support('page', 'editor');
  }
}

?>
