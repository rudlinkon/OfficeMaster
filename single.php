<?php get_header(); ?>
    <div class="row container-kamn">  
        <img src="http://placehold.it/1200x400" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%">
    </div>



    <!--End Header -->

    <div id="banners"></div>
    <div class="container">   
        <div class="row">
            <div class="col-sm-12 col-md-12">
                        <?php 
                if( have_posts() ){
                        the_post(); 
                        $post_icon_class = get_post_meta( get_the_ID(), '_office-master_post_icon_class', true ); ?>

                    <div class="blog-post">
                        <h1 class="blog-title">
                            <i class="fa <?php echo $post_icon_class; ?>"></i>
                            <?php the_title(); ?>
                        </h1>
                        <br>
                        <?php the_post_thumbnail('post-thumb'); ?>
                        <br>
                        <?php the_content(); ?>
                        <div>
                            <span class="badge">Posted <?php echo get_the_date('Y-m-d H:i:s'); ?> </span>
                            <div class="pull-right">
                                <?php the_tags('<span class="label label-default">', '</span><span class="label label-default">', '</span>'); ?>

                            </div>         
                        </div>
                    </div>
                    <hr>
                           
                    <?php } ?>
            </div>  
        </div>    
    </div>  

    <!--End Main Container -->

<?php get_footer(); ?>