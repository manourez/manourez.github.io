// When we click on the LI
$(".nav-link").click(function(){
  // If this isn't already active
  if (!$(this).hasClass("active")) {
    // Remove the class from anything that is active
    $(".nav-link.active").removeClass("active");
    // And make this active
    $(this).addClass("active");
  }
});