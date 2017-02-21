<?php 

add_theme_support('post-thumbnails'); /*esto activa la opción de thumbnails en posts */


add_image_size('my-size', 200, 180, true); /*esto es para añadir una resolución personalizada 
											de las imagenes subidas. Si añades el parametro "true"
											activas la opción de cortar la imagen para tener un tamaño
											totalmente personalizado, sin ser proporcional al original.
											(NO TE APLASTA LA IMAGEN, CORTA)
											*/


function register_my_menus(){

	/* register_nav_menu('header-nav', __('Navegación del Header'));  Registra un menu(Slug, Titulo Dashboard)  */

	/* ESTO REGISTRA VARIOS MENÚS (Slug, Título menú Dashboard) */
	register_nav_menus(
			array(
				'menu-header' => __('Menú del encabezado'),
				'menu-footer' => __('Menú del footer')			)
		);
}

add_action('init', 'register_my_menus'); /* Accionar la función del registro de menús */


// Esta es la función que añade un SIDEBAR

function miplugin_register_sidebar(){
	register_sidebar(
		array(
			'id' => 'sidebar-footer',
			'name' => 'Sidebar del Footer',
			'description' => 'Sidebar donde colocar links del footer',
			'before_widget' => '<div class="sidebar__item">',
			'after_widget' => '</div>',
			'before_title' => '<strong>',
			'after_title' => '</strong>'
			)
		);
}

add_action('widgets_init', 'miplugin_register_sidebar');

function miplugin_register_sidebar2(){
	register_sidebar(
		array(
			'id' => 'sidebar-header',
			'name' => 'Sidebar del Header',
			'description' => 'Sidebar donde colocar links del header',
			'before_widget' => '<div class="sidebar__item">',
			'after_widget' => '</div>',
			'before_title' => '<strong>',
			'after_title' => '</strong>'
			)
		);
}

add_action('widgets_init', 'miplugin_register_sidebar2');


// Integración de Metaboxes con el plugin de metabox.io

add_filter( 'rwmb_meta_boxes', 'platzi_register_meta_boxes' );
function platzi_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'personal',
        'title'      => __( 'Personal Information', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Full name', 'textdomain' ),
                'desc'  => 'Format: First Last',
                'id'    => $prefix . 'fname',
                'type'  => 'text',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
            	'name'  => __( 'Description', 'textdomain' ),
            	'desc'  => 'Introduce la descripción',
            	'id'    => $prefix . 'fdescription',
            	'type'  => 'textarea',
            	'std'   => 'Descripción',
            	'class' => 'custom-class',
            ),
        )
    );
    // 2nd meta box
    $meta_boxes[] = array(
        'title'      => __( 'Media', 'textdomain' ),
        'post_types' => 'movie',
        'fields'     => array(
            array(
                'name' => __( 'URL', 'textdomain' ),
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
        )
    );
    return $meta_boxes;
}

?>