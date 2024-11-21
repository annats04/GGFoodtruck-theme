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


    
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>