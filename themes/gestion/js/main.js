jQuery( document ).ready(function() {
  if (jQuery(window).width() >= 767) {
    jQuery('.dropdown-toggle').click(function() {
      var location = jQuery(this).attr('href');
      window.location.href = location;
      return false;
    });
  }
});