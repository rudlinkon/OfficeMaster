<?php
/**
 * Get the bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}

add_action('cmb2_admin_init','office_master_cmb2');

function office_master_cmb2(){
    
    $pref= '_office-master_';
    
    $service_item = new_cmb2_box( array(
        'id'            => 'service_metabox',
        'title'         => __( 'Service Metabox', 'office_master' ),
        'object_types'  => array( 'services' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );
    
    $service_item->add_field( array(
        'name'       => __( 'Service Icon', 'office_master' ),
        'desc'       => __( 'Write here your service icon\'s fontawesome name', 'office_master' ),
        'id'         => $pref.'service_icon',
        'type'       => 'text',
        'repeatable' => true
    ) );
    
    $service_item->add_field( array(
        'name'       => __( 'Description', 'office_master' ),
        'desc'       => __( 'Write here your service description', 'office_master' ),
        'id'         => $pref.'service_discription',
        'type'       => 'textarea'
    ) );
    
    $slider_item = new_cmb2_box( array(
        'id'            => 'slider_metabox',
        'title'         => __( 'Slider Metabox', 'office_master' ),
        'object_types'  => array( 'slider', 'services', 'page' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );
    
    $slider_item->add_field( array(
        'name'       => __( 'Slider Caption', 'office_master' ),
        'desc'       => __( 'Write here your slider caption', 'office_master' ),
        'id'         => $pref.'slider_caption',
        'type'       => 'text'
    ) );
    
    $special_page = new_cmb2_box( array(
        'id'            => 'special_metabox',
        'title'         => __( 'Special Metabox', 'office_master' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on'       => array(
            'key'=>'id',
            'value'=>'114'
        ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );
    
    $special_page->add_field( array(
        'name'       => __( 'Special Meta Caption', 'office_master' ),
        'desc'       => __( 'Write here your special caption', 'office_master' ),
        'id'         => $pref.'special_page_caption',
        'type'       => 'text'
    ) );
    
    $team_member = new_cmb2_box( array(
        'id'            => 'team_metabox',
        'title'         => __( 'Team Metabox', 'office_master' ),
        'object_types'  => array( 'team' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );
    
    $team_member->add_field( array(
        'name'       => __( 'Team Member Designation', 'office_master' ),
        'desc'       => __( 'Write here your Team Member Designation', 'office_master' ),
        'id'         => $pref.'team_designation',
        'type'       => 'text'
    ) );
    
    $team_member->add_field( array(
        'name'       => __( 'BlockQuote Color', 'office_master' ),
        'desc'       => __( 'Write here your BlockQuote Color Class name', 'office_master' ),
        'id'         => $pref.'block_color',
        'type'       => 'text'
    ) );
    
    $team_member->add_field( array(
        'name'       => __( 'Animation Type', 'office_master' ),
        'desc'       => __( 'Write here your animation class name', 'office_master' ),
        'id'         => $pref.'animation_type_class',
        'type'       => 'text'
    ) );
    
    $post_meta = new_cmb2_box( array(
        'id'            => 'post_metabox',
        'title'         => __( 'Post Metabox', 'office_master' ),
        'object_types'  => array( 'post' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );
    
    $post_meta->add_field( array(
        'name'       => __( 'Post Icon', 'office_master' ),
        'desc'       => __( 'Write here your Post icon class name', 'office_master' ),
        'id'         => $pref.'post_icon_class',
        'type'       => 'text'
    ) );
    
    $about_page_group = new_cmb2_box( array(
        'id'            => 'group_page_metabox',
        'title'         => __( 'Post Metabox', 'office_master' ),
        'object_types'  => array( 'page' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'show_on'    => array(
            'key' => 'id',
            'value' => 108
        )
    ) );
    
    $about_group_para = $about_page_group->add_field( array(
        'name'       => __( 'Groupable Field', 'office_master' ),
        'id'         => $pref.'about_group_meta_field',
        'type'       => 'group'
    ) );  
    
    $about_page_group->add_group_field($about_group_para, array(
        'name'       => __( 'Heading', 'office_master' ),
        'id'         => $pref.'heading',
        'type'       => 'text'
    ) );
    
    $about_page_group->add_group_field($about_group_para, array(
        'name'       => __( 'About Description', 'office_master' ),
        'id'         => $pref.'about_description',
        'type'       => 'text'
    ) );
    
    $about_page_group->add_group_field($about_group_para, array(
        'name'       => __( 'A tag hash link', 'office_master' ),
        'id'         => $pref.'hash_link',
        'type'       => 'text',
        'repeatable' => true
    ) );
    
    $about_page_group->add_group_field($about_group_para, array(
        'name'       => __( 'A tag hash link title', 'office_master' ),
        'id'         => $pref.'hash_link_title',
        'type'       => 'text',
        'repeatable' => true
    ) );
    
    $tab_post = new_cmb2_box( array(
        'id'            => 'tab_post',
        'title'         => __( 'Tab Metabox', 'office_master' ),
        'object_types'  => array( 'tab' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true // Show field names on the left
    ) );
    
    $tab_post->add_field( array(
        'name'       => __( 'Tab Name', 'office_master' ),
        'id'         => $pref.'tab_name',
        'type'       => 'text'
    ) );
    
}