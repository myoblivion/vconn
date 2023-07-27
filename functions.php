<?php
                        /**
                         * Functions and definitions
                         *
                         */

                        /*
                         * Let WordPress manage the document title.
                         */
                        add_theme_support( 'title-tag' );

                        /*
                         * Enable support for Post Thumbnails on posts and pages.
                         */
                        add_theme_support( 'post-thumbnails' );

                        /*
                         * Switch default core markup for search form, comment form, and comments
                         * to output valid HTML5.
                         */
                        add_theme_support( 'html5', array(
                          'search-form',
                          'comment-form',
                          'comment-list',
                          'gallery',
                          'caption',
                        ) );

                        /** 
                         * Include primary navigation menu
                         */
                        function htmlwp_nav_init() {
                          register_nav_menus( array(
                            'menu-header' => 'Header Menu',
                            'menu-footer' => 'Footer Menu',
                          ) );
                        }
                        add_action( 'init', 'htmlwp_nav_init' );

                        /**
                         * Register widget area.
                         *
                         */
                        function htmlwp_widgets_init() {
                          register_sidebar( array(
                            'name'          => 'Sidebar',
                            'id'            => 'sidebar-1',
                            'description'   => 'Add widgets',
                            'before_widget' => '<section id="%1" class="widget %2">',
                            'after_widget'  => '</section>',
                            'before_title'  => '<h2 class="widget-title">',
                            'after_title'   => '</h2>',
                          ) );
                        }
                        add_action( 'widgets_init', 'htmlwp_widgets_init' );

                        /**
                         * Enqueue scripts and styles.
                         */
                        function htmlwp_scripts() {
                          wp_enqueue_style( 'htmlwp-style', get_stylesheet_uri() );
                          
                        }
                        add_action( 'wp_enqueue_scripts', 'htmlwp_scripts' );

                        function htmlwp_create_post_custom_post() {
                          register_post_type('custom_post', 
                            array(
                            'labels' => array(
                              'name' => __('Custom Post', 'htmlwp'),
                            ),
                            'public'       => true,
                            'hierarchical' => true,
                            'supports'     => array(
                              'title',
                              'editor',
                              'excerpt',
                              'custom-fields',
                              'thumbnail',
                            ), 
                            'taxonomies'   => array(
                                'post_tag',
                                'category',
                            ) 
                          ));
                        }
                        add_action('init', 'htmlwp_create_post_custom_post'); // Add our work type