<?php

/*
Plugin Name: DM Treatments
Plugin URI: http://www.designmissoula.com/
Description: This is not just a plugin, it makes WordPress better.
Author: Bradford Knowlton
Version: 1.6
Author URI: http://bradknowlton.com/
*/

add_action( 'init', 'register_cpt_treatment' );
function register_cpt_treatment() {
	
	$labels = array( 
        'name' => _x( 'Treatments', 'treatment' ),
        'singular_name' => _x( 'Treatment', 'treatment' ),
        'add_new' => _x( 'Add New', 'treatment' ),
        'add_new_item' => _x( 'Add New Treatment', 'treatment' ),
        'edit_item' => _x( 'Edit Treatment', 'treatment' ),
        'new_item' => _x( 'New Treatment', 'treatment' ),
        'view_item' => _x( 'View Treatment', 'treatment' ),
        'search_items' => _x( 'Search Treatments', 'treatment' ),
        'not_found' => _x( 'No treatments found', 'treatment' ),
        'not_found_in_trash' => _x( 'No treatments found in Trash', 'treatment' ),
        'parent_item_colon' => _x( 'Parent Treatment:', 'treatment' ),
        'menu_name' => _x( 'Treatments', 'treatment' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor' ), // , 'thumbnail', 'custom-fields' 
        // 'taxonomies' => array( 'medium' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-book',
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => false,
        'capability_type' => 'post'
    );
    register_post_type( 'treatment', $args );
	
		
}