<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
   
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <ul>
        <?php
        ob_start();
        wp_nav_menu( array(
            'theme_location' => 'primary-menu', 
            'container' => false,  
            'items_wrap' => '<ul>%3$s</ul>', 
        ));
        
        $menu_output = ob_get_clean();
        echo $menu_output;
        ?>

<div class="language-switcher">
                <ul>
                    <?php
                    pll_the_languages(array(
                        'show_flags' => 1, 
                        'show_names' => 0  
                    ));
                    ?>
                </ul>
            </div>
    </ul>
</div>


