<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Product Type Taxonomy
function inhabitent_tax_product_type() {

	$labels = array(
		'name'                       => 'Product Types',
		'singular_name'              => 'Product Type',
		'menu_name'                  => 'Product Type',
		'all_items'                  => 'All Product Types',
		'parent_item'                => 'Parent Product Type',
		'parent_item_colon'          => 'Parent Product Type:',
		'new_item_name'              => 'New Product Name',
		'add_new_item'               => 'Add New Product Type',
		'edit_item'                  => 'Edit Product',
		'update_item'                => 'Update Product',
		'view_item'                  => 'View Product',
		'separate_items_with_commas' => 'Separate products with commas',
		'add_or_remove_items'        => 'Add or remove products',
		'choose_from_most_used'      => 'Choose from the most used products',
		'popular_items'              => 'Popular Product Types',
		'search_items'               => 'Search Product Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Product Type list',
		'items_list_navigation'      => 'Product Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'products' ), $args );

}
add_action( 'init', 'inhabitent_tax_product_type', 0 );