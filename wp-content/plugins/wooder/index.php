<?php /*
   Plugin Name: Wooder
   Plugin URI: https://www.genetechsolutions.com/
   Description:A plugin to add products in wooder
   Version: 1.0
   Author: Batool Aamir */


   // Register Custom Wooder
function wooder_post_type() {

	$labels = array(
		'name'                  => _x( 'Wooders', 'Wooder General Name', 'wooder' ),
		'singular_name'         => _x( 'Wooder', 'Wooder Singular Name', 'wooder' ),
		'menu_name'             => __( 'Wooders', 'wooder' ),
		'name_admin_bar'        => __( 'Wooder', 'wooder' ),
		'archives'              => __( 'Item Archives', 'wooder' ),
		'attributes'            => __( 'Item Attributes', 'wooder' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wooder' ),
		'all_items'             => __( 'All Items', 'wooder' ),
		'add_new_item'          => __( 'Add New Item', 'wooder' ),
		'add_new'               => __( 'Add New', 'wooder' ),
		'new_item'              => __( 'New Item', 'wooder' ),
		'edit_item'             => __( 'Edit Item', 'wooder' ),
		'update_item'           => __( 'Update Item', 'wooder' ),
		'view_item'             => __( 'View Item', 'wooder' ),
		'view_items'            => __( 'View Items', 'wooder' ),
		'search_items'          => __( 'Search Item', 'wooder' ),
		'not_found'             => __( 'Not found', 'wooder' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wooder' ),
		'featured_image'        => __( 'Featured Image', 'wooder' ),
		'set_featured_image'    => __( 'Set featured image', 'wooder' ),
		'remove_featured_image' => __( 'Remove featured image', 'wooder' ),
		'use_featured_image'    => __( 'Use as featured image', 'wooder' ),
		'insert_into_item'      => __( 'Insert into item', 'wooder' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wooder' ),
		'items_list'            => __( 'Items list', 'wooder' ),
		'items_list_navigation' => __( 'Items list navigation', 'wooder' ),
		'filter_items_list'     => __( 'Filter items list', 'wooder' ),
	);
	$args = array(
		'label'                 => __( 'Wooder', 'wooder' ),
		'description'           => __( 'Wooder Description', 'wooder' ),
		'labels'                => $labels,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'post',
        "rewrite"               => [ "slug" => "wooder"],
		"query_var"             => true,
		"supports"              => [ "title", "editor", "thumbnail", "revisions", "author","excerpt" ],
	);
	register_post_type( 'wooder', $args );

}
add_action( 'init', 'wooder_post_type');

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_categories_taxonomy');
 
function create_categories_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('categories',array('wooder'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categories' ),
  ));

}


  function callback_recent_product(){
	  $batool = array(
		  "post_type" => "wooder",
		  "order_by" =>"id",
		  "order" =>"DESC",
		  "post_per_page" => 2
	  );



$query= new WP_Query($batool);

$html='';
if($query -> have_posts() ): 
	while($query -> have_posts()) : ($query -> the_post());
		$html .='<h2><a href="'.get_the_permalink().'"target="_blank">'.get_the_title().'</a></h2>';
		$html .='<p>'.get_the_content().'</p>';
	endwhile;
endif;
return $html;

  }

add_shortcode('print_recent_product','callback_recent_product');



/*
============================================================================================================= */


function wooder_category($atts){

    $atts = shortcode_atts(
        array(
            'id'  => false,
        ),
        $atts,
        'wooder_category'
    );
	
    $query = new WP_Query( array(
        'post_type' => 'wooder',
        'posts_per_page' => -1,
        'order' => 'desc',
        'orderby' => 'date'
    ) );
	
	$html = "";

	if($query->have_posts()) : // : = { 
		while($query->have_posts()) : ($query->the_post());
			$html .= "<h2>".get_the_title()."</h2>"; 
			$html .= "<p>".get_the_content()."</p>"; 
		endwhile;
	endif; // endif = }
	return $html;
}
 
add_shortcode('wooder','wooder_category');

?>