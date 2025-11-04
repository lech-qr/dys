jQuery(document).ready(function () {
    // Menu główne
    var menuMd = $('header > div.menu_wrap_new > div.pierwsza').outerHeight();
    console.log('Wysokość pierwszego menu to: ' + menuMd);
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > menuMd) {
            $('nav.glowne_new').addClass('fixed-top');
            $('body section:first-of-type').css('border-top', '60px solid rgb(0 60 100 / 100%)');
        } else {
            $('nav.glowne_new').removeClass('fixed-top');
            $('body section:first-of-type').css('border-top', '0 solid rgb(0 60 100 / 100%)');
        }
    });
});