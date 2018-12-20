$(document).ready(function() {
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $("html, body").animate(
            {
              scrollTop: target.offset().top
            },
            1000,
            function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            }
          );
        }
      }
    });

  $(".shots-1").slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: "unslick"
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $(".shots-2").slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: "unslick"
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // SLIDE IN SCROLL
  function debounce(func, wait = 20, immediate = true) {
    var timeout;
    return function() {
      var context = this,
        args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  }

  const infoBoxes = document.querySelectorAll(".info-box");

  function checkSlide() {
    infoBoxes.forEach(infoBox => {
      // half way through the image
      const slideInAt =
        window.scrollY + window.innerHeight - infoBox.offsetHeight;
      // bottom of the image
      const imageBottom = infoBox.offsetTop + infoBox.offsetHeight;
      const isHalfShown = slideInAt > infoBox.offsetTop;
      const isNotScrolledPast = window.scrollY < imageBottom;
      console.log(imageBottom, isHalfShown, isNotScrolledPast, slideInAt);
      if (isHalfShown && isNotScrolledPast) {
        infoBox.classList.add("active");
      } else {
        infoBox.classList.remove("active");
      }
    });
  }

  window.addEventListener("scroll", debounce(checkSlide));
  // SLIDE IN SCROLL

  // MENU TRIGGER EVENT

  function triggerOn(e) {
    e.preventDefault();
    var menuInner = document.getElementById("menu-inner");
    var overLay = document.getElementById("sidebar-overlay");
    menuInner.classList.add("active-menu-inner");
    overLay.classList.add("active-sidebar-overlay");
    document.body.classList.add("overlay-overflow");
    document.getElementById("search-input");
  }
  function triggerOff() {
    var menuInner = document.getElementById("menu-inner");
    var overLay = document.getElementById("sidebar-overlay");
    document.body.classList.remove("overlay-overflow");
    menuInner.classList.add("menu-inner");
    menuInner.classList.remove("active-menu-inner");
    overLay.classList.remove("active-sidebar-overlay");
  }

  document.getElementById("menu-button").addEventListener("click", triggerOn);

  // MENU TRIGGER EVENT
});
