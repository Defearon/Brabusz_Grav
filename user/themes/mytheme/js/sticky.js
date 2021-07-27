$(document).ready(function() {

  // NAVBAR
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  var carousel_bottom = document.getElementById("carousel");


  var footer = document.getElementById("custom-footer").offsetTop;

  $(window).scroll(function() {
  /*window.alert(window.pageYOffset);*/
    if (window.pageYOffset > sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  });

  // FOOTER


});
