<?php

//Hides the admin bar in front-end
add_filter('show_admin_bar', '__return_false');

// Register custom navigation walker
require_once('modules/navwalker/wp_bootstrap_navwalker.php');

//Register primary menu
register_nav_menus( array(
    'primary' => __( 'Header left', 'www' ),
    'secondary' => __( 'Header right', 'www' )
) );

?>