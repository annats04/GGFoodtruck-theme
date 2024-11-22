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
    $herovideoFileName = $herovideo['filename'];
    $herovideoFileUrl = $herovideo['url'];
    $map = get_field("map-img");
    $maptext = get_field("map-text");
   

    ?>

        <!-- Hero Section -->
        <div class="hero">
        <?php if ($herovideo): ?>
            <div class="videooverlay">
                <video autoplay loop muted playsinline>
                    <source src="<?php echo esc_url($herovideoFileUrl); ?>" type="video/mp4">
                </video>
            </div>

        <!-- Intro Section -->
       <div class="intro">

       <h1><?php echo $aboutheadline; ?></h1>
       <p><?php echo  $abouttext; ?></p>

       <img src="<?php echo $collage["url"]; ?>" alt="collage image" class="intro" >
  
       </div>

        <!-- Menu Section -->
        <div class="menu">
        <img src="<?php echo $menu["url"]; ?>" alt="menu image" class="menu" >
        </div>

        <!-- Booking Section -->
        <div class="booking">
            <div class="booking-content">
                <div class="booking-text">
                <h1><?php echo  $bookingheadline; ?></h1>
                    <p><?php echo  $bookingtext; ?></p>
                </div>

                <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="1f164f8" title="Booking"]'); ?>
                </div>
            </div>
        </div>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>