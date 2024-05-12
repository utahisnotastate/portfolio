<?php
/**
 * Theme setup functions.
 */


function create_posttype() {
    register_post_type('resume',
    // CPT Options
        array(
            'labels' => array(
                'name' => __('Resumes'),
                'singular_name' => __('Resume')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'resume'),
            'show_in_rest' => true,  // Enable the Gutenberg editor
            'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        )
    );
}
// Hooking up function to theme setup
add_action('init', 'create_posttype');
