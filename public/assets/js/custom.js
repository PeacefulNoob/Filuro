/*
 * File Name: Helper Js file
 * File Author: Design Arc
 * File Description: This is helper javascript file. Used for activating js plugins and Other javascript effects adding. Thanks
 */

/*-------------------------------------
--------- TABLE OF CONTENT ------------
---------------------------------------

1.bannerSlider
2. galleryMasonaryLayout
3. GalleryFilter
4. fancyboxInit
5. gMap
6. testimonialCarosule
7. SmoothMenuScroll
8. OnePageMenuScroll
9. DeadMenuConfig
10. contactFormValidation
11. videoFancybox
12. sliding gallery 
13. hiddenBarMenuConfig
14. customScrollBarHiddenSidebar
15. hiddenBarToggler
16. handlePreloader
17. stickyHeader

----------------------------------------
--------------------------------------*/

"use strict";

// 1.bannerSlider
function bannerSlider() {
    if ($(".banner-one").length) {
        $(".banner-one").vegas({
            timer: false,
            transition: ["fade2"],
            slides: [
                { src: "img/slides/slide1.jpg" },
                { src: "img/slides/slide2.jpg" },
                { src: "img/slides/slide3.jpg" },
                { src: "img/slides/slide4.jpg" },
            ],
        });
    }
    if ($(".banner-two").length) {
        $(".banner-two").vegas({
            timer: false,
            transition: ["fade2"],
            slides: [
                { src: "img/banner-style-two/2.jpg" },
                { src: "img/banner-style-two/3.jpg" },
            ],
        });
    }
}
// 2. galleryMasonaryLayout
function galleryMasonaryLayout() {
    if ($(".masonary-gallery").length) {
        var container = $(".masonary-gallery");

        container.on("load", function () {
            container.masonry({
                itemSelector: ".masonryImage",
            });
        });
    }
}
// 3. GalleryFilter
function GalleryFilter() {
    if ($(".image-gallery").length) {
        $(".image-gallery").each(function () {
            var filterSelector = $(this).data("filter-class");
            var showItemOnLoad = $(this).data("show-on-load");
            if (showItemOnLoad) {
                $(this).mixItUp({
                    load: {
                        filter: "." + showItemOnLoad,
                    },
                    selectors: {
                        filter: "." + filterSelector,
                    },
                });
            }
            $(this).mixItUp({
                selectors: {
                    filter: "." + filterSelector,
                },
            });
        });
    }
}
// 4. fancyboxInit
function fancyboxInit() {
    if ($("a.fancybox").length) {
        $("a.fancybox").fancybox();
    }
}

// 12. sliding gallery
function slidingGallery() {
    var galleryWrap = $(".sliding-gallery .image-gallery");
    if (galleryWrap.length) {
        galleryWrap.bxSlider({
            minSlides: 1,
            maxSlides: 4,
            slideWidth: 480,
            slideMargin: 0,
            useCSS: false,
            ticker: true,
            autoHover: true,
            tickerHover: true,
            speed: 100000,
            infiniteLoop: true,
        });
    }
}
// 13. hiddenBarMenuConfig
function hiddenBarMenuConfig() {
    var menuWrap = $(".hidden-bar .main-menu");
    // appending expander button
    menuWrap
        .find(".dropdown")
        .children("a")
        .append(function () {
            return '<button type="button" class="btn expander"><i class="fa fa-chevron-down"></i></button>';
        });
    // hidding submenu
    menuWrap.find(".dropdown").children("ul").hide();
    // toggling child ul
    menuWrap.find(".btn.expander").each(function () {
        $(this).on("click", function () {
            $(this)
                .parent() // return parent of .btn.expander (a)
                .parent() // return parent of a (li)
                .children("ul")
                .slideToggle();

            // adding class to expander container
            $(this).parent().toggleClass("current");
            // toggling arrow of expander
            $(this).find("i").toggleClass("fa-chevron-up fa-chevron-down");

            return false;
        });
    });
}

// 16. handlePreloader
function handlePreloader() {
    if ($(".preloader").length) {
        $(".preloader").fadeOut();
    }
}

// 20. galleryModal
function galleryModal() {
    if ($("#single-gallery-modal").length && $(".single-gallery").length) {
        $(".single-gallery .link-view")
            .children("a")
            .on("click", function () {
                // grabing elements
                var parentDiv = $(this).parents(".single-gallery");
                var modalContent = parentDiv.find(".modal-content");
                var itemTitle = modalContent.find(".item-name").text();
                var itemImg = modalContent.find(".item-image").attr("src");
                var itemContent = modalContent.find(".item-text").html();

                // doing reset
                $("#single-gallery-modal").find(".item-name").empty();
                $("#single-gallery-modal")
                    .find(".img-holder img")
                    .attr("src", "");
                $("#single-gallery-modal").find(".item-text").empty();

                // adding content
                $("#single-gallery-modal").find(".item-name").text(itemTitle);
                $("#single-gallery-modal")
                    .find(".img-holder img")
                    .attr("src", itemImg);
                $("#single-gallery-modal")
                    .find(".item-text")
                    .append(itemContent);

                $("#single-gallery-modal").modal("show");

                return false;
            });
    }
}

// instance of fuction while Document ready event
jQuery(document).on("ready", function () {
    (function ($) {
        bannerSlider();
        galleryMasonaryLayout();
        GalleryFilter();
        fancyboxInit();
        slidingGallery();
        hiddenBarMenuConfig();
        galleryModal();
    })(jQuery);
});
// instance of fuction while Window Load event
jQuery(window).on("load", function () {
    (function ($) {
        handlePreloader();
    })(jQuery);
});
