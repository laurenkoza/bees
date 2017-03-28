<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700,900|Open+Sans:300,300i,400,700" rel="stylesheet">
  </head>

<body>
  <header id="{{$headerImg}}" class="expanded row">
    <div class="layer" data-depth="-0.15"><img src="img/splashImg/{{$headerImg}}.jpg" class="parallaxImg" alt=""></div>
    <div class="layer hex" data-depth="0.20"><!-- parallax layer --></div>
    <div class="layer" data-depth="0.80"><!-- parallax layer --></div>
    <div id="color" class="layer" data-depth="0.001"><!-- parallax layer color fade in --></div>

    <div id="navRow" class="row navRow">
      <div id="stickyLogo" class="column large-2 small-6 hidden">
        <a href="index"><img src="img/icons/logo_horizontal.svg" alt="Heff's Hives logo"></a>
      </div>
      <div id="hamburgerIcon" class="column small-2 small-offset-4 hidden">
        <button type="button">
          <div class="hamburgerBar"></div>
          <div class="hamburgerBar"></div>
          <div class="hamburgerBar"></div>
        </button>
      </div>

      <nav id="mainNav" class="column small-12 large-6 large-offset-4 staticNav">
        <ul>
          <li><a href="learn">Learn</a>
            <div class="hoverBar"></div>
          </li>
      		<li><a href="services">Services</a>
            <div class="hoverBar"></div>
          </li>
      		<li><a href="shop">Shop</a>
            <div class="hoverBar"></div>
          </li>
      		<li><a href="contact">Contact</a>
            <div class="hoverBar"></div>
          </li>
        </ul>
      </nav>
    </div>
    <div id="splashContent" class="layer" data-depth="1.50">
      <div class="row">
        <div id="logo" class="column small-12 small-centered">
          <a href="index"><img src="img/icons/logo.svg" alt="Heff's Hives Logo"></a>
          <div class="row">
            <div id="logoText" class="column small-12 small-centered">
              <img src="img/icons/logoText.svg" alt="Heff's Hives Logo">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="socialIcons" class="column small-5 medium-4 large-2 small-centered">
          <ul>
            <li><a href="https://www.facebook.com/HeffsHoney/" target="_blank"><img src="img/icons/twitter.svg" alt="Twitter"></a></li>
            <li><a href="https://www.facebook.com/HeffsHoney/" target="_blank"><img src="img/icons/facebook.svg" alt="Facebook"></a></li>
            <li><a href="https://www.facebook.com/HeffsHoney/" target="_blank"><img src="img/icons/instagram.svg" alt="Instagram"></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div id="scrollArrow" class="column small-5 large-2 small-centered">
          <img id="chevron" src="img/icons/scroll.svg" alt="Chevron">
        </div>
      </div>
      </div>
  </header>
