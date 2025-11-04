<?php
/*
 * Template Name: Ogólny
 * Template Post Type: post, page, product
 */

get_header();
?>

<header>
    <?php include 'elementy/naglowek_new.php'; ?>
</header>

<section class="ogolny">
    <div class="container">
        <article class="row">
            <div class="col-12 karta">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(__('(Czytaj więcej…)')); ?>                         
                        <?php endwhile;
                    else: ?>
                        <p><?php _e('Przykro mi, brak wpisu…'); ?></p>
                    <?php endif; ?>
                    <?php 
                    if ( in_category('aktualnosci') ) {
                        include 'elementy/post-pagin.php';
                    }
                    ?> 
            </div>
        </article>        
    </div>
</section>

<?php get_footer(); ?>