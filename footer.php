<?php global $office_master; ?> 
<style>
    footer{
        background: <?php echo $office_master['footer_top_bg']; ?>;
    }
</style>
   <!-- Footer -->
    <footer> 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="fa <?php echo $office_master['col_1_icon']?>"></i> <?php echo $office_master['col_1_title']?></h3>
                    <p class="footer-contact">
                        <?php echo $office_master['col_1_txt'];?>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa <?php echo $office_master['col_2_icon']?>"></i> <?php echo $office_master['col_2_title']?></h3>
                    <?php 
                    if( is_array($office_master['col_2_links']) ){
                        foreach( $office_master['col_2_links'] as $singleValue ){
                            echo '<p> <a href="'.$singleValue['url'].'">'.$singleValue['title'].'</a></p>';
                        }
                    }
                    ?>
                </div>
              <div class="col-md-4">
                <h3><i class="fa <?php echo $office_master['col_3_icon']?>"></i> <?php echo $office_master['col_3_title']?></h3>
                <div id="social-icons">
                <?php 
                    if( is_array($office_master['col_3_links']) ){
                        foreach( $office_master['col_3_links'] as $singleValue ){ ?>
                    <a href="<?php echo $singleValue['url']; ?>" class="btn-group">
                        <i class="fa <?php echo $singleValue['title']; ?>"></i>
                    </a> 
                <?php }
                    }
                ?>
                </div>
              </div>    
        </div>
      </div>
    </footer>

    
    <div class="copyright text center">
        <?php echo $office_master['copy_txt'];?>
        <?php echo do_shortcode('[myslider  color="blue" fz="60px"]Sohel Rana [/myslider]'); ?>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>