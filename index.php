<?php get_header(); ?>
<?php while ( have_posts()) : the_post(); ?>
<?php the_post_thumbnail(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<h2 id="MesProjets">Quelques projets réalisés</h2>
<div id="slider">
    <div class="imgSlider"><img class="imgslider" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fleurs.png" alt=""></div>
    <div id="precedent"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ArrowLeft.png" alt=""></div>
    <div id="suivant"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ArrowRight.png" alt=""></div>
</div>
<div id="contact">
    <h2>CONTACTEZ MOI</h2>
    <div class="form-infos">
        <div class="formulaire">
        <?php echo apply_shortcodes( '[contact-form-7 id="0eb6fb7" title="Formulaire de contact 1"]' ); ?>
        </div>
        <div class="informations">
        <p>E-mail:tvalier@gmail.com</p>
        <p>Joignez moi au 0627171825</p>
        </div>
    </div>
</div>    
<?php get_footer(); ?>












