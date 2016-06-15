<?php 
function footer_extra_script(){ ?>
    <script>
      new WOW().init();
    </script>
<?php }
add_action('wp_footer', 'footer_extra_script', 30);

function office_master_fallback_menu(){ ?>
    
    <ul class="nav navbar-nav pull-right">
        <li class="active">
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Blog</a>
        </li>
        <li>
            <a href="#">Team</a>
        </li>
        <li>
            <a href="#"><span>Contact</span></a>
        </li>
    </ul>
    
<?php }

function cExcerpt($number=50, $readmore='Read More'){
    $newnumber = $number + 1;
    $var = explode(' ', strip_tags( get_the_content() ), $newnumber );
    
    if( count($var) >= $newnumber ){
        array_pop($var);  
    }

    array_push($var, '<a href="'.get_the_permalink().'">'.$readmore.'</a>');
    $var = implode(' ', $var);
    
    return $var;
}