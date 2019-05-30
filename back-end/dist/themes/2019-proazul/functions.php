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

  // Use fisrt image as thumbnail
  // https://wordpress.stackexchange.com/questions/60245/get-first-image-in-a-post
  function catch_that_image($post_id) {
    $post_content = get_post_field('post_content', $post_id);
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches);
    $first_img = $matches [1] [0];

    if(empty($first_img)){ //Defines a default image
      $first_img = get_template_directory_uri(). "/assets/img/placeholder.png";
    }
    return $first_img;
  }
?>
