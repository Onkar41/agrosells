<?php session_start(); ?>
<!doctype html>
  <html lang="en">
  
  <head>
    <title>Agrosells</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="indexFooter.css">
   <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="font/css/all.min.css">

</head>
<body>
  

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container" >
      <img src="logo.png" alt="" width="50px" height="30px">
      <a class="navbar-brand" href="#">AgroSells.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto" id="menu">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add-product.php">Add-Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="mycart.php">MyCart </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link " href="about.php">About us</a>
          </li>
          <?php
           if(isset($_SESSION['auth'])) {
            ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?=$_SESSION['auth_user']['uname']; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
            </ul>
          </li>

          <?php
          }else{
            ?>

          <li class="nav-item">
            <a class="nav-link" href="login2.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">register</a>
          </li>
          

            <?php
          }
          
          ?>          
        </ul>
      </div>
    </div>
  </nav>

  <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show " role="alert">
      <strong>Hey!</strong><?= $_SESSION['message'];  ?>.
      <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
      unset($_SESSION['message']);
  }
  ?>

<div id="demo" class="carousel slide " data-bs-ride="carousel" >
  
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
  
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="mx-auto d-block " id="imgs" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVSFknXuPDnQtauDuNgttU4aps4ETtMCEzu_3DginnDDDdGqWsQdd_vA2keICJgOiaJQ&usqp=CAU" alt="Los Angeles" class="d-block" style="height:70%; width:70%; margin-top: 110px;">
        <div class="carousel-caption">
         
        </div>
      </div>
      <div class="carousel-item">
        <img class="mx-auto d-block " id="imgs" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_sfbNsIipxxZmbrqidg03fzv1NZCxN1D3Rw&usqp=CAU" alt="Chicago" class="d-block" style="height:70%; width:70%;margin-top: 110px;">
        <div class="carousel-caption">
          
        </div> 
      </div>
      <div class="carousel-item">
        <img class="mx-auto d-block " id="imgs" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVSFknXuPDnQtauDuNgttU4aps4ETtMCEzu_3DginnDDDdGqWsQdd_vA2keICJgOiaJQ&usqp=CAU" alt="New York" class="d-block" style="height:70%; width:70%; margin-top: 110px;">
        <div class="carousel-caption">
          
        </div>  
      </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  
  <div class="container-fluid mt-3">
  </div>



<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>




<section id="services-container"class="container">
  <div id="services">
  <div class="box">
      <img src="https://5.imimg.com/data5/FT/XR/MY-41905028/agri-products-500x500.png" alt=" else">
  <h2 class="h-secondery-center"> </h2>
  <p class="center">Our website is built for the buying and selling the products online and create the best platform to make best deilse online</p>
  <a href="products.php">view products</a>
  </div> 
  <div class="box">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH9SECjY1WVeY0OK48oCxg2aa42L9r8ysNtw&usqp=CAU" alt="box no two">
      <h2 class="h-secondary-center"></h2>
      <p class="center">
        Our website is built for the buying and selling the products online and create the best platform to make best deilse online 
      </p>  <a href="products.php">view products</a>
      
  </div>  
  <div class="box">
      <img src="https://www.lalpathlabs.com/blog/wp-content/uploads/2019/01/Fruits-and-Vegetables.jpg" alt="">
      <h2 class="h-seconary-center"></h2>
      <p class="center">Our website is built for the buying and selling the products online and create the best platform to make best deilse online</p>
      <a href="products.php">view products</a>
  </div> 
  </div>    
  </section>

<!-- Footer -->
<footer class="footer-distributed" style="background-color:black" id="aboutUs">
<center>
<h1 style="font: 35px calibri;">About Us</h1>
</center>
<div class="footer-left">
<h3 style="font-family: 'Times New Roman', cursive;">Agrosells &copy; </h3>
<!--	<div class="logo">
  <a href="index.php"><img src="images/logo.png" width="200px"></a>
</div>-->
<br />
<p style="font-size:20px;color:white">Your product Our market !!!</p>
<br />
</div>

<div class="footer-center">
<div>
  <i class="fa fa-map-marker"></i>
  <p style="font-size:20px">Agro sells <span>omkar </span></p>
</div>
<div>
  <i class="fa fa-phone"></i>
  <p style="font-size:20px">123456789</p>
</div>
<div>
  <i class="fa fa-envelope"></i>
  <p style="font-size:20px"><a href="mailto:agroculture@gmail.com" style="color:white">Agrosells@agrosells.com</a></p>
</div>
</div>

<div class="footer-right">
<p class="footer-company-about" style="color:white">
  <span style="font-size:20px"><b>About Agrosells</b></span>
  Agrosells is e-commerce trading platform for grains & grocerries...
</p>
<div class="footer-icons">
  <a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
  <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
  <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
</div>
</div>

</footer> 

</body>
</html>


