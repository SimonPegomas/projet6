<?php
function hello_elementor_child_enqueue_styles() {
    // thème parent
    wp_enqueue_style( 'hello-elementor-parent-style', get_template_directory_uri() . '/style.css' );

    // thème enfant 
    wp_enqueue_style( 'hello-elementor-child-theme-style', get_stylesheet_directory_uri() . '/theme.css', array( 'hello-elementor-parent-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles' );
?>

function mon_shortcode_html_css() {
    ob_start();
    ?>
    <div class="container">
            <div class="BranchLeft">  
                    <img src="image/branchLeft.png" alt=" BranchLeft" title="BranchLeft" />
            </div>
            <div class="BranchRight">  
                <img src="image/branchRight.png" alt=" BranchRight " title="BranchRight" />
            </div>
            <div class="Bottle">  
                <img src="image/bottle.png" alt=" Bottle " title="Bottle" />
            </div>  
    </div>  

    <style>
        .container {
            position: relative;
            width: 300px;
            height: 400px; 
            }

        .BranchLeft {
            position: absolute;
            top: 140px;   
            left: 0px;  
            z-index: 1;  
            }

        .Bottle {
            position: absolute;
            top: 0px;    
            left: 150px;  
            z-index: 3;  
           }

        .BranchRight {
            position: absolute;
            top: 140px;   
            left: 330px; 
            z-index: 2;  
}
    </style>
    <?php
    return ob_get_clean();
}
add_shortcode('mon_html_css', 'mon_shortcode_html_css');