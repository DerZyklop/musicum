### global $, document, window ###

$(document).ready ->
  $('.fullsize').outerHeight window.innerHeight, true

  $('a.smooth-scroll').click (e) ->
    e.preventDefault()
    $('html, body').animate
      scrollTop: $( $(this).attr('href') ).offset().top
    , 500
    false
