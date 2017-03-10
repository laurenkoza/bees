(function() {
  "use strict";
  console.log("SEAF Fired");
  // scroll usng scrollArrow icon
  var scrollAnchor = document.querySelector("#scrollAnchor");
  var scrollArrow = document.querySelector("#scrollArrow");
  var chevron = document.querySelector("#chevron");

  //main nav
  var mainNav = document.querySelector("#mainNav");
  var navRow = document.querySelector("#navRow");
  var stickyLogo = document.querySelector("#stickyLogo");

  //scrollArrow ulse effect
  TweenMax.fromTo(chevron, 0.8, {width:"35%"},{width:"40%", repeat: -1, yoyo:true});

  //scroll function
  function scroll() {
    TweenMax.to(window, 0.5, {scrollTo:scrollAnchor});
  }
  //change to sticky nav on scroll
  function stickyNav() {
    if(window.pageYOffset>window.innerHeight) {
      console.log("scrolled");
      mainNav.className = "column small-6 stickyNav";
      navRow.className = "stickyNavRow expanded row";
      stickyLogo.className = "column small-2";
    }else {
        mainNav.className = "column small-6 small-offset-4 staticNav";
        navRow.className = "row";
        stickyLogo.className = "column small-2 hidden";
    }
  }

  //listeners
  scrollArrow.addEventListener("click", scroll, false);
  window.addEventListener("scroll", stickyNav, false);
})();
