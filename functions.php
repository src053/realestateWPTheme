<?php 

function generic_template() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'generic_template' );


// Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
 ));

// Get Top Ancestor
function get_top_anc_id() {

    global $post;

    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors( $post->ID ));
        return $ancestors[0];

    }

    return $post->ID;
}
?>


