<?php
/* Dans wordpress, les développeurs ne sont pas très soucieux de la structure
des fichiers source. Visiblement, ils ont l'habitude de mélanger "le programme principal"
et les déclarations de fonctions. Alors, faisons comme eux car il faut bien
s'adapter à l'écosystème dans lequel on développe ;)
*/

// Chargement de la feuille de style du thème parent
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Création du "Custom Post Type" pour les événements
function evenements_init() {
    $args = array(
      'label' => 'Evenements',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'evenements'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            'editor',
            'date',
            'custom-fields',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'evenements', $args );
}
add_action( 'init', 'evenements_init' );

// Ajout du champ custom 'date-evenement' à l'API
function rest_add_date_evenement() {
    register_rest_field( 'evenements',
        'date-evenement',
        array(
            'get_callback'  => 'rest_get_date_evenement',
            'update_callback'   => null,
            'schema'            => null,
         )
    );
}
function rest_get_date_evenement( $object, $field_name, $request ) {
    return(get_post_meta($object['id'], 'date-evenement', true));
}
add_action( 'rest_api_init', 'rest_add_date_evenement' );

