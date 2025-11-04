<div class="menu_wrap">
    <div id="icon-menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>    
    <div class="pierwsza">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-12 col-md-9 nazwa">
                    <h1><?php echo get_bloginfo('name'); ?></h1>
                    <h2><?php echo get_bloginfo('description'); ?></h2>                    
                </div>
                <div class="col-sm-12 col-md-3 menu">              
                    <ul>
                        <li title="Transmisja on-line" data-bs-toggle="modal" data-bs-target="#transmisja">
                            <i class="bi bi-youtube"></i><span class="animate__animated animate__heartBeat animate__infinite infinite"></span>
                        </li>
                        <li title="Godziny mszy" data-bs-toggle="modal" data-bs-target="#godziny_mszy">
                            <i class="bi bi-clock-fill"></i><span></span>
                        </li>
                        <li title="Wsparcie" data-bs-toggle="modal" data-bs-target="#wsparcie">
                            <i class="bi bi-cash-coin"></i><span></span>
                        </li>
                        <li title="Facebook">
                            <a href="https://pl-pl.facebook.com/Parafiadyss/" target="_blank"><i class="bi bi-facebook"></i><span></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="container glowne">
        <div class="row">
            <div class="d-none d-md-none d-lg-block col-lg-2 ">
                <a href="/">
                    <img class="logo" src="<?php echo get_stylesheet_directory_uri() . '/obrazy/logo_tlo.svg'; ?>" />
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-10">
                <?php wp_nav_menu(array('theme_location' => 'glowne-menu')); ?>    
            </div>
        </div>
    </nav>
</div>

<?php include 'pierwsza_nawigacja.php'; ?>