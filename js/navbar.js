$(function () {
  $("#navbar-placeholder").load("navbar.html", function () {
    if ($(window).scrollTop() > 300) {
      $(".sticky-top").addClass("shadow-sm").css("top", "0px");
    } else {
      $(".sticky-top").removeClass("shadow-sm").css("top", "-100px");
    }
  });
});
