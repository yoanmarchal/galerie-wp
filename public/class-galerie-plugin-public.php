<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @author     Yoan Marchal <marchalyoan@gmail.com>
 */
class galerie_plugin_Public
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
     * @param string $galerie_plugin The name of the plugin.
     * @param string $version            The version of this plugin.
     */
    public function __construct($galerie_plugin, $version)
    {
        $this->galerie_plugin = $galerie_plugin;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
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

        wp_enqueue_style($this->galerie_plugin, plugin_dir_url(__FILE__).'css/galerie-plugin-public.css', [], $this->version, 'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
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

        wp_enqueue_script($this->galerie_plugin, plugin_dir_url(__FILE__).'js/galerie-plugin-public.js', ['jquery'], $this->version, false);
    }
}
