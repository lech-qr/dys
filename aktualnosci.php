<?php
/*
 * Template Name: Aktualności
 * Template Post Type: post, page, product
 */

get_header();
?>

<header>
    <?php include 'elementy/naglowek_new.php'; ?>
</header>

<section class="aktualnosci">
    <h2>
        <div class="container"><div class="row"><div class="col-12 pt-5"><?php echo get_cat_name( $category_id = 5 );?></div></div></div>
    </h2>
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'aktualnosci',
        'posts_per_page' => 10,
    );
    $arr_posts = new WP_Query($args);

    if ($arr_posts->have_posts()) :
    ?>
    
    <div class="container">
        <div class="row">
        <?php
        while ($arr_posts->have_posts()) :
            $arr_posts->the_post();
            ?>
            <article data-aos="fade-down" id="post-<?php the_ID(); ?>" <?php post_class('col-sm-12 col-md-6 wow animate__animated animate__fadeInUp'); ?>>
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
                    <p><?php the_excerpt(); ?></p>
                    <a class="btn btn_czer" href="<?php the_permalink(); ?>">Zobacz całość</a>
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