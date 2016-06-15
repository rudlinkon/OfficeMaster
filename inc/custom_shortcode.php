<?php

function my_slider($para, $content){
    $para = shortcode_atts(array(
        'fz'=> '25px',
        'color'=> 'red'
    ), $para); ob_start(); ?>
    
    <h2 style="color: <?php echo $para['color']; ?>; font-size: <?php echo $para['fz']; ?>;"><?php echo $content; ?></h2>
    
<?php return ob_get_clean(); }
add_shortcode('myslider', 'my_slider');


function ebit_slider($para, $content){
    $para = shortcode_atts(array(
        'id'=> 0,
    ), $para); ob_start(); ?>
    
<div id="carousel-example-generic<?php echo $para['id']; ?>" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           
            <?php 
                $ebit_post = null;
                $ebit_post = new WP_Query(array(
                    'post_type' => 'slider',
                    'posts_per_page'=> -1
                ));

                if( $ebit_post->have_posts() ){
                    $x=0;
                    while( $ebit_post->have_posts() ){
                        $x++;
                        $ebit_post->the_post(); 
                        $slider_caption = get_post_meta( get_the_ID(), '_office-master_slider_caption', true ); ?>

                        <!-- Begin Single Slide item -->
                        <div class="item <?php if($x==1){ echo 'active';} ?>">
                            <?php the_post_thumbnail('slide-img'); ?>
                        </div>
                        <!-- End Single Slide item -->
                           
                    <?php }

                    }else{
                        echo 'No post';
                    }
                    wp_reset_postdata();
                ?>
                        </div>
                        
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <?php 
                        for($i=0; $i<$x; $i++){ ?>
                            
                        <li data-target="#carousel-example-generic<?php echo $para['id']; ?>" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){ echo 'active';} ?>"></li>
                            
                       <?php }

                    ?>
                        </ol>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic<?php echo $para['id']; ?>" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic<?php echo $para['id']; ?>" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
    
    <?php return ob_get_clean(); }
add_shortcode('ebitslider', 'ebit_slider');

