// Gallery Section
jQuery(document).ready(function($) {
  jQuery(".gallery-section").on("click", ".image-wrapper span", function() {
      var $lightbox = jQuery(this).parent().parent().parent().find('.lightbox');
      $lightbox.fadeIn(300);
      $lightbox.append("<img src='" + jQuery(this).parent().find("img").attr("src") + "' alt='" + jQuery(this).parent().find("img").attr("alt") + "' />");
      jQuery(".filter").css("background-image", "url(" + jQuery(this).parent().find("img").attr("src") + ")");
      jQuery("html").css("overflow", "hidden");
      // Check if first or last image to show/hide arrows
      if (jQuery(this).find("img").is(":last-child")) {
          jQuery(".arrowr").hide();
          jQuery(".arrowl").show();
      } else if (jQuery(this).find("img").is(":first-child")) {
          jQuery(".arrowr").show();
          jQuery(".arrowl").hide();
      } else {
          jQuery(".arrowr, .arrowl").show();
      }
  });
  jQuery(".close").click(function($) {
      jQuery(".lightbox").fadeOut(300).find('img').remove();
      jQuery("html").css("overflow", "auto");
  });
  jQuery(document).keyup(function(e) {
      if (e.keyCode == 27) {
          jQuery(".lightbox").fadeOut(300).find('img').remove();
          jQuery("html").css("overflow", "auto");
      }
  });
  jQuery(".arrowr").click(function($) {
    var imgSrc = jQuery(this).parent().find("img").attr("src");
    var search = jQuery(this).parent().parent().find(".image-wrapper").find("img[src$='" + imgSrc + "']");
    var newImage = search.parent().next().find("img").attr("src");
    jQuery(".lightbox img").attr("src", newImage);
    jQuery(".filter").css("background-image", "url(" + newImage + ")");

    if (!search.parent().next().is(":last-child")) {
      jQuery(".arrowl").css("display", "block");
    }
    else {
      jQuery(".arrowr").css("display", "none");
    }
  });
  jQuery(".arrowl").click(function($) {
    var imgSrc = jQuery(this).parent().find("img").attr("src");
    var search = jQuery(this).parent().parent().find(".image-wrapper").find("img[src$='" + imgSrc + "']");
    var newImage = search.parent().prev().find("img").attr("src");
    jQuery(".lightbox img").attr("src", newImage);
    jQuery(".filter").css("background-image", "url(" + newImage + ")");

    if (!search.parent().prev().is(":first-child")) {
      jQuery(".arrowr").css("display", "block");
    } else {
      jQuery(".arrowl").css("display", "none");
    }
  });
});


// Home 3 Services Section
jQuery(document).ready(function($) {
  var owl = $('.home-3-service-section .owl-carousel');
  // Initialize the Owl Carousel
  owl.owlCarousel({
      margin: 30,
      nav: false,
      loop: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 4500,
      responsive: {
          0: { items: 1 },
          360: { items: 1 },
          576: { items: 2 },
          768: { items: 2 },
          992: { items: 3 },
          1200: { items: 4 },
          1610: { items: 5 }
      }
  });
});