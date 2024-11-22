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
        <?php
        // Display the logo if the file exists
        $logo_path = get_template_directory() . '/images/logo_GG-01.png';
        if (file_exists($logo_path)): ?>
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo_GG-01.png" alt="<?php bloginfo('name'); ?> Logo">
            </a>
        <?php else: ?>
            <p>Logo not found</p>
        <?php endif; ?>
    </div>

    <!-- WordPress Navigation Menu -->
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'container' => false, // Don't wrap in any container
        'items_wrap' => '<ul>%3$s</ul>', // Wrap items in <ul> tag
        'fallback_cb' => function () {
            echo '<ul><li><a href="#">Menu not assigned</a></li></ul>';
        },
    ));
    ?>
</div>

    <?php if (function_exists('pll_the_languages')): ?>
        <div class="language-switcher">
            <ul>
                <?php
                pll_the_languages(array(
                    'show_flags' => 0,
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
