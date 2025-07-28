<?php
function guten_tailwind_setup() {
    add_theme_support('title-tag');
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'guten_tailwind_setup');

function guten_tailwind_enqueue_scripts() {
    wp_enqueue_style('guten-tailwind-style', get_template_directory_uri() . '/dist/style.css', [], null);
}
add_action('wp_enqueue_scripts', 'guten_tailwind_enqueue_scripts');
