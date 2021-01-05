<?php

/**
 * Initialise le custom post mypost
 *
 * @return void
 */
function custom_post_mypost() {
	$labels = array(
		'name'                  => _x( 'mypost', 'Post Type General Name', 'myTheme' ),
		'singular_name'         => _x( 'mypost', 'Post Type Singular Name', 'myTheme' ),
		'menu_name'             => __( 'mypost', 'myTheme' ),
		'name_admin_bar'        => __( 'mypost', 'myTheme' ),
		'archives'              => __( 'Archives mypost', 'myTheme' ),
		'attributes'            => __( 'Attributs mypost', 'myTheme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'myTheme' ),
		'all_items'             => __( 'Tous les mypost', 'myTheme' ),
		'add_new_item'          => __( 'Ajouter mypost', 'myTheme' ),
		'add_new'               => __( 'Nouveau', 'myTheme' ),
		'new_item'              => __( 'Nouveau mypost', 'myTheme' ),
		'edit_item'             => __( 'Editer mypost', 'myTheme' ),
		'update_item'           => __( 'Mettre à jour mypost', 'myTheme' ),
		'view_item'             => __( 'Voir mypost', 'myTheme' ),
		'view_items'            => __( 'Voir mypost', 'myTheme' ),
		'search_items'          => __( 'Rechercher mypost', 'myTheme' ),
		'not_found'             => __( 'Aucun mypost', 'myTheme' ),
		'not_found_in_trash'    => __( 'Aucun mypost dans la corbeille', 'myTheme' ),
		'featured_image'        => __( 'Image à la une', 'myTheme' ),
		'set_featured_image'    => __( 'Définir l\'image à la une', 'myTheme' ),
		'remove_featured_image' => __( 'Retirer l\'image à la une', 'myTheme' ),
		'use_featured_image'    => __( 'Utiliser comme image à la une', 'myTheme' ),
		'insert_into_item'      => __( 'Insérer dans le mypost', 'myTheme' ),
		'uploaded_to_this_item' => __( 'Téléverser dans le mypost', 'myTheme' ),
		'items_list'            => __( 'Liste des mypost', 'myTheme' ),
		'items_list_navigation' => __( 'Items list navigation', 'myTheme' ),
		'filter_items_list'     => __( 'Filter la liste des mypost', 'myTheme' ),
	);
	$args = array(
		'label'                 => __( 'mypost', 'myTheme' ),
		'description'           => __( 'Information sur les mypost', 'myTheme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array('myTaxonomy'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 1,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
        'menu_icon'		        => 'dashicons-screenoptions',
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'               => ['slug' => 'mypost-immobiliers-neufs', 'with_front' => false],
	);
	register_post_type( 'mypost', $args );

}
add_action( 'init', 'custom_post_mypost', 0 );

/**
 * Initialise les taxonomies pour le postype mypost
 *
 * @return void
 */
function add_mypost_taxonomies() {
	
	$labels_mypost_taxo = array(
		'name'              			=> _x( 'Taxo', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Taxo', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher Taxo'),
		'all_items'        			=> __( 'Tous / Toutes les Taxo'),
		'edit_item'         			=> __( 'Editer Taxo'),
		'update_item'       			=> __( 'Mettre à jour Taxo'),
		'add_new_item'     			=> __( 'Ajouter Taxo'),
		'new_item_name'     			=> __( 'Valeur Taxo'),
		'separate_items_with_commas'            => __( 'Séparer Taxo'),
		'menu_name'                             => __( 'Taxo'),
	);
	$args_mypost_taxo = array(
		'hierarchical'          => true,
		'labels'                => $labels_mypost_taxo,
		'has_archive'           => true,
        'public'                => true,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => ['slug' => 'taxo', 'with_front' => false],
	);
	register_taxonomy( 'taxo', 'mypost', $args_mypost_taxo );
        
}
add_action( 'init', 'add_programme_taxonomies', 0 );