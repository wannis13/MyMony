// This file contains small scripts used for minor functionalities, for bigger component check labelled js files

$(document).ready(function() {
  // Center the view on cards on /découvrir-les-projets
  // get url path
  var path = window.location.href;
  // get last part of url and check if url matches
  var hashed = path.slice(-23);
  if(hashed.search('decouvrir') != -1) {
    // smooth scroll
    $('html, body').animate({
		    scrollTop:$('.wrapper-nav').offset().top
    }, 1000);
  }
});

/* End Document Ready */
/***********************************************************/

// Adjust number of cards displayed according to resolution

if (window.matchMedia("(max-width: 700px)").matches) {
  $('.home-cards').each(function(index) {
    // 3 cards displayed on smartphone
    if(index >= 3) {
      $(this).css('display', 'none');
    }
  });
} else {
  if (window.matchMedia("(max-width: 1010px)").matches) {
    $('.home-cards').each(function(index) {
      // 4 cards displayed on tablets and small screen
      if(index >= 4) {
        $(this).css('display', 'none');
      }
    });
  }
}

/***********************************************************/

// Trigger progressBar animation when user has scrolled down enough

$(window).scroll(function() {
  if ($(window).scrollTop() > $('.wrapper-nav').offset().top) {
    // Get every dom object which class ='progression'
    $('.progression').each(function(){
      // get the width of element from it's children
      var width = $(this).children().text();
      // adjust margin if value > 100%
      if(width.length > 3) {
        $(this).children().css('margin-left', '82px');
      }
      // Apply
      $(this).css('width', width);
    });
  }
});

// Make the message on the contact for disapear after a time
setTimeout(function(){
  $(".flashmessage").fadeOut('slow');
}, 3000);
