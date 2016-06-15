<?php get_header(); 

$sorter_options = $office_master['sorter_options']['Active'];

if( is_array($sorter_options) ){
    foreach($sorter_options as $key=>$value){
        switch( $key ){
            case 'slider':
                get_template_part('section-slider');
            break;
            case 'service':
                get_template_part('section-service');
            break;
            case 'red':
                get_template_part('section-red');
            break;
            case 'green':
                get_template_part('section-green');
            break;
            case 'blue':
               get_template_part('section-blue');
            break;
        }
    }
}

get_footer(); ?>
