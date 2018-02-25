<?php

// Utiliser ce fichier pour inclure d'autres fonctions

// https://codex.wordpress.org/Plugin_API/Filter_Reference

// Image compression
    // original images
//add_filter( 'wp_generate_attachment_metadata', mf_compress_image, 10, 2 );

add_action('init', 'mf_register_types');
add_action( 'publish_event', 'mf_create_event_page' );
add_filter('wp_title', 'custom_wp_title');

// image thumbnails \\
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('500', 500, auto);
}

// ACF
add_action('acf/init', 'my_acf_init');

// PAGINATION CLASSES
add_filter('wp_pagenavi_class_previouspostslink', 'theme_pagination_class');
add_filter('wp_pagenavi_class_nextpostslink', 'theme_pagination_class');
add_filter('wp_pagenavi_class_current', 'theme_pagination_class');

// NAVIGATION
register_nav_menu('main', 'La navigation principale du site.');
add_theme_support('post-thumbnails');


// form

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
});

// external links in wysiwyg
add_filter('acf_the_content', 'mf_add_target_blank');


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
        'menu_icon' => 'dashicons-calendar-alt',
        'hierarchical' => true,
    ]);

    register_post_type('project', [
        'label' => 'Projets',
        'labels' => [
            'singular_name' => 'projet',
            'add_new_item' => 'Ajouter un nouveau projet'
        ],
        'description' => 'Permet d’administrer les projets affichés sur le site',
        'public' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-portfolio'
    ]);

    register_post_type('news', [
        'label' => 'Actualité',
        'labels' => [
            'singular_name' => 'actualité',
            'add_new_item' => 'Ajouter une nouvelle actualité'
        ],
        'description' => 'Permet d’administrer l\'actualité du site',
        'public' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-pressthis'
    ]);

    register_post_type('article', [
        'label' => 'Articles de presse',
        'labels' => [
            'singular_name' => 'article de presse',
            'add_new_item' => 'Ajouter un nouvel article de presse'
        ],
        'description' => 'Permet d’administrer les articles de presse affichés sur le site',
        'public' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-admin-links'
    ]);

/*
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
*/
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
 *  Return custom excerpt from given field for given length
*/
function mf_get_the_excerpt($field, $toGet = true, $length = null) {
    $excerpt = get_field($field);
    if(!$toGet) $excerpt = $field;
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
*  Output custom excerpt from given field for given length
*/
/*
function mf_the_excerpt($length = null) {
    echo mf_get_the_excerpt($length);
}
*/

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
    if(get_field($fieldName)) $image = get_field($fieldName);
    if(get_sub_field($fieldName)) $image = get_sub_field($fieldName);
    if(!get_field($fieldName) &&!get_sub_field($fieldName)) $image = $fieldName;
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
        'meta_value' => 'template-parts/' . $templateName,
        'hierarchical' => 0
    ));


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

/*
 * Check if bcn_display exists, then displays it
*/
function mf_display_breadcrumb($return = false, $linked = true, $reverse = false, $force = false) {
    if(function_exists('bcn_display_list')) {
        bcn_display_list($return, $linked, $reverse, $force);
    }
}

/*
 * Function to add class to pagination elements
*/

function theme_pagination_class($class_name) {
  switch($class_name) {
    case 'previouspostslink':
      $class_name = 'pagination__control-link pagination__control-link--previous';
      break;
    case 'nextpostslink':
      $class_name = 'pagination__control-link pagination__control-link--next';
      break;
    case 'current':
      $class_name = 'pagination__current';
      break;
  }
  return $class_name;
}

/*
 * Function to initiate some ACF settings
*/

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAiHOHGennwjYldHEzhXL7ae4sfWIz32ew');
}

/*
 * Function to get url of static google map
*/

function mf_get_static_google_map($lat, $lng, $zoom = 15, $maptype = 'roadmap', $width = 600, $height = 400) {
    return 'https://maps.googleapis.com/maps/api/staticmap?center=' .  $lat . ',' . $lng . '&zoom=' . $zoom . '&size=' . $width . 'x' . $height . '&maptype=' . $maptype . '&markers='  .  $lat . ',' . $lng .  '&key=AIzaSyAiHOHGennwjYldHEzhXL7ae4sfWIz32ew';
}

/*
 * Function to remove <p> tags from given fields (to use in heading element)
*/

function mf_remove_p_tags($field) {
    $newString = str_replace(['<p>', '</p>'], ' ', $field);
    return trim($newString);
}

/*
 * Function to remove all tags from given fields (to use in heading element not on single page)
*/

function mf_remove_all_tags($field) {
    $newString = str_replace(['<p>', '</p>'], ' ', $field);
    $newString = preg_replace('/<.*?>/', '', $newString);
    return trim($newString);
}

/*
 * Function to add target="_blank" to external links of acf content
*/
function mf_add_target_blank($content) {
    $newContent = str_replace('<a', '<a target="_blank"', $content);
    return $newContent;
}



/*
 * Function to compress image
*/
function mf_compress_image( $metadata, $attachment_id ) {
    $file = get_attached_file( $attachment_id );
    $type = get_post_mime_type( $attachment_id );

    // Target jpeg images
    if( in_array( $type, [ 'image/jpg', 'image/jpeg' ] ) )
    {
        // reduce image size
        mf_reduce_image_size($file, 1400, 1400);

        // Check for a valid image editor
        $editor = wp_get_image_editor( $file );
        if( ! is_wp_error( $editor ) )
        {
            // Set the new image quality
            $result = $editor->set_quality( 80 );

            // Re-save the original image file
            if( ! is_wp_error( $result ) )
                $editor->save( $file );
        }
    }
    return $metadata;
}

/*
 * Function to reduce image size with given width and height
*/

function mf_reduce_image_size($path, $max_width, $max_height) {
    list($width_orig, $height_orig) = getimagesize($path);

    $ratio_orig = $width_orig / $height_orig;
    $ratio_new = $max_width / $max_height;

    if($width_orig > $max_width || $height_orig > $max_height) {
        if($ratio_new > $ratio_orig) {
            $max_width = $max_height * $ratio_orig;
        } else {
            $max_height = $max_width / $ratio_orig;
        }
    } else {
        $max_width = $width_orig;
        $max_height = $height_orig;
    }

    $image_new = imagecreatetruecolor($max_width, $max_height);
    //$image = imagecreatetruecolor($max_width, $max_height);
    $image = imagecreatefromjpeg($path);


    imagecopyresampled($image_new, $image, 0, 0, 0, 0, $max_width, $max_height, $width_orig, $height_orig);

    imagejpeg($image_new, $path, 100);
}
