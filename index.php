<?php get_header(); ?>
<?php while ( have_posts()) : the_post(); ?>
<?php the_post_thumbnail(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>