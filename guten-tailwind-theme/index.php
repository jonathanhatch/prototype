<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <main class="container mx-auto py-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else : ?>
            <p><?php esc_html_e('No posts found.', 'guten-tailwind'); ?></p>
        <?php endif; ?>
    </main>
    <?php wp_footer(); ?>
</body>
</html>
