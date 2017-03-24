    function parallax(event) {
      var topdistance = this.pageYOffset;
      var layers = document.querySelectorAll(".layer");
      var color = document.querySelector("#color");

      for(var i=0;i<layers.length;i++) {
        layer = layers[i];
        depth = layer.getAttribute('data-depth');
        movement = -(topdistance * depth);
        translate3d = 'translate3d(0,'+movement+'px,0)';
        layer.style['webkit-transform'] = translate3d;
        layer.style['moz-transform'] = translate3d;
        layer.style['ms-transform'] = translate3d;
        layer.style['o-transform'] = translate3d;
        layer.style.transform = translate3d;
      }
      colDepth = color.getAttribute('data-depth');
      color.style.opacity = (topdistance * colDepth);
    }

    window.addEventListener("scroll", parallax, false);
