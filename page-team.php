<?php get_header();

if(have_posts()){
    the_post();
    $page_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );?>
    
    <div class="row container-kamn">  
        <img src="<?php echo $page_thumb[0]; ?>" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%">
    </div>
    
<?php }
?>


    <!--End Header -->


    <!-- Main Container -->

    <div id="banners"></div>
    <div class="container">
        <div class="row">
                <?php 
                $ebit_post = null;
                $ebit_post = new WP_Query(array(
                    'post_type' => 'team',
                    'posts_per_page' => -1,
                    'team_category' => 'developer',
                    'team_tag' => 'first + second'
                ));

                if( $ebit_post->have_posts() ){
                    while( $ebit_post->have_posts() ){
                        $ebit_post->the_post(); 
                        $team_designation = get_post_meta( get_the_ID(), '_office-master_team_designation', true );
                        $block_color = get_post_meta( get_the_ID(), '_office-master_block_color', true );
                        $animation_type_class = get_post_meta( get_the_ID(), '_office-master_animation_type_class', true ); ?>

            <div class="col-md-6">
                <div class="blockquote-box <?php echo $block_color; ?> animated wow <?php echo $animation_type_class; ?> clearfix">
                    <div class="square pull-left">
                        <?php the_post_thumbnail('team-member'); ?>
                    </div>
                    <h4>
                        <?php the_title(); ?>
                    </h4>
                    <p>
                        <?php echo $team_designation; ?>
                    </p>
                </div>
            </div>
                           
                    <?php }

                }else{
                    echo 'No post';
                }
                wp_reset_postdata();
            ?>
            
        </div>
    </div>
    <!--End Main Container -->


<?php get_footer(); ?>