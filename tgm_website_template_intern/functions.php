<?php
	// Register Nav Walker class_alias
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


	register_nav_menus(array(
		'primary' => __('Primary Menu' ),
	));

?>
