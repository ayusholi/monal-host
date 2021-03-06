! function(a) {
    "use strict";

    function t() { a(window).width() < 992 ? a(".nav-wrapper .nav-wrap-inner").hide() : a(".nav-wrapper .nav-wrap-inner").show() }

    function e() {
        var t = a(".nav-wrapper .nav > li > ul"),
            e = a(".nav-wrapper .nav > li > ul ul");
        t.each(function() { a(window).width() > 991 && a(this).offset().left + a(this).width() > a(window).width() && a(this).css({ left: "auto", right: "0" }) }), e.each(function() { a(window).width() > 991 && a(this).offset().left + a(this).width() > a(window).width() && a(this).css({ left: "auto", right: "100%" }) })
    }
    a('ul.nav li a[href="#"]').on("click", function(a) { a.preventDefault() }), a(".nav-wrapper").menumaker({ title: "<span></span>", format: "multitoggle" }), a(a(window)).on("scroll", function() { a("ul.nav").hasClass("open") || a("#menu-button").removeClass("menu-opened") }), a(window).on("resize", function() { t() }), t(), e(), a(window).resize(e), a(window).on("scroll", function() { a(window).scrollTop() < 180 ? a(".header-main.love-sticky").removeClass("sticky fixed-top fadeInDown animated") : a(".header-main.love-sticky").addClass("sticky fixed-top fadeInDown animated") }), a("[data-bg-img]").css("background-image", function() { return 'url("' + a(this).data("bg-img") + '")' }).removeAttr("data-bg-img").addClass("bg-img");
    var o = function(a, t) { return void 0 === a ? t : a };
    a(window).on("load", function() {
        jQuery("img.svg").each(function() {
            var a = jQuery(this),
                t = a.attr("id"),
                e = a.attr("class"),
                o = a.attr("src");
            jQuery.get(o, function(o) {
                var i = jQuery(o).find("svg");
                void 0 !== t && (i = i.attr("id", t)), void 0 !== e && (i = i.attr("class", e + " replaced-svg")), !(i = i.removeAttr("xmlns:a")).attr("viewBox") && i.attr("height") && i.attr("width") && i.attr("viewBox", "0 0 " + i.attr("height") + " " + i.attr("width")), a.replaceWith(i)
            }, "xml")
        })
    });
    let i = [{ featureType: "administrative.country", elementType: "geometry", stylers: [{ visibility: "simplified" }, { hue: "#ff0000" }] }];
    var n, s = a('[data-trigger="map"]');
    s.length && (n = s.data("map-options"), window.initMap = function() {
        s.css("min-height", "570px"), s.each(function() {
            var t, e, o, s = a(this);
            n = s.data("map-options"), t = parseFloat(n.latitude, 10), e = parseFloat(n.longitude, 10), o = parseFloat(n.zoom, 10), new google.maps.Map(s[0], { center: { lat: t, lng: e }, zoom: o, scrollwheel: !1, disableDefaultUI: !0, zoomControl: !0, styles: i })
        })
    }, initMap());
    var l = a(".back-to-top");
    if (l.length) {
        var r = function() { a(window).scrollTop() > 400 ? l.addClass("show") : l.removeClass("show") };
        r(), a(window).on("scroll", function() { r() }), l.on("click", function(t) { t.preventDefault(), a("html,body").animate({ scrollTop: 0 }, 700) })
    }
    a(".offcanvas-trigger").on("click", function() { a(".offcanvas-wrapper, .offcanvas-overlay").addClass("show") }), a(".offcanvas-overlay, .offcanvas-close").on("click", function() { a(".offcanvas-wrapper, .offcanvas-overlay").removeClass("show") }), a(".owl-carousel").each(function() {
        var t = a(this);
        t.owlCarousel({ items: o(t.data("owl-items"), 1), margin: o(t.data("owl-margin"), 0), loop: o(t.data("owl-loop"), !0), smartSpeed: 450, autoplay: o(t.data("owl-autoplay"), !0), autoplayTimeout: o(t.data("owl-speed"), 5e3), center: o(t.data("owl-center"), !1), animateIn: o(t.data("owl-animate-in"), !1), animateOut: o(t.data("owl-animate-out"), !1), nav: o(t.data("owl-nav"), !1), navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15"><path id="slider-left-arrow" d="M253.983,248.709a.75.75,0,0,1,1.034,1.086l-5.753,5.457H264.25a.75.75,0,0,1,0,1.5H249.288l5.729,5.457a.75.75,0,1,1-1.034,1.086l-6.544-6.232a1.5,1.5,0,0,1,.013-2.134Z" transform="translate(-247 -248.502)" fill="#4D56FF"/></svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15"><path id="slider-right-arrow" d="M258.017,248.709a.75.75,0,0,0-1.034,1.086l5.753,5.457H247.75a.75.75,0,0,0,0,1.5h14.962l-5.729,5.457a.75.75,0,1,0,1.034,1.086l6.544-6.232a1.5,1.5,0,0,0-.013-2.134Z" transform="translate(-247 -248.502)" fill="#4D56FF"/></svg>'], dots: o(t.data("owl-dots"), !1), stagePadding: o(t.data("owl-stage-padding"), !1), autoWidth: o(t.data("owl-auto-width"), !1), responsive: o(t.data("owl-responsive"), {}) })
    }), a(".video-btn").magnificPopup({ type: "video" }), a(".gallery-link").magnificPopup({ gallery: { enabled: !0 }, type: "image" }), a(window).on("load", function() { a(".preloader").fadeOut(1e3) }), a(".counter").counterUp({ delay: 100, time: 2e3 }), a(function() { a(".typed").typed({ strings: ["your website", "your hosting", "your cloud"], typeSpeed: 30, startDelay: 1200, backSpeed: 20, backDelay: 500, loop: !0, loopCount: 5 }), a(".typed2").typed({ strings: ["web host", "web cloud", "VPS host"], typeSpeed: 30, startDelay: 1200, backSpeed: 20, backDelay: 500, loop: !0, loopCount: 5 }) }), a(".search-toggle-btn").on("click", function() { a(".full-page-search").addClass("show") }), a(".search-close-btn").on("click", function() { a(".full-page-search").removeClass("show") }), a(".service_point-map-img").find(".l_info").on("mouseenter", function() { a(".service_point-map-img").find(".l_info").removeClass("active"), a(this).addClass("active") }), a(".contact-form-wrap, .question-form").on("submit", "form", function(t) {
        t.preventDefault();
        var e = a(this);
        a.post(e.attr("action"), e.serialize(), function(t) { t = a.parseJSON(t), e.parent(".contact-form-wrap, .question-form").find(".form-response").html("<span>" + t[1] + "</span>") })
    });
    var d = a(".men-img"),
        c = a(".monitor-img, .men-img1, .men-img2"),
        f = a(".text-img, .men-img3"),
        m = a(".layer");
    m.mousemove(function(a) {
        var t = 1 * a.pageX / 100,
            e = 1 * a.pageY / 100;
        d.css({ transform: "translate3d(" + t + "px, " + e + "px,0)" })
    }), m.on("mousemove", function(a) {
        var t = 1 * a.pageX / 200,
            e = 1 * a.pageY / 200;
        c.css({ transform: "translate3d(" + t + "px, " + e + "px,0)" })
    }), m.mousemove(function(a) {
        var t = -1 * a.pageX / 150,
            e = -1 * a.pageY / 150;
        f.css({ transform: "translate3d(" + t + "px, " + e + "px,0)" })
    }), a(".data_center_location-map").find(".l_info").on("mouseenter", function() { a(".data_center_location-map").find(".l_info").removeClass("active"), a(this).addClass("active") });
    var u = a(".filt-monthly"),
        w = a(".filt-yearly"),
        g = a(".switcher"),
        v = a(".monthly"),
        h = a(".yearly");
    u.on("click", function() { g.prop("checked", !1), u.addClass("toggler--is-active"), w.removeClass("toggler--is-active"), v.removeClass("hide"), p.addClass("hide") }), w.on("click", function() { g.prop("checked", !0), w.addClass("toggler--is-active"), u.removeClass("toggler--is-active"), v.addClass("hide"), p.removeClass("hide") }), g.on("click", function() { w.toggleClass("toggler--is-active"), u.toggleClass("toggler--is-active"), v.toggleClass("hide"), h.toggleClass("hide") })
}(jQuery);