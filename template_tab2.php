<?php
/*
Template Name: Tab 2
*/
get_header(); ?>


    <section class="tab_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab_style_two">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
<!--
                        <li class="active"><a href="#one2" role="tab" data-toggle="tab">Home2</a></li>
                        <li><a href="#two2" role="tab" data-toggle="tab">Profile2</a></li>
                        <li><a href="#three2" role="tab" data-toggle="tab">Messages2</a></li>
-->
                        <?php 
                            $all_terms = get_terms(array(
                                'taxonomy' => 'filtering_category',
                                'hide_empty' => false
                            ));
                          $x = 0;
                          foreach($all_terms as $single_term){
                              $active = '';
                              if($x == 0){
                                  $active = 'active';
                              }
                              echo '<li class="'. $active .'"><a href="#'. $single_term->slug .'" role="tab" data-toggle="tab">'. $single_term->name .'</a></li>';
                              
                                $x++;
                          }
                        ?>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <?php 
                            $x = 0;
                            foreach($all_terms as $single){
                            $active = '';
                              if($x == 0){
                                  $active = 'in active';
                              }
                          ?>
                        <div class="tab-pane fade <?php echo $active; ?>" id="<?php echo $single->slug; ?>">
                           <?php 
                            $ebit_post = new WP_Query(array(
                                'post_type' => 'filtering',
                                'posts_per_page' => -1,
                                'filtering_category' => $single->slug
                            ));
                                
                            if($ebit_post->have_posts()){
                                while($ebit_post->have_posts()){
                                    $ebit_post->the_post(); ?>
                                    <div class="single_tab_item">
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                               <?php }
                                wp_reset_postdata();
                            }
                            ?>
                            
                        </div>
                            <?php $x++; }  
                        ?>                 
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer();