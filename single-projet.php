<?php get_header(); ?>
<div class="main-single">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
    <h1 class="post-title"><?php the_title(); ?></h1>
    <div class="post-content">    
    <?php the_post_thumbnail(); ?> 
    <?php the_content(); ?>
    </div>
    <p class="post-info">
    <?php echo get_field("description");?>
    <a href="<?php echo get_field("lien");?>">CLIQUEZ ICI POUR VOIR LE CODE DU SITE</a>
    </p>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>