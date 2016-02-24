(function ($) {

    /* ---------------------------------------------- /*
     * Preloader
     /* ---------------------------------------------- */

    $(window).load(function () {
        $('#status').fadeOut();
        $('#preloader').delay(300).fadeOut('slow');
    });

    $(document).ready(function () {

        /* ---------------------------------------------- /*
         * Smooth scroll / Scroll To Top
         /* ---------------------------------------------- */

        $('a[href*=#]').bind("click", function (e) {

            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top
            }, 1000);
            e.preventDefault();
        });

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });

        /* ---------------------------------------------- /*
         * Navbar
         /* ---------------------------------------------- */

        $('.header').sticky({
            topSpacing: 0
        });

        $('body').scrollspy({
            target: '.navbar-custom',
            offset: 70
        })


        /* ---------------------------------------------- /*
         * Skills
         /* ---------------------------------------------- */
        //var color = $('#home').css('backgroundColor');

        $('.skills').waypoint(function () {
            $('.chart').each(function () {
                $(this).easyPieChart({
                    size: 140,
                    animate: 2000,
                    lineCap: 'butt',
                    scaleColor: false,
                    barColor: '#FF5252',
                    trackColor: 'transparent',
                    lineWidth: 10
                });
            });
        }, {offset: '80%'});


        /* ---------------------------------------------- /*
         * Quote Rotator
         /* ---------------------------------------------- */

        $(function () {
            /*
             - how to call the plugin:
             $( selector ).cbpQTRotator( [options] );
             - options:
             {
             // default transition speed (ms)
             speed : 700,
             // default transition easing
             easing : 'ease',
             // rotator interval (ms)
             interval : 8000
             }
             - destroy:
             $( selector ).cbpQTRotator( 'destroy' );
             */

            $('#cbp-qtrotator').cbpQTRotator();

        });


        /* ---------------------------------------------- /*
         * Home BG
         /* ---------------------------------------------- */

        $(".screen-height").height($(window).height());

        $(window).resize(function () {
            $(".screen-height").height($(window).height());
        });

        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            $('#home').css({'background-attachment': 'scroll'});
        } else {
            $('#home').parallax('50%', 0.1);
        }


        /* ---------------------------------------------- /*
         * WOW Animation When You Scroll
         /* ---------------------------------------------- */

        wow = new WOW({
            mobile: false
        });
        wow.init();


        /* ---------------------------------------------- /*
         * E-mail validation
         /* ---------------------------------------------- */

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        };

        /* ---------------------------------------------- /*
         * Contact form ajax
         /* ---------------------------------------------- */

        $('#contact-form').submit(function (e) {

            e.preventDefault();

            var c_name = $('#c_name').val();
            var c_email = $('#c_email').val();
            var c_message = $('#c_message ').val();
            var response = $('#contact-form .ajax-response');

            var formData = {
                'name': c_name,
                'email': c_email,
                'message': c_message
            };

            if (( c_name == '' || c_email == '' || c_message == '') || (!isValidEmailAddress(c_email) )) {
                response.fadeIn(500);
                response.html('<i class="fa fa-warning"></i> Please fix the errors and try again.');
            }

            else {
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'assets/php/contact.php', // the url where we want to POST
                    data: formData, // our data object
                    dataType: 'json', // what type of data do we expect back from the server
                    encode: true,
                    success: function (res) {
                        var ret = $.parseJSON(JSON.stringify(res));
                        response.html(ret.message).fadeIn(500);
                    }
                });
            }
            return false;
        });

        $('[data-toggle="tooltip"]').tooltip();

        $('.calltoaction').parallax();

        $('#proceduresAndFormats').parallax();

        $('#communityInfo').owlCarousel({
            autoPlay: 6000, //Set AutoPlay to 3 seconds
            items: 1,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });

        $('#webSites').owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 4
            //itemsDesktop : [1199,3],
            //itemsDesktopSmall : [979,3]
        });

        $('#carousel_history').owlCarousel({
            navigation: true,
            autoPlay: 10000, //Set AutoPlay to 3 seconds
            singleItem: true,
            //itemsDesktop : [1199,3],
            //itemsDesktopSmall : [979,3]
        });

        $("#images_actions_knowledge").justifiedGallery({
            margins: 10,
            rowHeight: 170,
            randomize: true
        });
        $("#images_actions_social").justifiedGallery({
            margins: 10,
            rowHeight: 170,
            randomize: true
        });
        $("#images_actions_professional").justifiedGallery({
            margins: 10,
            rowHeight: 170,
            randomize: true
        });
        $("#images_actions_university").justifiedGallery({
            margins: 10,
            rowHeight: 170,
            randomize: true
        });

        $("#images_actions_volunteer").justifiedGallery({
            margins: 10,
            rowHeight: 170,
            randomize: true
        });

        var Viewer = window.Viewer;
        var options = {
            // inline: true,
            movable: false,
            zoomable: false,
            rotatable: false,
            scalable: false,
            fullscreen: false,
            title: 0,
            url: 'data-original',
            build: function (e) {
                console.log(e.type);
            },
            built: function (e) {
                console.log(e.type);
            },
            show: function (e) {
                console.log(e.type);
            },
            shown: function (e) {
                console.log(e.type);
            },
            hide: function (e) {
                console.log(e.type);
            },
            hidden: function (e) {
                console.log(e.type);
            },
            view: function (e) {
                console.log(e.type);
            },
            viewed: function (e) {
                console.log(e.type);
                // this.viewer.zoomTo(1).rotateTo(180);
            }
        };
        var viewer1 = new Viewer(document.getElementById('images_actions_social'), options);
        var viewer2 = new Viewer(document.getElementById('images_actions_university'), options);
        var viewer3 = new Viewer(document.getElementById('images_actions_professional'), options);
        var viewer4 = new Viewer(document.getElementById('images_actions_volunteer'), options);

    });

})(jQuery);
