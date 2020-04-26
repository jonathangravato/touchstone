"use strict";

function toggleDropdown(e) {
  var _d = jQuery(e.target).closest('.dropdown'),
      _m = jQuery('.dropdown-menu', _d);

  setTimeout(function () {
    var shouldOpen = e.type !== 'click' && _d.is(':hover');

    _m.toggleClass('show', shouldOpen);

    _d.toggleClass('show', shouldOpen);

    jQuery('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
  }, e.type === 'mouseleave' ? 300 : 0);
} // jQuery('.dropdown-toggle').removeAttr('data-toggle');


jQuery('body').on('mouseenter mouseleave', '.dropdown', toggleDropdown);
"use strict";

jQuery("a").on('click', function (event) {
  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    // Prevent default anchor click behavior
    event.preventDefault(); // Store hash

    var hash = this.hash; // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

    jQuery('html, body').animate({
      scrollTop: jQuery(hash).offset().top
    }, 800, function () {
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  } // End if

});
"use strict";

jQuery(window).load(function () {
  if (jQuery('#team-sidebar-btn').css('display') == 'block') {
    jQuery('#team-sidebar').removeClass('show');
  }
});