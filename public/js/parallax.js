(function() {
    "use strict";
//---------VAR-----------//

   var parallaxBG = document.querySelectorAll(".bgParallax");
   var winYOffset;
   var speedBG = 0.8;

//---------FUN-----------//

   function parallaxScroll() {
       [].slice.call(parallaxBG).forEach(
           function(el){
               for(var i=0; i<parallaxBG.length; i++){
                   winYOffset = window.pageYOffset;
                   var elBackgroundPOS = "50%" + (winYOffset * speedBG) + "px";
                   el.style.backgroundPosition = elBackgroundPOS;
               }
           }
       )
   }

//---------EVT-----------//
   window.addEventListener("scroll", parallaxScroll, false);

})();
