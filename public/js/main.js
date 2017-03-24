(function() {
  "use strict";
  console.log("SEAF Fired");
  // scroll usng scrollArrow icon
  var scrollAnchor = document.querySelector("#scrollAnchor");
  var scrollArrow = document.querySelector("#scrollArrow");
  var chevron = document.querySelector("#chevron");

  //show or hide text at mobile size
  var readMore = document.querySelector("#readMore");
  var hiddenText = document.querySelector("#hiddenText");

  //show text hide button
  function readmore() {
    if(hiddenText.className != 'hideText'){
      readMore.innerHTML = 'Read More';
    }else {
      readMore.innerHTML = 'Read Less';
    }
    hiddenText.classList.toggle('hideText');
  }

  //scrollArrow pulse effect
  TweenMax.fromTo(chevron, 0.8, {width:"35%"},{width:"40%", repeat: -1, yoyo:true});

  //scroll function
  function scroll() {
    TweenMax.to(window, 2, {scrollTo:scrollAnchor});
  }

  //listeners
  scrollArrow.addEventListener("click", scroll, false);
  readMore.addEventListener("click", readmore, false);
})();
