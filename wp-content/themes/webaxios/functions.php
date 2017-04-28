<?php 
/*function register_my_menu() {
		register_nav_menu('top-menu', __('Menú Superior'));
	}

	add_action('init', 'register_my_menu');*/
	register_nav_menus(array(
		'top-menu' => 'Menú Superior',
		));

	register_sidebar(array(
			'name' => __('Widget del header'),
			'id' => 'sidebar-header',
			'description' => __('Este widget es para los iconos de redes sociales'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>'
		));

	add_theme_support('post-thumbnails');
	add_image_size( 'consejos', '150', '150',  true);

	wp_localize_script('mylib', 'WPURLS', array( 'siteurl' => get_option('siteurl') ));
?>
