    <!-- Begin #carousel-section -->
    <section id="carousel-section" class="section-global-wrapper"> 
        <div class="container-fluid-kamn">
            <div class="row">
                <div id="carousel-1" class="carousel slide">


        
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
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs"><?php the_title(); ?></h3>
                                <p class="carousel-body"><?php echo $slider_caption; ?></p>
                            </div>
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
                    <ol class="carousel-indicators visible-lg">
                    <?php 
                        for($i=0; $i<$x; $i++){ ?>
                            
                        <li data-target="#carousel-1" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){ echo 'active';} ?>"></li>
                            
                       <?php }

                    ?>
                    </ol>
        
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End #carousel-section -->