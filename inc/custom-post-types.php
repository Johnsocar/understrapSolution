<?php 
function cptui_register_my_cpts() {

/**
 * Post Type: games.
 */

$labels = [
    "name" => __( "games", "custom-post-type-ui" ),
    "singular_name" => __( "game", "custom-post-type-ui" ),
    "menu_name" => __( "My games", "custom-post-type-ui" ),
    "all_items" => __( "All games", "custom-post-type-ui" ),
    "add_new" => __( "Add new", "custom-post-type-ui" ),
    "add_new_item" => __( "Add new game", "custom-post-type-ui" ),
    "edit_item" => __( "Edit game", "custom-post-type-ui" ),
    "new_item" => __( "New game", "custom-post-type-ui" ),
    "view_item" => __( "View game", "custom-post-type-ui" ),
    "view_items" => __( "View games", "custom-post-type-ui" ),
    "search_items" => __( "Search games", "custom-post-type-ui" ),
    "not_found" => __( "No games found", "custom-post-type-ui" ),
    "not_found_in_trash" => __( "No games found in trash", "custom-post-type-ui" ),
    "parent" => __( "Parent game:", "custom-post-type-ui" ),
    "featured_image" => __( "Featured image for this game", "custom-post-type-ui" ),
    "set_featured_image" => __( "Set featured image for this game", "custom-post-type-ui" ),
    "remove_featured_image" => __( "Remove featured image for this game", "custom-post-type-ui" ),
    "use_featured_image" => __( "Use as featured image for this game", "custom-post-type-ui" ),
    "archives" => __( "game archives", "custom-post-type-ui" ),
    "insert_into_item" => __( "Insert into game", "custom-post-type-ui" ),
    "uploaded_to_this_item" => __( "Upload to this game", "custom-post-type-ui" ),
    "filter_items_list" => __( "Filter games list", "custom-post-type-ui" ),
    "items_list_navigation" => __( "games list navigation", "custom-post-type-ui" ),
    "items_list" => __( "games list", "custom-post-type-ui" ),
    "attributes" => __( "games attributes", "custom-post-type-ui" ),
    "name_admin_bar" => __( "game", "custom-post-type-ui" ),
    "item_published" => __( "game published", "custom-post-type-ui" ),
    "item_published_privately" => __( "game published privately.", "custom-post-type-ui" ),
    "item_reverted_to_draft" => __( "game reverted to draft.", "custom-post-type-ui" ),
    "item_scheduled" => __( "game scheduled", "custom-post-type-ui" ),
    "item_updated" => __( "game updated.", "custom-post-type-ui" ),
    "parent_item_colon" => __( "Parent game:", "custom-post-type-ui" ),
];

$args = [
    "label" => __( "games", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "Add games to our fantastic website ",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "games", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail", "excerpt" ],
];

register_post_type( "mbt_game", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
?>