(function() {
  "use strict";
  console.log("SEAF Fired");
  //main nav
  var mainNav = document.querySelector("#mainNav");
  var navRow = document.querySelector("#navRow");
  var stickyLogo = document.querySelector("#stickyLogo");

  //mobileNav
  var hamburgerIcon = document.querySelector("#hamburgerIcon");
  var hamburgerBars = document.querySelectorAll(".hamburgerBar");

  //change to sticky nav on scroll
  function stickyNav() {
    if(window.pageYOffset>=(window.innerHeight * 1.5)) {
      console.log("scrolled");
      mainNav.className = "column large-6 stickyNav";
      navRow.className = "stickyNavRow expanded row navRow";
      stickyLogo.className = "column  small-6 large-2";
    }else {
        mainNav.className = "column large-6 large-offset-4 staticNav";
        navRow.className = "row navRow";
        stickyLogo.className = "column small-6 large-2 hidden";
    }
  }

  //tween mainnav open at mobile
  function toggleMenu() {
    //make sure this animation only works if the browser is mobile or tablet
      if(window.innerWidth < 1200) {
        if(mainNav.style.height==="0vh") {
          TweenMax.to(mainNav, 2, {height:"40vh", ease:Elastic.easeOut});
        }else if(mainNav.style.height>"0vh") {
          TweenMax.to(mainNav, 1, {height:"0vh", ease:Back.easeIn});
        }
        for(var i=0;i<hamburgerBars.length;i++) {
          hamburgerBars[i].classList.toggle("barOpen");
        }
      }
  }

  //without this the nav sizing gets wonky if you scale to desktop size with the mobile nav open
  function navFix() {
    if(window.innerWidth < 1200) {
      mainNav.style.height = "0vh";
    }else if(window.innerWidth >=1200) {
      mainNav.style.height="inherit";
    }
  }
  //fire off to set the initial state of the nav depending on the browser size
  navFix();


  //listeners
  window.addEventListener("scroll", stickyNav, false);
  hamburgerIcon.addEventListener("click", toggleMenu, false);
  window.addEventListener("resize", navFix, false);
})();
