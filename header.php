<!DOCTYPE html>
<html lang="en">
<head>

  <!-- BASIC
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="http://eligam.co/wp-content/themes/eligam/style.css">

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="http://eligam.co/wp-content/themes/eligam/assets/js/base.js"></script>
  <script src="http://eligam.co/wp-content/themes/eligam/assets/js/mobile-nav.js"></script>
  <script src="http://eligam.co/wp-content/themes/eligam/assets/js/modernizer.js"></script>

</head>
<body>

  <!-- NAV
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="nav full-white">
    <div class="container">
    <a href="/"><img class="nav-logo" alt="eligam logo" title="eligam logo" src="http://eligam.co/wp-content/themes/eligam/assets/images/logo.png" id="logo" width="300" height="auto" ></a>
      <ul class="navbar-list">
        <li class="navbar-item">
          <a href="/homeware" class="underline">homeware</a>
          <div class="nav-dropdown">
            <a href="/homeware/kitchen">kitchen</a>
            <a href="/homeware/living-room">living room</a>
            <a href="/homeware/bedroom">bedroom</a>
            <a href="/homeware/bathroom">bathroom</a>
            <a href="/homeware/furniture">furniture</a>
            <a href="/homeware/accessories">accessories</a>
          </div>
        </li>
        <li class="navbar-item"><a href="/music/" class="underline">music</a></li>
        <li class="navbar-item">
          <a href="/clothing/" class="underline">clothing</a>
          <div class="nav-dropdown">
            <a href="#">tops</a>
            <a href="#">bottoms</a>
            <a href="#">shoes</a>
            <a href="#">outerwear</a>
            <a href="#">accessories</a>
          </div>
        </li>
        <li class="navbar-item ">
          <a href="/lifestyle/" class="underline">lifestyle</a>
          <div class="nav-dropdown">
            <a href="#">sports</a>
            <a href="#">headphones</a>
            <a href="#">hi-fi</a>
          </div>
        </li>
        <li class="navbar-item ">
          <a href="/good-reads/" class="underline">good reads</a>
          <div class="nav-dropdown">
            <a href="/good-reads/life">life</a>
            <a href="/good-reads/design">design</a>
            <a href="/good-reads/magazines">magazines</a>
            <a href="/good-reads/novels">novels</a>
            <a href="/good-reads/food">food</a>
          </div>
        </li>
        <li class="navbar-item"><a href="/about-us/" class="underline">about us</a></li>
        <li class="navbar-button"><a href="/contact/" class="button fill-button">contact</a><li>
      </ul>
      <div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
    <div class="overlay" id="overlay">
      <nav class="overlay-menu">
        <ul>

          <div class="dropdown">
                <div onclick="homeDrop()" class="dropbtn homeware">
                  homeware
                  <div id="arrowHomeware" class="arrow arrowHomeware"><img src="http://eligam.co/wp-content/themes/eligam/assets/images/down-arrow.png" /></div>
                </div>

                <div id="homeware" class="dropdown-content home-drop">
                  <a href="/homeware">all</a>
                  <a href="/homeware/kitchen">kitchen</a>
                  <a href="/homeware/living-room">living room</a>
                  <a href="/homeware/bedroom">bedroom</a>
                  <a href="/homeware/bathroom">bathroom</a>
                  <a href="/homeware/furniture">furniture</a>
                  <a href="/homeware/accessories">accessories</a>
                </div>
          </div>

          <div class="dropdown">
                <a href="/music" class="dropbtn homeware">
                  music
                </a>
          </div>

          <div class="dropdown">
                <div onclick="clothingDrop()" class="dropbtn clothing">
                  clothing
                  <div id="arrowClothing" class="arrow arrowClothing"><img src="http://eligam.co/wp-content/themes/eligam/assets/images/down-arrow.png" /></div>
                </div>
                <div id="clothing" class="dropdown-content clothing-drop">
                  <a href="#">all</a>
                  <a href="#">tops</a>
                  <a href="#">bottoms</a>
                  <a href="#">shoes</a>
                  <a href="#">outerwear</a>
                  <a href="#">accessories</a>
                </div>
          </div>

          <div class="dropdown">
                <div onclick="lifestyleDrop()" class="dropbtn lifestyle">
                  lifestyle
                  <div id="arrowLifestyle" class="arrow arrowLifestyle"><img src="http://eligam.co/wp-content/themes/eligam/assets/images/down-arrow.png" /></div>
                </div>
                <div id="lifestyle" class="dropdown-content lifestyle-drop">
                  <a href="#">all</a>
                  <a href="#">sports</a>
                  <a href="#">headphones</a>
                  <a href="#">hi-fi</a>
                </div>
          </div>

          <div class="dropdown">
                <div onclick="readsDrop()" class="dropbtn reads">
                  good reads
                  <div id="arrowReads" class="arrow arrowReads"><img src="http://eligam.co/wp-content/themes/eligam/assets/images/down-arrow.png" /></div>
                </div>
                <div id="reads" class="dropdown-content">
                  <a href="/good-reads">all</a>
                  <a href="/good-reads/life">life</a>
                  <a href="/good-reads/design">design</a>
                  <a href="/good-reads/novels">novels</a>
                  <a href="/good-reads/magazines">magazines</a>
                  <a href="/good-reads/food">food</a>
                </div>
          </div>

          <div class="dropdown">
                <a href="/music" class="dropbtn homeware">
                  about us
                </a>
          </div>

        </ul>
      </nav>
    </div>
    </div>
</div>

<!-- END HEADER -->
