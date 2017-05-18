<?php

// Utiliser ce fichier pour inclure d'autres fonctions

// https://codex.wordpress.org/Plugin_API/Filter_Reference

add_action('init', 'mf_register_types');
add_action( 'publish_event', 'mf_create_event_page' );
add_filter('wp_title', 'custom_wp_title');
register_nav_menu('main', 'La navigation principale du site.');
add_theme_support('post-thumbnails');


// load_theme_textdomain()

/*
* Register custom post types during initialization
*/
function mf_register_types() {
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

    register_post_type('event', [
        'label' => 'Évènements',
        'labels' => [
            'singular_name' => 'évènement',
            'add_new_item' => 'Ajouter un nouvel évènement'
        ],
        'description' => 'Permet d’administrer les évènements affichés sur le site',
        'public' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-calendar-alt'
    ]);

    register_taxonomy('places', 'trip', [
        'label' => 'Endroits',
        'labels' => [
            'singular_name' => 'Endroit',
            'edit_item' => 'Éditer l’endroit',
            'add_new_item' => 'Ajouter un nouvel endroit'
        ],
        'description' => 'Permet de préciser un cnontinent, un pays ou une ville pour un voyage donné',
        'public' => true,
        'hierarchical' => true
    ]);
}


/*
    Hooks into wp_title() content formatting
    @check add_filter('wp_title')
*/

function custom_wp_title($title) {
    if(empty($title)) {
        $title = 'Accueil';
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
    if(!$id) {
        return $nav;
    }

    foreach(wp_get_nav_menu_items($id) as $object) {
        $item = new stdClass();
        $item->url = $object->url;
        $item->label = $object->title;
        $item->parent = intval($object->menu_item_parent);
        $item->children = [];

        if($item->parent){
            $children[] = $item;
        } else {
            $nav[$object->ID] = $item;
        }
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

/*
 * Return a list of visited places for given trip.
*/
function mf_get_the_places($glue = '', $prefix = '', $suffix = '', $empty = '') {
    $terms = wp_get_post_terms(get_the_ID(), 'places', ['orderby' => 'name', 'order' => 'ASC', 'fields' => 'all']);
    if(!$terms) return $empty;
    return implode($glue, array_map(function($term) use ($prefix, $suffix){
        return str_replace(':type', get_field('placeType', $term), $prefix) . $term->name . $suffix;
    }, $terms));
}

/*
 * Output a list of visited places for given trip.
*/
function mf_the_places($glue = '', $prefix = '', $suffix = '', $empty = '') {
    echo mf_get_the_places($glue, $prefix, $suffix, $empty);
}

/*
 * Return plural or singular form of a word based on current number
*/

function mf_chose_singularity($number, $singular, $plural, $empty = null) {
    switch(intval($number)) {
        case 0:
            if(is_null($empty)) break;
            return str_replace(':number', $number, $empty);
            break;
        case 1:
            return str_replace(':number', $number, $singular);
            break;
        default:
            return str_replace(':number', $number, $plural);
            break;
    }
}

/*
 * Return string corresponding to the alt from given ACF image
*/

function mf_get_image_alt($fieldName) {
    $image = get_field($fieldName);
    if(!$image) return false;
    if($image['alt']) return $image['alt'];
    if($image['description']) return $image['description'];
    if($image['caption']) return $image['caption'];
    return $image['title'];
}


/*
 * Get page ID from template name
*/
function mf_get_page_id_from_template($templateName) {
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $templateName
    ));
    // vérifier autre fonction que get_pages
    foreach($pages as $page){
        return $page->ID;
    }
}

/*
 * Get page url from ID
*/
function mf_get_page_url($templateName) {
    return get_page_link(mf_get_page_id_from_template($templateName));
}
