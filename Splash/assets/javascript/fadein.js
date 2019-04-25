var fadeinList = [];

function initFadeins() {
   $(document).scrollTop(0);

   fadeinList = Array.from(document.getElementsByClassName("appear"));
   for (var x = 0; x < fadeinList.length; x++) {
      fadeinList[x].style.opacity = 0;
   }
}

function checkForFadeins() {
   for (var x = 0; x < fadeinList.length; x++) {
      var elem = fadeinList[x];
      if (elem.getBoundingClientRect().top <= 500) {
         fadein(elem, 0);
         fadeinList.splice(x, 1);
         console.log("There are now " + fadeinList.length);
      }
   }
}

function fadein(elem, opacity) {
   if (opacity < 1) {
      opacity += .1;
      setTimeout(function () { fadein(elem, opacity) }, 40);
   }
   elem.style.opacity = opacity;
}