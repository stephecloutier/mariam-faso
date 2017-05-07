<?php

// Utiliser ce fichier pour inclure d'autres fonctions

// https://codex.wordpress.org/Plugin_API/Filter_Reference

add_action('init', 'mf_create_post_types');
add_filter('wp_title', 'custom_wp_title');
register_nav_menu('main', 'La navigation principale du site.');
add_theme_support('post-thumbnails');

/*
* Register custom post types during initialization
*/
function mf_create_post_types() {
    register_post_type('trip', [
        'label' => 'Voyages',
        'labels' => [
            'singular_name' => 'voyage',
            'add_new_item' => 'Ajouter un nouveau voyage'
        ],
        'description' => 'Permet d’administrer les voyages affichés sur le site',
        'public' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-palmtree'
    ]);
}


/*
    Hooks into wp_title() content formatting
    @check add_filter('wp_title')
*/

function custom_wp_title($title) {
    if(empty($title)) {
        $title = 'Bienvenue';
    }
    $title .= ' | ' . get_bloginfo('name');
    return trim($title);
}


/*
    Retrieves the absolute URI for given asset in this theme
*/

function get_theme_asset($src = '') {
    return get_template_directory_uri() . '/assets/' . trim($src, '/');
}

/*
    Displays the absolute URI for given asset in this theme
*/


function theme_asset($src = '') {
    echo get_theme_asset($src);
}

/*
 * Get navigation links (objects) for given location
*/
function mf_get_nav_items($location) {
    $id = mf_get_nav_id($location);
    $nav = [];
    $children = [];
    if(!$id) return $nav;

    foreach(wp_get_nav_menu_items($id) as $object) {
        $item = new stdClass();
        $item->url = $object->url;
        $item->label = $object->title;
        $item->children = [];

        if($object->menu_item_parent) $children[] = $item;
        else $nav[$object->ID] = $item;
    }
    foreach($children as $item) {
        $nav[$item->parent]->children[] = $item;
    }
    return $nav;
}

/*
* Get navigation id from given location
*/
function mf_get_nav_id($location) {
    foreach(get_nav_menu_locations() as $navLocation => $id) {
        if($navLocation == $location) {
            return $id;
        }
    }
    return false;
}


/*
*  Return custom excerpt for given length
*/

function mf_get_the_excerpt($length = null) {
    $excerpt = get_the_excerpt();
    if(is_null($length) || strlen($excerpt) <= $length) {
        return $excerpt;
    }

    $string = '';
    $words = explode(' ', $excerpt);
    foreach($words as $word) {
        // +2 is needed in order to include the next space and the &hellip; in the character count.
        if(strlen($string) + strlen($word) + 2 > $length) break;
        $string .= ' ' . $word;
    }
    return trim($string) . '&hellip;';
}

/*
*  Output custom excerpt for given length
*/

function mf_the_excerpt($length = null) {
    echo mf_get_the_excerpt($length);
}
