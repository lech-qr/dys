<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#26597b">
        
        <title><?php the_title(); ?> - <?php echo get_bloginfo( 'name' ); ?></title>
        
        <meta name="author" content="Jet IT">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() . '/obrazy/favicon/favicon.ico'; ?>" />
        <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() . '/obrazy/favicon/favicon_57x57.png'; ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() . '/obrazy/favicon/favicon_72x72.png'; ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() . '/obrazy/favicon/favicon_114x114.png'; ?>">

        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/skrypty/jquery.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/skrypty/bootstrap.min.js'; ?>"></script>
        <script type="text/javascript" src="https://unpkg.com/youtube-background/jquery.youtube-background.min.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/skrypty/skrypty.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/skrypty/wkosciolach.min.js'; ?>"></script>
        <script src="http://dys.jet-it.pl/wp-content/plugins/gallery-block-lightbox/dist/baguetteBox.min.js?ver=1.11.1" id="baguettebox-js"></script>
        <script id="baguettebox-js-after">
            window.addEventListener("load", function() {baguetteBox.run(".wp-block-gallery,:not(.wp-block-gallery)>.wp-block-image,.wp-block-media-text__media,.gallery,.wp-block-coblocks-gallery-masonry,.wp-block-coblocks-gallery-stacked,.wp-block-coblocks-gallery-collage,.wp-block-coblocks-gallery-offset,.wp-block-coblocks-gallery-stacked,.mgl-gallery",{captions:function(t){var e=t.parentElement.classList.contains("wp-block-image")||t.parentElement.classList.contains("wp-block-media-text__media")?t.parentElement.querySelector("figcaption"):t.parentElement.parentElement.querySelector("figcaption,dd");return!!e&&e.innerHTML;},filter:/.+\.(gif|jpe?g|png|webp|svg|avif|heif|heic|tif?f|)($|\?)/i});});
        </script>
        
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style/css/bootstrap.min.css'; ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="preload stylesheet" as="style" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" id="baguettebox-css-css" href="http://dys.jet-it.pl/wp-content/plugins/gallery-block-lightbox/dist/baguetteBox.min.css?ver=1.11.1" media="all">
    </head>

    <body id="str_<?php echo get_the_ID(); ?> gora" <?php post_class(); ?>>