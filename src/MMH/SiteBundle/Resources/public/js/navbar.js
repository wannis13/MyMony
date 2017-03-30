/***************************** Responsive Nav Bar ******************************/

$(".menu-mobile-icon").click(function() { // toggle the menu when clicking on mobile menu icon
    $(".menu-list").fadeToggle(800);
});
if (window.matchMedia("(max-width: 700px)").matches) { //  when the size is under 700 px apply the click toggling to the undermenu mmh
    $(".mmh").click(function() {
        $(".under-menu-link").fadeToggle();
    });
}
// $(window).resize(function(){location.reload();}); // reload on resize
if (window.matchMedia("(max-width: 700px)").matches) { //  when the size is under 700 px apply the click toggling to the undermenu mmh
    $(window).scroll(function() {
        if ($(window).scrollTop() > 60) {
            $('.main-navbar').addClass('fixed');
            $('.main-navbar').parent().next().css("margin-top", "57px");
        } else {
            $('.main-navbar').removeClass('fixed');
            $('.main-navbar').parent().next().css('margin-top', "0px");
        }
    });
} else {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $('.main-navbar').addClass('fixed');
            $('.main-navbar').parent().next().css('margin-top', "50px");
            $('.triangle').css('top', 38);
        } else {
            $('.main-navbar').removeClass('fixed');
            $('.main-navbar').parent().next().css('margin-top', "0px");
            $('.triangle').css('top', 138);
        }
    });
}

// Move the triangle according to the current page

// Get the left position on the active link in the menu
var elementPosition = $('.active').offset();
var elementLocation = elementPosition.left;

// Get the width where to set the triangle
var parentWidth = ($('.active').width())/2;

// Set the triangle but substract the half of the tirangle size to be centered
$('.triangle').css('left', ((elementLocation+parentWidth)-7.5));

// When mouseover a menu title, the triangle follows
if (window.matchMedia("(min-width: 700px)").matches) {
$('.title').mouseenter(function(){

  titlePosition = $(this).offset();
  titleLocation = titlePosition.left;
  titleWidth = ($(this).width())/2;

  $('.triangle').css('left',((titleLocation+titleWidth)+12)).hide().fadeIn();
});

// When mouseleave returns to the original position
$('.title').mouseleave(function(){
  $('.triangle').css('left', ((elementLocation+parentWidth)-7.5));
});
}


/***************************** /Responsive Nav Bar *****************************/
