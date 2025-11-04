jQuery(document).ready(function () {
    // Scroll do kotwicy
    $('a[href^="#"]').click(function (event) {
        var id = $(this).attr("href");
        var offset = 60;
        var target = $(id).offset() - offset;
        $('html, body').animate({ scrollTop: target }, 500);
        event.preventDefault();
    });
    // Scroll do kotwicy + offset
    (function ($, window) {
        var adjustAnchor = function () {

            var $anchor = $(':target'),
                fixedElementHeight = 100;

            if ($anchor.length > 0) {

                $('html, body')
                    .stop()
                    .animate({
                        scrollTop: $anchor.offset().top - fixedElementHeight
                    }, 200);

            }

        };

        $(window).on('hashchange load', function () {
            adjustAnchor();
        });

    })(jQuery, window);



    // Powrót na górę
    var wysokoscOkna = window.innerHeight;
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > wysokoscOkna * 1.5) {
            $('#naGore').fadeIn(200);
        } else {
            $('#naGore').fadeOut(300);
        }
    });

    // Menu mobilne
    var tmpMenu = 0;
    $('#icon-menu').click(function () {
        $('body').toggleClass("clip");
        $(this).toggleClass("open");
        if (tmpMenu === 0) {
            $('.menu_wrap_new').animate({
                right: "0"
            }, 500);
            // $('header .menu_wrap_new #icon-menu').animate({
            //     left: "87vw"
            // }, 500);
            // $('.menu-gl-op').css('overflow', 'visible');
            tmpMenu = 1;
        } else {
            $('.menu_wrap_new').animate({
                right: "-89vw"
            }, 500);
            // $('header .menu_wrap_new #icon-menu').animate({
            //     left: "0"
            // }, 500);
            tmpMenu = 0;
        }
    });

    // Łamanie tekstu
    $('header .menu_wrap_new .nazwa a > h1').html('Parafia Rzymskokatolicka pod wezwaniem<br>Świętego&nbsp;Jana&nbsp;Chrzciciela<br>w Dysie');

    // Youtube w tle
    jQuery('[data-vbg]').youtube_background();

    // Przejścia dopiero po załadowaniu DOMu
    $(window).bind('load', function () {
        $('body a, body span, ul.sub-menu').css({
            '-webkit-transition': '.2s',
            '-moz-transition': '.2s',
            '-ms-transition': '.2s',
            '-o-transition': '.2s'
        });

        // Przyklej menu mobilne
        var wysokoscMenu = $('header .menu_wrap').outerHeight(true);
        var przyklejMenu = wysokoscMenu - wysokoscOkna;
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > przyklejMenu) {
                $('header .menu_wrap').addClass('mobileFix');
            } else {
                $('header .menu_wrap').removeClass('mobileFix');
            }
        });

    });

    // Szerokość urządzenia
    szerokosc = $(window).width();
    function dodajJS() {
        if ((szerokosc > 0) && (szerokosc <= 768)) {
            console.log('Mobile…');
            $("head").append('<script id="respons_js" src="/wp-content/themes/dys/skrypty/sm.min.js"><\/script>');
        } else if ((szerokosc >= 769) && (szerokosc <= 992)) {
            console.log('Tablet pionowo…');
            $("head").append('<script id="respons_js" src="/wp-content/themes/dys/skrypty/md.min.js"><\/script>');
        } else if ((szerokosc >= 993) && (szerokosc <= 1366)) {
            console.log('Tablet poziomo…');
            $("head").append('<script id="respons_js" src="/wp-content/themes/dys/skrypty/lg.js"><\/script>');
        } else if (szerokosc >= 1367) {
            console.log('Desktop…');
            $("head").append('<script id="respons_js" src="/wp-content/themes/dys/skrypty/xl.min.js"><\/script>');
        }
    }
    dodajJS();
    $(window).resize(function () {
        $('#respons_js').remove();
        szerokosc = $(window).width();
        dodajJS();
    });

    // Linia za blokiem
    $('.wp-block-group > .wp-block-group').append('<span class="linia_1"></span>');

    // Inwestycje
    $('.post-791 div.wp-block-columns').addClass('row');
    $('.post-791 div.wp-block-column').addClass('col-md-4 col-sm-12');

});