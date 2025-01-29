var
    //selector vars
    main_window = $(window),
    root = $('html, body'),
    bdyOnePage = $('body.landing-page-demo '),
    pageHeader = $('#page-header'),
    navMain = $('nav.menu-navbar'),
    navMenuwrapper = $('.navbar-menu-wrapper'),
    hasSubMenu = $(".has-sub-menu"),
    onePage_menuLink = $('.landing-page-demo .menu-navbar .menu-link'),

    // Measurements vars
    navMainHeight = navMain.innerHeight(),

    //class Names Strings vars

    inputHasText = "has-text",

    // condetionals vars
    counterShowsUp = false;

(function($) {

    "use strict";
    /*  START #page-header js rules */

    // Start open/close navbar search box
    $(".header-search-box form").on("click", function (e) {
        e.stopPropagation()
    });

    $('.header-search-btn').on("click", function () {
        $(".header-search-box").addClass('show');

        setTimeout(function () {
            $(".search-input").focus()
        }, 1000);
    });

    $('.header-search-box .close-search , .header-search-box').on("click", function () {
        $(".header-search-box").removeClass('show');
    });
    // End open/close navbar search box


    /* Start bootstrap Scrollspy Options  */
    //on one page demos only
//   if (navMain) {
//       $(bdyOnePage).scrollspy({
//           target: navMain,
//           offset: navMainHeight + 1
//       });
//   }


    if ($(this).scrollTop() > 50) {
        if (!$(pageHeader).hasClass("is-sticky")) {
            pageHeader.addClass("is-sticky");
        }
    }

    main_window.on("scroll", function () {
        if ($(this).scrollTop() > 50) {
            if (!$(pageHeader).hasClass("is-sticky")) {
                pageHeader.addClass("is-sticky");
            }
        } else {
            if ($(pageHeader).hasClass("is-sticky")) {
                pageHeader.removeClass("is-sticky");
            }
        }
    });

    // show/hide navbar links menu
    $(".menu-toggler").on("click", function () {
        pageHeader.find(".show:not(.bar-bottom .links) ").removeClass("show");
        pageHeader.find(".bar-bottom .links").toggleClass("show");
        $('.menu-toggler').toggleClass('close-menu')
    });

    // show/hide navbar info menu
    $(".info-toggler, .close-icon").on("click", function () {
        pageHeader.find(".show:not(.bar-top .info-panel)").removeClass("show");
        pageHeader.find(".bar-top .info-panel").toggleClass("show");
        if ($('.menu-toggler').hasClass('close-menu')) {
            $('.menu-toggler').removeClass('close-menu')
        }

    });



    $(".list-js").on("click", function (e) {
        e.stopPropagation()
    });

    // close the currnt opend menu when click on its wrapper
    $(".menu-wrapper").on("click", function () {
        $(this).removeClass("show");
        if ($('.menu-toggler').hasClass('close-menu')) {
            $('.menu-toggler').removeClass('close-menu')
        }
    });

    //showing navbar sub-menus on mobile
    hasSubMenu.on("click", function (e) {
        if (!(main_window.innerWidth() > 991)) {
            $(this).children('.sub-menu').slideToggle();
        }
    });
    $(".slider-fade").owlCarousel({
        items: 1,
        loop: !0,
        dots: !0,
        margin: 0,
        rtl: true,
        nav: !1,
        navText: ["<span class='fas fa-arrow-left'></span>", "<span class='fas fa-arrow-right'></span>"],
        autoplay: !0,
        smartSpeed: 1500,
        mouseDrag: !0,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        responsive: {
            992: {
                nav: !0,
                dots: !1
            }
        }
    });
    $(".client-carousel").owlCarousel({
        loop: !0,
        responsiveClass: !0,
        autoplay: !0,
        autoplayTimeout: 5e3,
        smartSpeed: 1500,
        rtl: true,
        nav: !1,
        dots: !1,
        center: !1,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            481: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    });
    $(".owl-carousel").owlCarousel({
        items: 1,
        rtl: true,
        loop: !0,
        dots: !1,
        margin: 0,
        autoplay: !0,
        smartSpeed: 500
    }), $(".slider-fade").on("changed.owl.carousel", function (e) {
        e = e.item.index - 2;
        $("span").removeClass("animated fadeInUp"), $("h1").removeClass("animated fadeInUp"), $("p").removeClass("animated fadeInUp"), $("a").removeClass("animated fadeInUp"), $(".owl-item").not(".cloned").eq(e).find("span").addClass("animated fadeInUp"), $(".owl-item").not(".cloned").eq(e).find("h1").addClass("animated fadeInUp"), $(".owl-item").not(".cloned").eq(e).find("p").addClass("animated fadeInUp"), $(".owl-item").not(".cloned").eq(e).find("a").addClass("animated fadeInUp")
    });

    var pageSection = $(".parallax,.bg-img");
    pageSection.each(function (e) {
        $(this).attr("data-background") && $(this).css("background-image", "url(" + $(this).data("background") + ")")
    });


    if ($(".cursor-helper").length) {

        var cursor = document.querySelector('.cursor-helper-outer');
        var cursorinner = document.querySelector('.cursor-helper-inner');
        var a = document.querySelectorAll('a');
        var footer = document.querySelectorAll('footer');
        var owlcarousel = document.querySelectorAll('.owl-carousel');

        document.addEventListener('mousemove', function (e) {
            var x = e.clientX;
            var y = e.clientY;
            cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
        });

        document.addEventListener('mousemove', function (e) {
            var x = e.clientX;
            var y = e.clientY;
            cursorinner.style.left = x + 'px';
            cursorinner.style.top = y + 'px';
        });

        document.addEventListener('mousedown', function () {
            cursor.classList.add('click');
            cursorinner.classList.add('cursor-helper-innerhover')
        });

        document.addEventListener('mouseup', function () {
            cursor.classList.remove('click')
            cursorinner.classList.remove('cursor-helper-innerhover')
        });

        a.forEach(item => {
            item.addEventListener('mouseover', () => {
                cursor.classList.add('cursor-link');
            });
            item.addEventListener('mouseleave', () => {
                cursor.classList.remove('cursor-link');
            });
        });

        footer.forEach(item => {
            item.addEventListener('mouseover', () => {
                cursor.classList.add('cursor-light');
            });
            item.addEventListener('mouseleave', () => {
                cursor.classList.remove('cursor-light');
            });
        });

        owlcarousel.forEach(item => {
            item.addEventListener('mouseover', () => {
                cursor.classList.add('cursor-slider');
            });
            item.addEventListener('mouseleave', () => {
                cursor.classList.remove('cursor-slider');
            });
        });

    }
    $(document).ready(function () {
        $('.support').on('click',function () {
            $('.social-links-fixed').toggleClass('open');
        });
    });
})(window.jQuery);
