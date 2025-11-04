jQuery(document).ready(function () {
    // Menu główne
    var menuMd = $('header > div.menu_wrap_new > div.pierwsza').outerHeight();
    console.log('Wysokość pierwszego menu to: ' + menuMd);
    $('body > section .witaj').css('padding-top', menuMd + 'px');
    $('nav.glowne_new').removeClass('fixed-top');
});