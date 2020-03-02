<?php
wp_nav_menu(
	array(
		'theme_location' => 'main-menu',
		'menu_class' => 'navbar-nav mr-auto',
		'menu_id'  => 'customID',
		'container' => false,
		'depth'   => 5,
		'walker' => new WP_Bootstrap_Navwalker()
	)
);
?>