<?php 
function office_master_custom_post(){
      register_post_type('slider',array(
        'labels'=>array(
            'name'=>'Main Slider',
            'menu_name'=>'Slider Menu',
            'all_items'=>'All Sliders',
            'add_new'=>'Add New Slide',
            'add_new_item'=>'Add new slide item'
        ),
        'public'=>true,
        'supports'=>array(
            'title','thumbnail', 'revisions', 'custom-fields', 'page-attributes'
        )
    ));
    
      register_post_type('services',array(
        'labels'=>array(
            'name'=>'Service',
            'menu_name'=>'Service Menu',
            'all_items'=>'All Service',
            'add_new'=>'Add New Service',
            'add_new_item'=>'Add new Service item'
        ),
        'public'=>true,
        'supports'=>array(
            'title', 'revisions', 'custom-fields', 'page-attributes'
        )
    ));
    
      register_post_type('team',array(
        'labels'=>array(
            'name'=>'Team',
            'menu_name'=>'Team Menu',
            'all_items'=>'All Team Member',
            'add_new'=>'Add New Team Member',
            'add_new_item'=>'Add new Team Member'
        ),
        'public'=>true,
        'supports'=>array(
            'title', 'revisions', 'page-attributes', 'thumbnail'
        )
    ));
    
    register_taxonomy( 
        'team_category', 
        'team', 
        array(
            'labels' => array(
                'name' => 'Team Category',
                'add_new_item' => 'Add New Category'
            ),
            'hierarchical' => true,
            'show_admin_column' => true
        )
    );
    
    register_taxonomy( 
        'team_tag', 
        'team', 
        array(
            'labels' => array(
                'name' => 'Team Tag',
                'add_new_item' => 'Add New Team Tag'
            ),
            'show_admin_column' => true
        )
    );
    
      register_post_type('filtering',array(
        'labels'=>array(
            'name'=>'Filtering',
            'menu_name'=>'Filtering Menu',
            'all_items'=>'All Filtering Item',
            'add_new'=>'Add New Filtering Item',
            'add_new_item'=>'Add new Filtering Item'
        ),
        'public'=>true,
        'supports'=>array(
            'title', 'revisions', 'page-attributes', 'thumbnail'
        )
    ));
    
    register_taxonomy( 
        'filtering_category', 
        'filtering', 
        array(
            'labels' => array(
                'name' => 'Filtering Category',
                'add_new_item' => 'Add New Filtering'
            ),
            'hierarchical' => true,
            'show_admin_column' => true
        )
    );
    
      register_post_type('tab',array(
        'labels'=>array(
            'name'=>'Tab',
            'menu_name'=>'Tab Menu',
            'all_items'=>'All Tab Item',
            'add_new'=>'Add New Tab Item',
            'add_new_item'=>'Add new Tab Item'
        ),
        'public'=>true,
        'supports'=>array(
            'title', 'editor', 'revisions', 'page-attributes', 'thumbnail'
        )
    ));
    
}
add_action('init', 'office_master_custom_post');