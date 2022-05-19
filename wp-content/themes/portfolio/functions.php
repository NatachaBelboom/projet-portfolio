<?php

/*require_once(__DIR__ . '/Menus/PrimaryMenuWalker.php');*/
require_once(__DIR__ . '/Menus/PrimaryMenuItem.php');
require_once(__DIR__ . '/Forms/BaseFormController.php');
require_once(__DIR__ . '/Forms/ContactFormController.php');
require_once(__DIR__ . '/Forms/Sanitizers/BaseSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/TextSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/EmailSanitizer.php');
require_once(__DIR__ . '/Forms/Validators/BaseValidator.php');
require_once(__DIR__ . '/Forms/Validators/RequiredValidator.php');
require_once(__DIR__ . '/Forms/Validators/EmailValidator.php');
require_once(__DIR__ . '/Forms/Validators/AcceptedValidator.php');

//lancer la session php

add_action('init', 'dw_init_php_session', 1);

function dw_init_php_session()
{
    if(!session_id()){
        session_start();
    }
}


// Désactiver l'éditeur "Gutenberg" de Wordpress
add_filter('use_block_editor_for_post', '__return_false');

// Activer les images sur les articles
add_theme_support('post-thumbnails');

// Enregistrer un "type de ressource" (custom post type) pour les voyage
register_post_type('project', [
    'label' => 'Projets',
    'labels' => [ //Ecraser des valeurs par defaut
        'name' => 'Projets',
        'singular_name' => 'Projet',
    ],
    'description' => "La ressource permettant de gérer les projets réalisés",
    'public' => true, //accessible dans l'interface admin (formulaire de contact: false)
    'menu_position' => 5,
    'menu_icon' => 'dashicons-code-standards',
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug' => 'projets'],
    'has_archive' => true,
]);
register_post_type('message', [
    'label' => 'Messages de contact',
    'labels' => [ //Ecraser des valeurs par defaut
        'name' => 'Messages de contact',
        'singular_name' => 'Message de contact',
    ],
    'description' => "Les messages envoyés par les utilisateurs via le formulaire de contact",
    'public' => false, //accessible dans l'interface admin (formulaire de contact: false)
    'show_ui' => true,
    'menu_position' => 10,
    'menu_icon' => 'dashicons-buddicons-pm',
    'capabilities' => [
        'create_posts' => false, //enlever le bouton add new
    ],
    'map_meta_cap' => true,
]);


register_nav_menu('primary', 'Emplacement de la navigation principale de haut de page');

// Définition de la fonction retournant un menu de navigation sous forme d'un tableau de lien niveau 0

function dw_get_menu_items($location)
{
    // Récuperer le menu qui correspond a l'emplacement souhaité

    $items = [];

    $locations = get_nav_menu_locations(); //fonction retourne un tableau de plusieurs emplacement

    if($locations[$location] ?? false){
        $menu = $locations[$location];

        // Récuperer tous les éléments du menu en question
        $posts = wp_get_nav_menu_items($menu);

        // Traiter chaque éléments du menu pour les transformer en objet
        foreach ($posts as $post){
            // Créer une instance d'un objet personnalisé à partir de $post

            $item = new PrimaryMenuItem($post);

            // Ajouter cette instance soit à $items (s'il s'agit d'un element de niveau 0), soit en tant que sous élément d'un item déja existant

            if($item->isSubItems()){
                //ajouter l'einstance comme enfant d'un item existant
                foreach ($items as $existing){
                    if($existing->isParentFor($item)){
                        $existing->addSubItem($item);
                    }
                }
            } else{

                $items[] = $item;
            }

        }
    }


    // Retourner les éléments de niveau 0
    return $items;

}


// enregistrer le traitement du formulaire de contact personnalisé
add_action('admin_post_submit_contact_form', 'dw_handle_submit_contact_form');

function dw_handle_submit_contact_form()
{
    $form = new ContactFormController($_POST);
}

function dw_get_contact_field_value($field){

    if(!isset($_SESSION['feedback_contact_form'])) {
        return '';
    }

    return $_SESSION['feedback_contact_form']['data'][$field] ?? '';
}

function dw_get_contact_field_error($field)
{
    if(! isset($_SESSION['feedback_contact_form'])) {
        return '';
    }

    if(! ($_SESSION['feedback_contact_form']['errors'][$field] ?? null)) {
        return '';
    }

    return '<p class="form__error">Problème : ' . $_SESSION['feedback_contact_form']['errors'][$field] . '</p>';
}

//Recuperer les modules pour la section module qui va sur toutes les pages
function dw_get_projects($count = 10)
{
    // 1. on instancie l'objet WP_QUERY
    $projects = new WP_Query([
        'post_type' => 'project',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => $count,
    ]);

    // 2. on retourne l'objet WP_QUERY
    return $projects;
}

//fonction permettant d'inclure des composants et d'y injecter des variables locales (scope de l'appel de fonction)
function dw_include(string $partial, array $variables = [])
{
    //$partial = 'post'
    // =>/Utilisateurs/.../wp-content/dw/partials/post.php

    extract($variables);
    include(__DIR__ . '/partials/' . $partial . '.php');
}

function dw_get_template_page(string $template)
{
    // 1. creer une wp-query
    $query = new WP_Query([
        'post_type' => 'page', // 2. filtrer sur le post type de type 'page'
        'post_status' => 'publish', // 3. Uniquement les pages publiées
        'meta_query' => [
            ['key' => '_wp_page_template', 'value' => $template . '.php'] // 4. Filtrer sur le type de template utilisé
        ]
    ]);

    return $query->posts[0] ?? null;    // 5. Retourner la premiere occurence pour cette requete (ou null)
}