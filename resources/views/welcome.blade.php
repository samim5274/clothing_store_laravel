<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Clothing Store</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<section id="sdile-section">
<div class="w3-content w3-display-container" style="max-width:1200px">
  <img class="mySlides" src="/img/slide bg (1).jpg" style="width:100%"  height="350px">
  <img class="mySlides" src="/img/slide bg (1).png" style="width:100%"  height="350px">
  <img class="mySlides" src="/img/slide bg (2).png" style="width:100%"  height="350px">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>
</section>

@include('menu')

    <script src="/js/main.js"></script>
</body>
</html>
