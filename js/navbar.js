$(function () {
  $("#navbar-placeholder").load("navbar.html", function () {
    $(".sticky-top").css("top", "0px");
    if ($(window).scrollTop() > 300) {
      $(".sticky-top").addClass("shadow-sm");
    } else {
      $(".sticky-top").removeClass("shadow-sm");
    }
  });
});
