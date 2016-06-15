<?php
/*
Template Name: Filtering
*/
get_header(); ?>

<section class="filtering">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="filter_trigger">
                    <li class="filter" data-filter="all">All</li>
<!--
                    <li class="filter" data-filter=".red">Red</li>
                    <li class="filter" data-filter=".green">Green</li>
                    <li class="filter" data-filter=".blue">Blue</li>
-->
               <?php 
                    $all_terms = get_terms('filtering_category', array(
                        'hide_empty' => false
                    ));
                    foreach($all_terms as $single_term){
                        echo '<li class="filter" data-filter=".' . $single_term->slug . '">' . $single_term->name . '</li>';
                    }
                ?>
                </ul>
            </div>
        </div>
        <div class="all_filter_item row">
        <?php 
            $ebit_post = null;
            $ebit_post = new WP_Query(array(
                'post_type' => 'filtering',
                'posts_per_page' => -1
            ));
            
            if( $ebit_post->have_posts() ){
                while( $ebit_post->have_posts() ){
                    $ebit_post->the_post();
                    $post_terms = get_the_terms(get_the_ID(), 'filtering_category');
                    
            ?>

            <div class="mix single_item col-md-3 <?php foreach($post_terms as $post_term){echo $post_term->slug . ' '; }?>">
                <?php the_post_thumbnail(); ?>
                <h2><?php the_title(); ?></h2>
            </div>
               
                <?php }
            }else{
                echo 'No post';
            }
            wp_reset_postdata();
            $ebit_post = null;
            ?>

        </div>
    </div>
</section>
<?php
get_footer();