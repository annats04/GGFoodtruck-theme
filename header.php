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
    <!-- Logo -->
    <div class="logo">
        <?php
        $logo_path = get_template_directory() . '/assets/logo.png';
        if (file_exists($logo_path)): ?>
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo1_GG.png" alt="<?php bloginfo('name'); ?> Logo">
            </a>
        <?php else: ?>
            <p>Logo not found</p>
        <?php endif; ?>
    </div>

    <!-- Navigation Menu -->
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container' => false, // Removes the <div> container
        'menu_class' => '', // Adds no class to <ul> by default
        'items_wrap' => '<ul class="nav-menu">%3$s</ul>', // Adds "nav-menu" class to <ul>
        'fallback_cb' => function () {
            echo '<ul class="nav-menu"><li><a href="#">Menu not assigned</a></li></ul>';
        },
    ));
    ?>
</div>

    <?php if (function_exists('pll_the_languages')): ?>
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
    <?php endif; ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
