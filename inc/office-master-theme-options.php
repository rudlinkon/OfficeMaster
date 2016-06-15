<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "office_master";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Office Master Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Office Master Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
//    Redux::setSection( $opt_name, array(
//        'title'  => __( 'Basic Field', 'redux-framework-demo' ),
//        'id'     => 'basic',
//        'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
//        'icon'   => 'el el-home',
//        'fields' => array(
//            array(
//                'id'       => 'opt-text',
//                'type'     => 'text',
//                'title'    => __( 'Example Text', 'redux-framework-demo' ),
//                'desc'     => __( 'Example description.', 'redux-framework-demo' ),
//                'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
//                'hint'     => array(
//                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
//                )
//            )
//        )
//    ) );
//
//    Redux::setSection( $opt_name, array(
//        'title' => __( 'Basic Fields', 'redux-framework-demo' ),
//        'id'    => 'basic',
//        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
//        'icon'  => 'el el-home'
//    ) );
//
//    Redux::setSection( $opt_name, array(
//        'title'      => __( 'Text', 'redux-framework-demo' ),
//        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
//        'id'         => 'opt-text-subsection',
//        'subsection' => true,
//        'fields'     => array(
//            array(
//                'id'       => 'text-example',
//                'type'     => 'text',
//                'title'    => __( 'Text Field', 'redux-framework-demo' ),
//                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
//                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
//                'default'  => 'Default Text',
//            ),
//        )
//    ) );
//
//    Redux::setSection( $opt_name, array(
//        'title'      => __( 'Text Area', 'redux-framework-demo' ),
//        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
//        'id'         => 'opt-textarea-subsection',
//        'subsection' => true,
//        'fields'     => array(
//            array(
//                'id'       => 'textarea-example',
//                'type'     => 'textarea',
//                'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
//                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
//                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
//                'default'  => 'Default Text',
//            ),
//        )
//    ) );

    Redux::setSection($opt_name, array(
        'id'    => 'header_options',
        'title' => 'Header Options',
        'desc'  => 'This is header options',
        'icon'  => 'el el-home-alt'
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'header_sub_options',
        'title' => 'Logo Options',
        'subsection'=> true,
        'fields'=> array(
            array(
                'id'=>'site_logo',
                'title'=> 'Site Logo',
                'url'=> true,
                'desc'=> 'Upload Your Logo',
                'type'=> 'media',
                'default'=>array(
                    'url'=> get_template_directory_uri().'/assets/img/slider/Office.png'
                )
            )
        )
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'footer_options',
        'title' => 'Footer Options',
        'desc'  => 'This is footer options',
        'icon'  => 'el el-folder-close'
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'footer_sub_options',
        'title' => 'Copywrite Options',
        'subsection'=> true,
        'fields'=> array(
            array(
                'id'=>'copy_txt',
                'title'=> 'Copywrite Text',
                'type'=> 'editor',
                'default'=> '© Copyright 2014, Your Website Link. Theme by ThemeWagon',
                'args' => array(
                    'wpautop' => false
                )
            )
        )
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'footer_sub_options_col_1',
        'title' => 'Column one',
        'subsection'=> true,
        'fields'=> array(
            array(
                'id'=>'col_1_title',
                'title'=> 'Title',
                'type'=> 'text',
                'default'=> 'Contact:',
            ),
            array(
                'id'=>'col_1_icon',
                'title'=> 'Icon',
                'type'=> 'text',
                'default'=> 'fa-map-marker',
            ),
            array(
                'id'=>'col_1_txt',
                'title'=> 'Column One Text',
                'type'=> 'editor',
                'default'=> '<p class="footer-contact">
                        Via Ludovisi 39-45, Rome, 54267, Italy<br>
                        Phone: 1.800.245.356 Fax: 1.800.245.357<br>
                        Email: hello@LawOffice.org<br>
                    </p>'
            )
        )
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'footer_sub_options_col_2',
        'title' => 'Column two',
        'subsection'=> true,
        'fields'=> array(
            array(
                'id'=>'col_2_title',
                'title'=> 'Title',
                'type'=> 'text',
                'default'=> 'Links',
            ),
            array(
                'id'=>'col_2_icon',
                'title'=> 'Icon',
                'type'=> 'text',
                'default'=> 'fa-external-link',
            ),
            array(
                'id'=>'col_2_links',
                'title'=> 'Links',
                'type'=> 'slides',
                'placeholder'=> array(
                    'title'=>'Write here your link title',
                    'url'=>'Write here your link url'
                )
            )
        )
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'footer_sub_options_col_3',
        'title' => 'Column three',
        'subsection'=> true,
        'fields'=> array(
            array(
                'id'=>'col_3_title',
                'title'=> 'Title',
                'type'=> 'text',
                'default'=> 'Socialize',
            ),
            array(
                'id'=>'col_3_icon',
                'title'=> 'Icon',
                'type'=> 'text',
                'default'=> 'fa-heart',
            ),
            array(
                'id'=>'col_3_links',
                'title'=> 'Social Icons',
                'type'=> 'slides',
                'placeholder'=> array(
                    'title'=>'Social icon fontawesome class name',
                    'url'=>'Social links'
                )
            )
        )
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'contact_options',
        'title' => 'Contact Page Options',
        'desc'  => 'This is Contact Page options',
        'icon'  => 'el el-address-book'
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'contact_map_sub_options',
        'title' => 'Map',
        'subsection'=> true,
        'fields'=> array(
            array(
                'id'=>'map_url',
                'title'=> 'Map Url',
                'desc'=> 'Write here your map location\'s embad url',
                'type'=> 'text',
                'default'=> 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3618.727010735933!2d91.837871!3d24.907291700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1404919738144'
            )
        )
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'contact_text_sub_options',
        'title' => 'Contact Text',
        'subsection'=> true,
        'fields'=> array(
            array(
                'id'=>'contact_text_heading',
                'title'=> 'Contact Heading',
                'type'=> 'text',
                'default'=> 'Find us at:'
            ),
            array(
                'id'=>'contact_txt',
                'title'=> 'Contact text',
                'type'=> 'editor',
                'default'=> '<p class="block-author"> Johns, Smith & Associates</p>
                    <p>Via Ludovisi 39-45, Rome, 54267, Italy</p>
                    <p>Phone: 1.800.245.356</p>
                    <p>Fax: 1.800.245.357</p>
                    <em class="block-author">Email: hello@LawOffice.org </em> <br>
                    <br>',
                'args' => array(
                    'wpautop' => false
                )
            ),
            array(
                'id'=>'social_heading',
                'title'=> 'Social Heading',
                'type'=> 'text',
                'default'=> 'Social Link'
            ),
            array(
                'id'=>'contact_social_links',
                'title'=> 'Social Icons',
                'type'=> 'slides',
                'placeholder'=> array(
                    'title'=>'Social Title',
                    'url'=>'Social links'
                )
            )
        )
    ));


    Redux::setSection($opt_name, array(
        'id'    => 'section_sorter',
        'title' => 'Section Sorter',
        'icon'  => 'el el-certificate'
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'section_sorter_sub',
        'title' => 'Seceion Sorter Options',
        'subsection'=> true,
        'fields'=> array(
            array(
                'id'=>'sorter_options',
                'title'=> 'Set You sort',
                'type'=> 'sorter',
                'options' => array(
                    'Active' => array(
                        'slider'=> 'Home Page Slider',
                        'service'=> 'Service Area',
                        'red'=> 'Red Area',
                        'green'=> 'Green Area',
                        'blue'=> 'Blue Area'
                    ),
                    'Deactive' => array(
                    
                    )
                )
            )
        )
    ));


    Redux::setSection($opt_name, array(
        'id'    => 'appearance_options',
        'title' => 'Appearance',
        'icon'  => 'el el-certificate'
    ));

    Redux::setSection($opt_name, array(
        'id'    => 'background_sub_section',
        'title' => 'Background Options',
        'subsection'=> true,
        'fields'=> array(
            array(
                'id'=>'footer_top_bg',
                'title'=> 'Footer Top Background',
                'type'=> 'color'
                ),
            array(
                'id'=>'contact_txt_typo',
                'title'=> 'Contact Text Typography',
                'type'=> 'typography',
                'output'=> array(
                    '.footer-contact'
                )
                ),
            array(
                'id'=>'footer_column_title_typo',
                'title'=> 'Footer Column Title typography',
                'type'=> 'typography',
                'output'=> array(
                    'footer h3'
                )
                )
            )
        )
    );


    /*
     * <--- END SECTIONS
     */
