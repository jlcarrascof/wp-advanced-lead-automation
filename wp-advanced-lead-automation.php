<?php
/**
 * Plugin Name: WP Advanced Lead Automation
 * Plugin URI:  https://github.com/tu-usuario/wp-advanced-lead-automation
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