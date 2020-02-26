<head>
    @extends ('Layout.head') 
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="
    {{URL::to('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css')}}">
    <script src="/js/home.js" type="text/javascript"></script>
    <script src="/js/search.js" type="text/javascript"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-bluesky sticky-top" id="navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">LOGO</a>
    <ul class="navbar-nav mr-auto" id="myList">
      <li class="nav-item">
        <a class="nav-link" id="nav-link" href="home-page">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-link" href="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-link" href="contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-link" href="get-start">Get Start</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-link" href="login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-link" href="documents">Document</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" id="nav-link" id="search" href="#"><i class="fas fa-search"></i></a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0"> -->
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="submit">
        <i class="fas fa-search"></i>
      </button> -->
    </form>
    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
    <button class="openBtn" onclick="openSearch()"><i class="fas fa-search"></i></button>
</nav>
<script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-90px";
    }
    prevScrollpos = currentScrollPos;
  }
</script>