// When we click on the LI
$("a").click(function(){
  // If this isn't already active
  if (!$(this).hasClass("active")) {
    // Remove the class from anything that is active
    $("a").removeClass("active");
    // And make this active
    $(this).addClass("active");
  }
});