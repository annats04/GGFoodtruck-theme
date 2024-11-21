<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
   
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="nav">
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" title="Homepage">
            <?php
            if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                the_custom_logo(); 
            } else {
                echo '<img src="' . esc_url(get_template_directory_uri() . '/images/logo.jpg') . '" alt="logo">';
            }
            ?>
        </a>
    </div>

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


