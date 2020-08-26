AOS.init({
    duration: 800,
    easing: "slide",
    once: true,
});
/* $(function () {
    $("#datepicker").datepicker();
}); */

jQuery(document).ready(function ($) {
    "use strict";

    var siteMenuClone = function () {
        $(".js-clone-nav").each(function () {
            var $this = $(this);
            $this
                .clone()
                .attr("class", "site-nav-wrap")
                .appendTo(".site-mobile-menu-body");
        });


        $(window).resize(function () {
            var $this = $(this),
                w = $this.width();

            if (w > 768) {
                if ($("body").hasClass("offcanvas-menu")) {
                    $("body").removeClass("offcanvas-menu");
                }
            }
        });


    };
    siteMenuClone();

    var siteSliderRange = function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            },
        });
        $("#amount").val(
            "$" +
            $("#slider-range").slider("values", 0) +
            " - $" +
            $("#slider-range").slider("values", 1)
        );
    };
    // siteSliderRange();

    var siteCarousel = function () {
        if ($(".nonloop-block-13").length > 0) {
            $(".nonloop-block-13").owlCarousel({
                center: false,
                items: 1,
                loop: true,
                stagePadding: 0,
                autoplay: true,
                margin: 20,
                nav: false,
                dots: true,
                navText: [
                    '<span class="icon-arrow_back">',
                    '<span class="icon-arrow_forward">',
                ],
                responsive: {
                    600: {
                        margin: 20,
                        stagePadding: 0,
                        items: 1,
                    },
                    1000: {
                        margin: 20,
                        stagePadding: 0,
                        items: 2,
                    },
                    1200: {
                        margin: 20,
                        stagePadding: 0,
                        items: 3,
                    },
                },
            });
        }

        if ($(".slide-one-item").length > 0) {
            $(".slide-one-item").owlCarousel({
                center: false,
                items: 1,
                loop: true,
                stagePadding: 0,
                margin: 0,
                autoplay: true,
                pauseOnHover: false,
                nav: true,
                animateOut: "fadeOut",
                animateIn: "fadeIn",
                navText: [
                    '<span class="icon-arrow_back">',
                    '<span class="icon-arrow_forward">',
                ],
            });
        }


    };
    siteCarousel();
});

$(document).ready(function () {
    // Add smooth scrolling to all links
    $(".scroll").on("click", function (event) {
        // Make sure this.hash has a value before overriding default behavior

        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $("html, body").animate({
                    scrollTop: $(hash).offset().top,
                },
                800,
                function () {
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                    /*                     $("a").addClass("current");
                     */
                }
            );
        } // End if
    });
});
let mainNavLinks = document.querySelectorAll(".navS ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];

window.addEventListener("scroll", event => {
    let fromTop = window.scrollY;

    mainNavLinks.forEach(link => {
        let section = document.querySelector(link.hash);

        if (
            section.offsetTop <= fromTop &&
            section.offsetTop + section.offsetHeight > fromTop
        ) {
            link.classList.add("current");
        } else {
            link.classList.remove("current");
        }
    });
});
