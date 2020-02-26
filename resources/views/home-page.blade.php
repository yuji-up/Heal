<html>
    @extends ('Layout.head') 
    @extends ('Layouts.master') 
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="
    {{URL::to('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css')}}">
    <script src="/js/home.js" type="text/javascript"></script>
    <script src="/js/search.js" type="text/javascript"></script>
<body>
<!-- navigation bar responesive-->
@include('navbar')
<section>
  <!-- auto slide image-->
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <img src="{{URL::to('/assets/img/doctor.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated fadeInDown" style="animation-delay: 1s">First slide label</h5>
          <p class = "animated bounceInRight" style="animation-delay: 2s">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          <p class = "animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
        </div>
      </div>
      <div class="carousel-item" data-interval="5000">
        <img src="{{URL::to('/assets/img/healthy-food3.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated fadeInUp" style="animation-delay: 1s">First slide label</h5>
          <p class="animated bounceInRight" style="animation-delay: 2s">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
        </div>
      </div>
      <div class="carousel-item" data-interval="5000">
        <img src="{{URL::to('/assets/img/healthy-body.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated fadeInUp" style="animation-delay: 1s">First slide label</h5>
          <p class="animated fadeInDown" style="animation-delay: 2s">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- body image with card-->
  <div class="card bg-dark text-white" id="cards">
    <img src="/assets/img/images3.jpg" class="card-img" id="card-img" class="img-fluid" alt="Responsive image">
    <div class="card-img-overlay">
      <h5 class="card-title"><br>
        <span class="ityped"></span>
      </h5>
    </div>
  </div>
  <script>
    window.ityped.init(document.querySelector('.ityped'),{
      strings : [' I Love Html','i love css','i love jquery','i love php','i love laravel'],
      loop:true
    })
  </script>
  <!-- image -->
  <div class="box"></div>
  <div class="card-deck" id ="card-deck">
    <div class="card" id="card">
      <img src="/assets/img/healthy_food2.jpg" id="card-img-top" class="card-img-top" alt="...">
      <div class="card-body" id="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#"> Read More</a>
      </div>
    </div>
    <div class="card" id="card">
      <img src="/assets/img/healthy_food2.jpg" id="card-img-top" class="card-img-top" alt="...">
      <div class="card-body" id="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <a href="#"> Read More</a>
      </div>
    </div>
    <div class="card" id="card">
      <img src="/assets/img/healthy_food2.jpg" id="card-img-top" class="card-img-top" alt="...">
      <div class="card-body" id="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <a href="#"> Read More</a>
      </div>
    </div>
  </div>
</section>
<!-- footer-->
  <div class="card text-center" id="footer">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer text-muted">
      2 days ago
    </div>
  </div>
  <!-- <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <script type="text/javascript"> -->
  <!-- </script> -->
</body>
</html>