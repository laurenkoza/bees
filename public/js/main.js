(function() {
  "use strict";
  console.log("SEAF Fired");
  // scroll usng scrollArrow icon
  var scrollAnchor = document.querySelector("#scrollAnchor");
  var scrollArrow = document.querySelector("#scrollArrow");
  var chevron = document.querySelector("#chevron");

  //scrollArrow pulse effect
  TweenMax.fromTo(chevron, 0.8, {width:"35%"},{width:"40%", repeat: -1, yoyo:true});

  //scroll function
  function scroll() {
    TweenMax.to(window, 0.5, {scrollTo:scrollAnchor});
  }

  //listeners
  scrollArrow.addEventListener("click", scroll, false);
})();
