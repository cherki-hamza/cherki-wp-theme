<?php
wp_nav_menu(
	array(
		'theme_location' => 'top-right-menu',
		'menu_class' => 'navbar-nav mr-auto  mr-2',
		'menu_id'  => 'customID',
		'container' => false,
		'depth'   => 5,
		'walker' => new WP_Bootstrap_Navwalker()
	)
);
?>