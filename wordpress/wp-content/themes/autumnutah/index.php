<?php get_header(); ?>
<!-- Navigation Menu -->
<nav class="main-navigation">
    <ul>
        <li><a href="<?php echo home_url(); ?>">Utah Creates</a></li>
        <li><a href="<?php echo get_permalink(40); ?>">Resume</a></li>
    </ul>
</nav>

<div class="hero"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero.png');
            background-size: cover;
            background-position: center;">
</div>

<div class="project-container">
    <?php
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1 // Retrieve all projects
    );
    $projects = new WP_Query($args);
    if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post();
    ?>
        <div class="project-card">
            <a href="<?php echo get_field('site'); ?>">
                <!-- Ensuring the title is part of the clickable area -->
                <div class="project-title">
                     <h2><?php the_title(); ?></h2>
                </div>

                <!-- Display the image if set -->
                <?php if (get_field('cardimage')) : ?>
                    <img src="<?php echo get_field('cardimage')['url']; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <!-- Display the description if set -->

                <div class="project-description">
                    <p><?php echo get_field( 'description' ); ?></p>
                </div>


            </a>
        </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<?php //get_footer(); ?>
