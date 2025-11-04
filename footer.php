        <footer>
            <a href="#gora" id="naGore" >
                <i class="bi bi-arrow-up-circle"></i>
            </a>
            <div>
                <div class="container pierwszy">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4 align-middle">
                            <a href="<?php echo get_home_url(); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/obrazy/logo_biale.svg'; ?>" />
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <?php echo get_post_field('post_content', 45); ?>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <a href="https://pl-pl.facebook.com/Parafiadyss/" target="_blank">
                                <i class="bi bi-facebook text-right"></i>
                            </a>                             
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container drugi">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <p>&copy; <?php echo date("Y"); ?> - Parafia w Dysie</p>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                       
                        </div>
                    </div>
                </div>                
            </div>
        </footer>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/skrypty/wow.min.js'; ?>"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>