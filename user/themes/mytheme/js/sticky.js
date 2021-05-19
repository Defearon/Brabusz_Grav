$(document).ready(function() {
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  var carousel_bottom = document.getElementById("carousel");
  $(window).scroll(function() {
    /*window.alert(window.pageYOffset);*/
    if (window.pageYOffset > sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  });
});
