"use strict";

var openBtns = document.querySelectorAll("[data-open-modal]");
var closeBtn = document.querySelector("[data-close-modal]");
var modal = document.querySelector("[data-modal]");
var html = document.querySelector("html");
if (openBtns.length > 0) {
  openBtns.forEach(function (openBtn) {
    openBtn.addEventListener("click", function () {
      modal.showModal();
      html.classList.toggle("no-scroll");
    });
  });
  if (closeBtn) {
    closeBtn.addEventListener("click", function () {
      modal.close();
      html.classList.toggle("no-scroll");
    });
  }
}
"use strict";

var glide = document.querySelectorAll(".glide");
if (glide.length > 0) {
  new Glide(".glide", {
    type: "slide",
    perView: 1,
    autoplay: false,
    rewind: false,
    gap: 0
  }).mount();
}
"use strict";

//Photoswipe init
/* global jQuery, PhotoSwipe, PhotoSwipeUI_Default, console */

(function ($) {
  // Init empty gallery array
  var container = [];

  // Loop over gallery items and push it to the array
  $("#gallery").find("figure").each(function () {
    var $link = $(this).find(".open-gallery"),
      item = {
        src: $link.attr("href"),
        w: $link.data("width"),
        h: $link.data("height"),
        title: $link.data("caption")
      };
    container.push(item);
  });

  // Define click event on gallery item
  $(".open-gallery").click(function (event) {
    // Prevent location change
    event.preventDefault();

    // Define object and gallery options
    var $pswp = $(".pswp")[0],
      options = {
        index: $(this).parent("figure").index(),
        bgOpacity: 0.9,
        showHideOpacity: true
      };

    // Initialize PhotoSwipe
    var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
    gallery.init();
  });
})(jQuery);