<?php
/*
 * Template Name: Ogłoszenia
 * Template Post Type: post, page, product
 */

get_header();
?>

<header>
    <?php include 'elementy/naglowek_new.php'; ?>
</header>

<section class="ogloszenia">
    <h2>
        <div class="container"><div class="row"><div class="col-12 pt-5"><?php echo get_cat_name( 6 );?></div></div></div>
    </h2>
    <?php
    $args_ogl = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'ogloszenia-duszpasterskie',
        'posts_per_page' => 1,
    );
    $arr_posts_ogl = new WP_Query($args_ogl);

    if ($arr_posts_ogl->have_posts()) :
    ?>
    
    <div class="container">
        <div class="row justify-content-center">
        <?php
        while ($arr_posts_ogl->have_posts()) :
            $arr_posts_ogl->the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-12 col-lg-8 wow animate__animated animate__fadeInUp'); ?>>
                <a href="<?php the_permalink(); ?>" class="obraz"
                     <?php if (has_post_thumbnail()) : ?>
                     style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
                     <?php endif; ?>
                ></a>
                <div class="karta mt--7">
                    <div class="data"><i class="bi bi-calendar-check-fill"></i><?php echo get_the_date( 'd-M-Y' ); ?></div>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <div class="tresc">
                        <?php the_content(); ?> 
                    </div>
                </div>
            </article>
            <?php
        endwhile;
    endif;
    ?>            
        </div>
    </div>
</section>

<?php get_footer(); ?>