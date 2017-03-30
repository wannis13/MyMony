/****************** Categorie menu déroulant ***********************/


if (window.matchMedia("(max-width: 700px)").matches) { //  when the size is under 700 px apply the click toggling to the undermenu mmh
  $(document).ready(function(){
    var status = false;

// On click if the status varibale is false the submenu fadein if it is true it fadeout
      $(".category").click(function(event){
        event.preventDefault();
        // Prevent the click from triggering document.touchclick(function())
         event.stopPropagation();
        if (status === false) {
          $("#menuderoulant ul").fadeIn(100);
          status = true;
        }
        else if (status === true) {
          event.preventDefault();
          $("#menuderoulant ul").fadeOut(100);
          status = false;
        }
        });
        // Trigger the fade out on menu when clicking on web page
        $(document).click(function() {
          $("#menuderoulant ul").fadeOut(100);
          status = false;
        });
  });

}

if (window.matchMedia("(min-width: 701px)").matches) { //  when the size is under 700 px apply the click toggling to the undermenu mmh
  $(document).ready(function(){
  	$("#menuderoulant , menuderoulant ul").hover(function(){
  		$("#menuderoulant ul").fadeIn(100);
  	});

    $("#menuderoulant , menuderoulant ul").mouseleave(function(){
  		$("#menuderoulant ul").fadeOut(100);
  	});
  });
}
