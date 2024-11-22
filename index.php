<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

    <?php 
    $abouttext = get_field("about_p");
    $aboutheadline = get_field("about_h1");
    $collage = get_field("collage");
    $menu = get_field("menu");
    $bookingheadline = get_field("bookingh1");
    $bookingtext = get_field("bookingtext");
    $herovideo = get_field("video");
    $map = get_field("map-img");
    $maptext = get_field("map-text");

    // Ensure $herovideo is valid
    $herovideoFileUrl = (!empty($herovideo) && is_array($herovideo)) ? $herovideo['url'] : '';
    ?>

    <!-- Hero Section -->
    <div class="hero">
        <?php if ($herovideoFileUrl): ?>
            <div class="videooverlay">
                <video autoplay loop muted playsinline>
                    <source src="<?php echo esc_url($herovideoFileUrl); ?>" type="video/mp4">
                </video>
            </div>
        <?php endif; ?>
    </div>

    <!-- Intro Section -->
    <div class="intro">
        <?php if ($aboutheadline): ?>
            <h1><?php echo esc_html($aboutheadline); ?></h1>
        <?php endif; ?>

        <?php if ($abouttext): ?>
            <p><?php echo esc_html($abouttext); ?></p>
        <?php endif; ?>

        <?php if (!empty($collage) && isset($collage['url'])): ?>
            <img src="<?php echo esc_url($collage['url']); ?>" alt="Collage image" class="intro-image">
        <?php endif; ?>
    </div>

    <!-- Menu Section -->
    <div class="menu">
        <?php if (!empty($menu) && isset($menu['url'])): ?>
            <img src="<?php echo esc_url($menu['url']); ?>" alt="Menu image" class="menu-image">
        <?php endif; ?>
    </div>

    <!-- Booking Section -->
    <div class="booking">
        <div class="booking-content">
            <div class="booking-text">
                <?php if ($bookingheadline): ?>
                    <h1><?php echo esc_html($bookingheadline); ?></h1>
                <?php endif; ?>

                <?php if ($bookingtext): ?>
                    <p><?php echo esc_html($bookingtext); ?></p>
                <?php endif; ?>
            </div>

            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="1f164f8" title="Booking"]'); ?>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="map">
        <?php if (!empty($map) && isset($map['url'])): ?>
            <img src="<?php echo esc_url($map['url']); ?>" alt="Map image">
        <?php endif; ?>

        <?php if ($maptext): ?>
            <p><?php echo esc_html($maptext); ?></p>
        <?php endif; ?>
    </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
