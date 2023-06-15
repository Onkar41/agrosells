<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="cstyle.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="nav.css">
      <link rel="stylesheet" href="indexFooter.css">
      
      
     
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
            <a class="nav-link " href="mycart.php">MyCart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="about.php">About us</a>
          </li>
          <?php
          session_start();
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


  <section id="home">
    <h1 class="h-primary">Welcome to Agrosells</h1>
    <p>Agrosells is software program for Farmers & buyers  to manage buying and selling problem.
      Agrosells System also manage the cost Range of farm products or etc .
      Agrosells System also provides selling the products online for farmers.
      To solve this problem this project is developed. This project has options to store all the products. 
      </p>

</section>
<hr>
<div class="row">

  <div class="col p-6 rounded-circle "><img src="https://www.logolynx.com/images/logolynx/2e/2e8a5e367570aa8cc83cf228e7da309b.jpeg" alt="" height="400px" width="700px" ></div>
  <div class="col p-6 " id="perpose">PROPOSED SYSTEM<br><br><br>
    <ul>
    <li id="perpose">	The use of this project in the farm can reduce all the problems about selling. </li>
    
    <li id="perpose">Baying the products is very simple and deliver to the home.</li>
    
    <li id="perpose">	The main objective of developing project agrosells system is to save<br><br> money and time. An inquiry is easily done by.</li>
  </ul>
  </div> 
</div>
<hr>

<div class="row">

  <div class="col p-6 " id="perpose">SCOPE OF SYSTEM <br>
    <ul>
      <p id="perpose">
        <p id="perpose">It may help collecting perfect product. In a very short time the collection will be obvious simple and sensible.</li>
        <p id="perpose"> It also helps in current all works relative to buying and selling of the products .
    It satisfy the user requirement </p>
    <p id="perpose">Be expandableDelivered on schedule within the budget</p>
    <p id="perpose">Be easy to understand by the farmer and buyer</p>
    
    <p id="perpose"> Have a good user interface</p> 
    <p id="perpose"> Be easy to operate </p>
      
        
    </ul>
  </div> 
  <div class="col p-6 " id="perpose">
    <img class="mt-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTFpPJo08wpG-SHTApkQjlRq8FPxLCefMF2g&usqp=CAU" alt=""height="450px" width="800px" >
  </div>
</div>

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

<script >
  function check(){
  var n = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var message = document.getElementById("message").value;
  if(n=="" || n=="NULL"){
    alert("name filed shoud not empty");
  }
  if(! isNaN(n)){
    alert("name should not be NUll");
  }
  if(email=="" || email=="NULL"){
    alert("Email filed shoud not empty");
  }
  if(phone.length!=10){
    alert("Enter 10 digit mobile no");
  }
  
  }
</script>
</body>
</html>