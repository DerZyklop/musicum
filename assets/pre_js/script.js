/* global $, document, window*/


(function() {
  $(document).ready(function() {
    $('.fullsize').outerHeight(window.innerHeight, true);
    return $('a.smooth-scroll').click(function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 500);
      return false;
    });
  });

}).call(this);
