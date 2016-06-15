<?php

class EbitSlider extends WP_Widget{
    
    public function __construct(){
        parent::__construct(
            'ebitSlider',
            'Ebit Slider',
            array(
                'description'=>'This widget for slider'
            )
        );
    }
    
    public function form( $value ){ ?>
        
        <label for="<?php echo $this->get_field_id('sliderID');?>">ID</label>
        <input type="text" name="<?php echo $this->get_field_name('slider_id');?>" id="<?php echo $this->get_field_id('sliderID');?>" value="<?php echo $value['slider_id']; ?>" class="widefat">
        
    <?php   
    }
    
    public function update( $new, $old ){
        $old['slider_id'] = $new['slider_id'];
        
        return $old;
    }
    
    public function widget( $args, $value){
        echo do_shortcode('[ebitslider id="'. $value['slider_id'] .'"]');
    }
    
    
}





class EbitPost extends WP_Widget{
    
    public function __construct(){
        parent::__construct(
            'ebitPost',
            'Ebit Post',
            array(
                'description'=>'This widget for Post'
            )
        );
    }
    
    public function form( $value ){ ?>
        
        <label for="<?php echo $this->get_field_id('postType');?>">Post Type</label>
        <input type="text" name="<?php echo $this->get_field_name('post_type');?>" id="<?php echo $this->get_field_id('postType');?>" value="<?php echo $value['post_type']; ?>" class="widefat">
        
        <label for="<?php echo $this->get_field_id('postPerPage');?>">Posts Per Page</label>
        <input type="text" name="<?php echo $this->get_field_name('posts_per_page');?>" id="<?php echo $this->get_field_id('postPerPage');?>" value="<?php echo $value['posts_per_page']; ?>" class="widefat">
        
    <?php   
    }
    
    public function update( $new, $old ){
        $old['post_type'] = $new['post_type'];
        $old['posts_per_page'] = $new['posts_per_page'];
        
        return $old;
    }
    
    public function widget( $args, $value){
        $post_query = null;
        $post_query = new WP_Query( array(
            'post_type' => $value['post_type'],
            'posts_per_page' => $value['posts_per_page']
        ) );
        if( $post_query->have_posts() ){
            echo '<ul>';
            while( $post_query->have_posts() ){
                $post_query->the_post();
                echo '<li><a href="'. get_the_permalink() .'">'. get_the_title() .'</a></li>';
            }
            echo '</ul>';
        }
        wp_reset_postdata();
        $post_query = null;
    }
    
    
}








function ebit_widget(){
    register_sidebar( array(
        'name'=>'Ebit custom sidebar',
        'id'=>'ebit_cus_sidebar'
    ) );
    
    register_widget('EbitSlider');
    
    register_widget('EbitPost');
}
add_action('widgets_init', 'ebit_widget');