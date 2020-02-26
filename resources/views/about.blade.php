<!DOCTYPE html>
<html lang="en">
<head>
    <title>about</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @extends ('Layout.head') 
</head>
<style>
    .container-fluid{
        background-color: #94EEA8;
    }
    .container-fluid {
        margin-top: 0px;
    }
    .container-fluid h1 {
        margin-left: 30px;
        font-family: 'Sniglet', cursive;
        color: rgb(15, 55, 56);
    }
    .container-fluid p {
        font-size:18px;
        margin-left: 70px;
        font-family: 'Dancing Script', cursive;
        color: rgb(87, 79, 79);
    }

    .container-fluid img {
        width:80%;
        height: auto;
        margin-left: 50px;
    }
    .rounded-circle{
        max-width: 50%;
    }
    .content{
        background-color: #18D867;
        text-align: center;
    }
    .text{
        font-family: 'Sniglet', cursive;
        color: rgb(15, 55, 56);
        font-size: 25px;
    }
    span{
        background-color:#94EEA8;
    }
</style>
@include('navbar')
  <div class="container-fluid">
  <h1>About us</h1><br>
    <div class="row">
      <div class="col-sm-5">
        <p>Healthy Care is now one of Cambodia website that related to how to take care of your health and your body every day.<br><br>
          If your health fails, it can overshadow everything else that’s going on in your life.
          So our aim is to provide the best tips to all people who wanna take care of their health.
          but they don't know how? and they can using our website too easily to apply .<br>
          <br>
          The advantages of this page are save time , save money , can practice anywhere , get new tip in life style ,<br>  get new idea and get healthy and comfort.
          <br>
          <br>
          And this page created by 3 member.we work hard to try to find new tip for health. and make people more easily to apply it by themself
          at home or else.
          </p>
      </div>
      <div  class="col-7">
        <img src="{{ asset('assets/img/healthy-food3.jpg') }}">
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="content">
    <br>
    <br>
  <h1>Team Member</h1>
    <br>
    <div class="row">
      <div class="col-sm-4" >
        <img id="img1" src="{{ ('assets/img/kreas.jpg') }}" class="rounded-circle">
        <div class="text"><br><span>Um Chankreas</span></div>
      </div>
      <div class="col-sm-4" >
        <img id="img2" src="{{ ('assets/img/sonita.jpg') }}" class="rounded-circle">
        <div class="text"><br><span>Thorn Sonita</span></div>
      </div>
      <div class="col-sm-4">
        <img id="img3" src="{{ ('assets/img/visal.jpg') }}" class="rounded-circle">
        <div class="text"><br><span>Meng Visal</span></div>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</html>