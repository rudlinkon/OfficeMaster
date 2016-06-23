<?php
/*
Template Name: Tab Page
*/
get_header();?>

    <section class="tab_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab_style_one">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
<?php 
    $ebit_post = null;
    $ebit_post = new WP_Query(array(
        'post_type' => 'tab',
        'posts_per_page' => -1
    ));

    if( $ebit_post->have_posts() ){
        $x = 0;
        while( $ebit_post->have_posts() ){
            $ebit_post->the_post();
            $tab_name = get_post_meta(get_the_ID(), '_office-master_tab_name', true);

    ?>
<li class="<?php if($x == 0){ echo 'active';}?>"><a href="#tab1-id-<?php the_ID(); ?>" role="tab" data-toggle="tab"><?php echo $tab_name;?></a></li>

        <?php $x++;}
    }else{
        echo 'No post';
    }
    wp_reset_postdata();
    $ebit_post = null;
?>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
<?php 
    $ebit_post = null;
    $ebit_post = new WP_Query(array(
        'post_type' => 'tab',
        'posts_per_page' => -1
    ));

    if( $ebit_post->have_posts() ){
        $x = 0;
        while( $ebit_post->have_posts() ){
            $ebit_post->the_post();
            $tab_name = get_post_meta(get_the_ID(), '_office-master_tab_name', true);

    ?>

    <div class="tab-pane fade <?php if($x == 0){echo 'in active';}?>" id="tab1-id-<?php the_ID(); ?>">
        <?php the_content();?>
    </div>
        <?php $x++;}
    }else{
        echo 'No post';
    }
    wp_reset_postdata();
    $ebit_post = null;
?>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer();?>