$(document).ready(function() {

  /* Small screen navigation */

  function openNav() {
    document.getElementById("mobNav").style.width = "50%";
  }
  function closeNav() {
    document.getElementById("mobNav").style.width = "0%";
  }

   $('#nav-mobile-open').click(openNav);
   $('#nav-mobile-close').click(closeNav);


   /* Keep distance */

   var navbar = document.getElementById("navbar");
   var navbarTotalTopDistance = $("#navbar").offset().top - $(window).scrollTop();
   var navbarHeight = $("#navbar").height();
   $("#content").css("padding-top", navbarHeight+"px");

  $( window ).resize(function() {
     navbarHeight = $("#navbar").height();
    $("#content").css("padding-top", navbarHeight+"px");
  });

});
