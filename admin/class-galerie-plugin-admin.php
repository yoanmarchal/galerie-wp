<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @author     Yoan Marchal <marchalyoan@gmail.com>
 */
class galerie_plugin_Admin
{
    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     *
     * @var string The ID of this plugin.
     */
    private $galerie_plugin;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     *
     * @var string The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     *
     * @param      string    $galerie_plugin       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */

    /**
     * Holds the values to be used in the fields callbacks.
     */
    private $options;

    public function __construct($galerie_plugin, $version)
    {
        $this->galerie_plugin = $galerie_plugin;
        $this->version = $version;
        add_action('init', [$this, 'init_cpt_galerie']);
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /*
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in galerie_plugin_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The galerie_plugin_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->galerie_plugin, plugin_dir_url(__FILE__) . 'css/galerie-plugin-admin.css', [], $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /*
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in galerie_plugin_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The galerie_plugin_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->galerie_plugin, plugin_dir_url(__FILE__) . 'js/galerie-plugin-admin.js', ['jquery'], $this->version, false);
    }

    public function init_cpt_galerie()
    {
        $labels = [
            'name' => _x('galerie', 'Post Type General Name', 'galerie-plugin'),
            'singular_name' => _x('Galerie', 'Post Type Singular Name', 'galerie-plugin'),
            'menu_name' => __('Galerie', 'galerie-plugin'),
            'parent_item_colon' => __('Parent Galerie:', 'galerie-plugin'),
            'all_items' => __('All galerie', 'galerie-plugin'),
            'view_item' => __('View Galerie', 'galerie-plugin'),
            'add_new_item' => __('Add New Galerie', 'galerie-plugin'),
            'add_new' => __('New Galerie', 'galerie-plugin'),
            'edit_item' => __('Edit Galerie', 'galerie-plugin'),
            'update_item' => __('Update Galerie', 'galerie-plugin'),
            'search_items' => __('Search galerie', 'galerie-plugin'),
            'not_found' => __('No galerie found', 'galerie-plugin'),
            'not_found_in_trash' => __('No galerie found in Trash', 'galerie-plugin'),
        ];

        $args = [
            'label' => __('galerie', 'galerie-plugin'),
            'description' => __('galerie', 'galerie-plugin'),
            'labels' => $labels,
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'],
            'taxonomies' => ['category', 'post_tag'],
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => false,
            'show_in_admin_bar' => true,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-share',
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        ];

        register_post_type('galerie', $args);
    }
}
