<?php
/*
 * Template Name: Strona główna
 * Template Post Type: post, page, product
 */

get_header();
?>

<header>
    <?php include 'elementy/naglowek_new.php'; ?>
</header>

<section class="glowna">
    <div class="tlo"></div>
    <div class="witaj">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="logo animate__animated animate__fadeInDown">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/obrazy/logo_tlo.svg'; ?>" />
                    </div>
                    <ul class="col-12">
                        <li class="animate__animated animate__fadeIn animate__slow animate__delay-1s">Parafia Rzymskokatolicka</li>
                        <li class="animate__animated animate__fadeIn animate__slow animate__delay-1s">pod wezwaniem</li>
                        <li class="animate__animated animate__zoomIn animate__delay-1s">Świętego</li>
                        <li class="animate__animated animate__zoomIn">Jana Chrzciciela</li>
                        <li class="animate__animated animate__fadeIn animate__slow animate__delay-1s">w Dysie</li>
                        <li class="animate__animated animate__fadeIn animate__slow animate__delay-2s">Archidiecezja Lubelska</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <disv class="yt_bg" data-vbg="https://www.youtube.com/embed/0b1tUGBg5hU" data-vbg-loop="0"></div>
</section>
<section class="aktualnosci">
    <h2>
        <div class="container"><div class="row"><div class="col-12 pt-5"><?php echo get_cat_name( $category_id = 5 );?></div></div></div>
    </h2>
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'aktualnosci',
        'posts_per_page' => 4,
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
<section class="drugie">
    <div class="container">
        <div class="row">
            <div class="d-flex align-items-center">
                <div class="transmisja col-6 col-md-3" data-bs-toggle="modal" data-bs-target="#transmisja">
                    <i class="bi bi-youtube"></i>
                    <p>Zapraszamy na transmisję&nbsp;on&#8209;line</p>                    
                </div>
                <div class="d-sm-flex d-md-none col-6 col-md-3">
                    <i class="bi bi-google-play"></i>
                    <p>Pobierz aplikację parafii</p>                    
                </div>                
                <div class="godziny col-6 col-md-3" data-bs-toggle="modal" data-bs-target="#godziny_mszy">
                    <i class="bi bi-clock-fill"></i>
                    <p>Sprawdź godziny Mszy&nbsp;Świętych</p>
                </div>
                <div class="wsparcie col-6 col-md-3" data-bs-toggle="modal" data-bs-target="#wsparcie">
                    <i class="bi bi-cash-coin"></i>
                    <p>Wesprzyj naszą parafię</p>
                </div>
                <div class="facebook col-6 col-md-3">
                    <a href="https://pl-pl.facebook.com/Parafiadyss/" target="_blank">
                        <i class="bi bi-facebook"></i>
                        <p>Odwiedź nas<br>na Facebooku</p>                        
                    </a>
                </div>
            </div>       
        </div>        
    </div>
</section>
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
                <div class="karta">
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