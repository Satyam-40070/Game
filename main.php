<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/tree.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        ul>li>a{
        font-size: xx-large;
        color: rgb(24, 14, 14);
    }
    ul>li>a:hover{
        text-decoration: underline;
    }
    body{
       
      color: azure;   
      padding-top: 50px;
    }
    .container{
      /*background-color: black;*/
      margin: 0px;
      padding: 0px;
      max-width: 1521px;
      min-height: 860px;
      background-image: url('assets/images/bg_final.webp');
      background-position-x: 0px;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .content{
      height: auto;
      width: auto;
      margin-top: 0px;
      padding-left: 150px;
    }
    
    img{
        height: 20px;
        width: 20px;
        margin-right: 5px;
    }
    #logo1 {
        height: 400px; 
        width: 400px;
       margin-left: 85px;
}
.dropdown-menu {
    background-color: #f8f9fa;
    border: none;
    border-radius: 0;
    display: inline-flex;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  .dropdown-item:hover {
    background-color: #e9ecef;
  }
nav{
        /*background-color: rgb(204, 166, 95);*/
        background-image: linear-gradient(45deg,black,orange);

    }
    .nav-item:hover{
        text-decoration: underline;
    }
    li{
      text-transform: capitalize;
      padding-left: 20px;
      padding-right: 20px;
      margin-left: 0px;
    }
    form{
        display: inline-flex;
        padding-left: 15px;
    }
    button{
        padding-left: 15px;
    }
    footer{
        text-align: left;
        height: 40px;
        background-color: rgb(31, 34, 35);
        color: rgb(231, 225, 225);
        margin-top: 0px;
        padding-right: 0px;
    }
    .content h3{ 
      display: inline-flex;
      flex-wrap: wrap;
    }
    h4{
      color: black;
    }
    
    .dropdown-content{
        position: absolute;
        display: none;
    }
    .dropdown-content span a {
        display: block;
    }
    .show {
  display: block;
}
.tree{
  background: #281c14;
}
    .info{
      /*background-color: black;*/
      margin: 0px;
      padding: 0px;
      background-image: linear-gradient(45deg,rgb(105, 72, 10),rgb(135, 94, 35));
      width: 100%;
      min-height: 200px;
    }
    #tpic{
      width: 100%;
      height: 795px;
    }
    #tsnap{
      display:none;
    }
    hr{
      width: 100%;
      height: 2px;
      background-color: whitesmoke;
    }
    @media only screen and (max-width: 768px){
      #logo1{
        height: 250px;
        width: 250px;
        margin-left: 0px;
        padding-left: 0px;
      }
      .content h3{
      margin-left: -20px;
      
    }
    #tpic{
      display: none;
    }
   #tsnap{
    display: block;
    width: 100%;
    height: 480px;
   }
   .tree{
    height: auto;
    background: #4a3509;
   }
   .tree ul,.tree li{
    display: none;
   }
      .content{
        padding-left: 15px;
      }
      .container{
        background-position: -400px;
      }
      .info{
        height: 230px;
      }
    } 
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div class="container-fluid">
        <div class="navbar-nav">

        </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-start" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a style="color: rgb(210, 53, 53);" class="nav-link active" href="#">Home</a></li>
        <li class="nav-item dropdown"><a style="color: rgb(244, 236, 236);" class="nav-link active dropdown-toggle dropbtn" onclick="myFunction()" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Horoscope</a>
          <div class="dropdown-menu dropdown-content" id="myDropdown" style="background-color: rgb(223, 171, 87);" aria-labelledby="navbarDropdown">
            <span>
            <a class="dropdown-item" href="horoscope.html">ARIES</a>
            <a class="dropdown-item" href="taurus.html">TAURUS</a>
            <a class="dropdown-item" href="gemini.html">GEMINI</a>
            <a class="dropdown-item" href="cancer.html">CANCER</a>
        </span>
        <span>
            <a class="dropdown-item" href="leo.html">LEO</a>
            <a class="dropdown-item" href="virgo.html">VIRGO</a>
            <a class="dropdown-item" href="libra.html">LIBRA</a>
            <a class="dropdown-item" href="scorpio.html">SCORPIO</a>
        </span>
        <span>
            <a class="dropdown-item" href="sagi.html">SAGGITARIUS</a>
            <a class="dropdown-item" href="capricorn.html">CAPRICORN</a>
            <a class="dropdown-item" href="aquarius.html">AQUARIUS</a>
            <a class="dropdown-item" href="pisces.html">PISCES</a>
        </span>
          </div>
      </li>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="almanac.html">Almanac</a></li>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="catalogue.html">Catalogue</a></li>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="AboutUs.html">About Us</a></li>
</ul>
<ul class="navbar-nav ms-auto">
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" id="searchInput" aria-label="Search">
    <button class="btn my-2 my-sm-0" id="searchBtn"  type="submit"><a href="almanac.html"><img src="assets/images/search.png"></a></button>
  </form>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="signupForm.php"><img src="assets/images/signup.png">SignUp</a></li>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="signinForm.php"><img src="assets/images/signin.png">SignIn</a></li>   
      </ul>
    </div>
  </div>
</nav>

<audio controls autoplay hidden="hidden">
        <source src="audio/bg_sound.mp3" type="audio/mpeg">
</audio>


<script>
  function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
if (!e.target.matches('.dropbtn')) {
var myDropdown = document.getElementById("myDropdown");
  if (myDropdown.classList.contains('show')) {
    myDropdown.classList.remove('show');
  }
}
}
</script>

<div class="container">
    <div class="content">
      <br><br><br>
      <h3 style="margin-left: 150px;">Welcome To</h3><br>
      <h1>Pt. Devi Dyal Jyotishi & Sons</h1>
      <p style="margin-left: 430px; font-size: large;">since 1875</p><br>
      <img src="assets/images/logo1.png" id="logo1" data-aos="zoom-in" data-aos-duration="2000" alt="Logo">
    </div>
</div>

  <div class="tree">
  <u><h1 style="color:rgb(254, 250, 250);padding-top: 15px;font-size: 35px;">Family Tree(वंश - वृक्ष)</h1></u>

  <img src="assets/images/treesnap1.png" id="tsnap">
    <img src="assets/images/P.png" id="tpic">
  
</div>

<div class="info">
  <p style="margin-left: 15px; padding-top: 15px; color: rgb(233, 225, 225); font-size: large;">Contact Us</p>
  <p style="margin-left: 15px; color: rgb(233, 225, 225);"><i class="bi-geo-alt-fill"></i> General Book Depot, Chowk Adda Hoshiarpur, Jalandhar city, Punjab - 144008</p>
  <p style="margin-left: 15px; color: rgb(233, 225, 225);"><i class="bi-envelope-fill"></i>  pankajsharma33018@gmail.com, viveksharma1973@yahoo.com</p>
  <p style="margin-left: 15px; color: rgb(233, 225, 225);"><i class="bi-telephone-fill"></i> +91-9417291325, +91-9779913583</p>
</div>
<footer><p style="margin-left: 20px; padding-top: 5px;"><img src="assets/images/copy.png" style="height: 2rem; width: 2rem;">2023 All Rights Reserved</p></footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>