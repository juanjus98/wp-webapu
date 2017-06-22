<?php
require_once('wp_bootstrap_navwalker.php'); //Fix para menus con bootstrap
register_nav_menus(array(
	'primary' => __( 'Menu superior', 'THEMENAME' ),
	'footer' => __( 'Menu Footer'),
	));
?>
