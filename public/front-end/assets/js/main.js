!(function (e) {
    "use strict";
    jQuery(document).on("ready", function () {
        e.fn.classyNav && e("#EduStudyNav").classyNav({ theme: "light" }),
        // e(function () {
        //     e('a[href="#search"]').on("click", function (o) {
        //         o.preventDefault(), e("#search-area").addClass("open"), e('#search-area > form > input[type="search"]').focus();
        //     }),
        //         e("#search-area, #search-area button.close").on("click keyup", function (o) {
        //             (o.target != this && "close" != o.target.className && 27 != o.keyCode) || e(this).removeClass("open");
        //         }),
        //         e("form").on("submit", function (e) {
        //             return e.preventDefault(), !1;
        //         });
        // }),
        e(".home-slides").owlCarousel({
            items: 1,
            loop: !0,
            autoplay: !0,
            nav: !0,
            animateOut: "fadeOut",
            animateIn: "fadeInUp",
            responsiveClass: !0,
            dots: !1,
            autoplayHoverPause: !0,
            mouseDrag: !0,
            navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"],
        }),
        e(".home-slides-two").owlCarousel({
            items: 1,
            loop: !0,
            autoplay: !0,
            nav: !0,
            animateOut: "fadeOut",
            responsiveClass: !0,
            dots: !1,
            autoplayHoverPause: !0,
            mouseDrag: !0,
            navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"],
        }),
        e(".popup-video").magnificPopup({ disableOn: 320, type: "iframe", mainClass: "mfp-fade", removalDelay: 160, preloader: !1, fixedContentPos: !1 }),
        e(".count").counterUp({ delay: 20, time: 1500 }),
        e(".news-slider").owlCarousel({
            nav: !0,
            dots: !1,
            margin: 30,
            center: !1,
            touchDrag: !1,
            mouseDrag: !0,
            autoplay: !0,
            smartSpeed: 750,
            autoplayHoverPause: !0,
            loop: !0,
            navText: ["<i class='icofont-thin-left'></i>", "<i class='icofont-thin-right'></i>"],
            responsive: { 0: { items: 1 }, 768: { items: 2 }, 1200: { items: 3 } },
        }),
        e(".partner-slider").owlCarousel({ nav: !1, dots: !1, mouseDrag: !0, margin: 30, autoplay: !0, smartSpeed: 750, autoplayHoverPause: !0, loop: !0, responsive: { 0: { items: 1 }, 768: { items: 3 }, 1200: { items: 6 } } }),
        e(".testimonials-slider").owlCarousel({
            nav: !0,
            dots: !1,
            center: !0,
            margin: 30,
            touchDrag: !1,
            items: 4,
            mouseDrag: !0,
            autoplay: !0,
            smartSpeed: 750,
            autoplayHoverPause: !0,
            loop: !0,
            navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"],
            responsive: { 0: { items: 1 }, 768: { items: 2 } },
        }),
        e(".about-slider").owlCarousel({
            items: 1,
            loop: !0,
            autoplay: !0,
            margin: 30,
            nav: !0,
            responsiveClass: !0,
            dots: !1,
            autoplayHoverPause: !0,
            mouseDrag: !0,
            navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"],
        }),
        e("#tabs li").on("click", function () {
            var o = e(this).attr("id");
            e(this).hasClass("inactive") &&
                (e(this).removeClass("inactive"),
                e(this).addClass("active"),
                e(this).siblings().removeClass("active").addClass("inactive"),
                e("#" + o + "_content").addClass("show"),
                e("#" + o + "_content")
                    .siblings("div")
                    .removeClass("show"));
        }),
        e(window).on("scroll", function () {
            e(this).scrollTop() > 300 ? e(".scrolltop").fadeIn() : e(".scrolltop").fadeOut();
        }),
        e(".scrolltop").on("click", function () {
            return e("html, body").animate({ scrollTop: 0 }, 1e3), !1;
        }),
        e(".scroll-down a, .slide-inner-content a, .cta-area a").on("click", function (o) {
            var a = e(this);
            e("html, body")
                .stop()
                .animate({ scrollTop: e(a.attr("href")).offset().top - 70 }, 1500),
                o.preventDefault();
        });
    }),

    jQuery(window).on("load", function () {
        e(".preloader-area").fadeOut();
    });

})(jQuery);