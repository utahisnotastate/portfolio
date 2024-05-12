<?php
/* Template Name: Resume Page */
get_header();  // This includes your header.php file
?>
<nav class="main-navigation">
    <ul>
        <li><a href="<?php echo home_url(); ?>">Utah Creates</a></li>
        <li><a href="<?php echo get_permalink(40); ?>">Resume</a></li>
    </ul>
</nav>
<div class="resume-container" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/Resume.png');">
    <div class="resume-content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php
get_footer();  // This includes your footer.php file
?>
