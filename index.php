<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

    <?php 
    $heroimage = get_field("hero-img");
    $abouttext = get_field("about_p");
    $aboutheadline = get_field("about_h1");
    $collage = get_field("collage");
    ?>

        <!-- Hero Section -->
        <img src="<?php echo $heroimage["url"]; ?>" alt="bookstore image" class="hero" >


        <!-- Intro Section -->
       <div class="intro">

       <h1><?php echo $aboutheadline; ?></h1>
       <p><?php echo  $abouttext; ?></p>

       <img src="<?php echo $collage["url"]; ?>" alt="collage image" class="intro" >
  
       </div>


        <!-- Menu Section -->
        <div class="menu">
            <?php 
            $menu_image = get_field('menu-image'); // Make sure you have this ACF field set
            if ($menu_image): ?>
                <img src="<?php echo esc_url($menu_image['url']); ?>" alt="Menu">
            <?php endif; ?>
        </div>

        <!-- Booking Section -->
        <div class="booking">
            <div class="booking-content">
                <div class="booking-text">
                    <h1><?php the_field('booking-title'); ?></h1>
                    <p><?php the_field('booking-description'); ?></p>
                </div>
                <div class="contact-form">
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                        <!-- Example form fields, you should create your own form fields -->
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" placeholder="Your Message"></textarea>
                        <button type="submit">Send Inquiry</button>
                    </form>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>