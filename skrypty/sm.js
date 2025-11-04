jQuery(document).ready(function () {
    // Menu główne
    var menuMd = $('header > div.menu_wrap_new > div.pierwsza').outerHeight();
    console.log('Wysokość pierwszego menu to: ' + menuMd);
    // $('body > section .witaj').css('padding-top', menuMd + 'px');
    $('nav.glowne_new').removeClass('fixed-top');
    // $(window).on('scroll', function () {
    //     if ($(this).scrollTop() > menuMd) {
    //         $('nav.glowne_new').addClass('fixed-top');
    //         $('header .pierwsza').css('display', 'none');
    //         $('header .pierwsza ul li:first-child span').fadeOut(0);

    //     } else {
    //         $('nav.glowne_new').removeClass('fixed-top');
    //         $('header .pierwsza').css('display', 'block');
    //         $('header .pierwsza ul li:first-child span').fadeIn(0);
    //     }
    // });
});