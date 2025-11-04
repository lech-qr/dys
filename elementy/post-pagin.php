<nav class="navigation post-navigation" aria-label="Wpisy">
    <div class="nav-links row">
        <div class="nav-prev col-6">
            <?php 
            previous_post_link(
                '%link',
                _x( '<i class="bi bi-arrow-left-circle">', 'Previous post link', 'morphology' ) . '</i><span><b>%title</b></span>',
                    true
            ); ?>
        </div>
        <div class="nav-next col-6">
            <?php
            next_post_link(
                '%link',
                '<span><b>%title</b></span>' . _x( '<i class="bi bi-arrow-right-circle">', 'Next post link', 'morphology' ) . '</i>',
                    true
            );
            ?>
        </div>
    </div>
</nav>