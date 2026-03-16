<?php
/**
 * Plugin Name: WP Advanced Lead Automation
 * Plugin URI:  https://github.com/jlcarrascof/wp-advanced-lead-automation
 * Description: A custom WordPress plugin built with OOP PHP that captures form leads, sanitizes data, and triggers external webhooks for automation via n8n.
 * Version:     1.0.0
 * Author:      Javier
 * Text Domain: wp-advanced-lead-automation
 * * @package WPAdvancedLeadAutomation
 */

// Seguridad básica: Evitar que alguien acceda a este archivo directamente desde la URL.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Aquí comenzaremos a escribir nuestra lógica...

// Registrar Custom Post Type: Leads
function wala_register_leads_cpt() {
    $labels = array(
        'name'                  => 'Leads',
        'singular_name'         => 'Lead',
        'menu_name'             => 'Leads',
        'add_new'               => 'Añadir Nuevo',
        'add_new_item'          => 'Añadir Nuevo Lead',
        'all_items'             => 'Todos los Leads',
        'search_items'          => 'Buscar Leads',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false, // IMPORTANTE: false para que no tengan URL pública
        'show_ui'            => true,  // Mostrar en el panel de administración
        'show_in_menu'       => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,    // Posición en el menú lateral
        'menu_icon'          => 'dashicons-id-alt', // Icono nativo
        'supports'           => array( 'title', 'custom-fields' ), // Solo título y campos personalizados
    );

    register_post_type( 'wala_lead', $args );
}

// Enganchamos nuestra función al evento 'init' de WordPress
add_action( 'init', 'wala_register_leads_cpt' );