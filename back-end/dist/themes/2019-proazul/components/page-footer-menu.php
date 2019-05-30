<?php
$menus = get_terms('nav_menu');
foreach($menus as $menu){
    if ($menu->name != 'Main') {
?>
        <div class="col-12 col-lg">
            <?php
                wp_nav_menu( array(
                    'menu'           => $menu->name,
                    'container'      => false,
                ) );
            ?>
        </div>
<?php 
    }
} 
?>
