
<?php
session_start();
// $_SESSION['message'] = "Passwords do not match";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="nav.css">

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
    <strong>Hey!</strong><?php echo $_SESSION['message'];  ?>.
    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php
    unset($_SESSION['message']);
}
?>
  <!-- Section: Design Block -->

<section class="background-radial-gradient overflow-hidden">

  <div class="container px-5 py-1 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Agrosell's <br />
        </h1>
        <p class="mb-4 opacity-70" style="color: black">
          Agrosells is Buying and sellling platform for the farmers and the buyers to 
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass" style="border-radius: 25px;">
          <div class="card-body px-4 py-3 px-md-5">



            <form  action="functions/authcode.php" method="post" >


            
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4 text-center">
                  <div class="form-outline">
                    <input type="text" id="name" name="name" class="form-control" />
                    <label class="form-label" for="name">Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4 text-center">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" name="uname" class="form-control" />
                    <label class="form-label" for="form3Example2">User-Name</label>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="form-outline col-md-6 mb-4 text-center">
                <input type="text" id="form3Example3" name="mno" class="form-control" />
                <label class="form-label" for="form3Example3">Mobile No</label>
              </div>

              <!-- Email input -->
              <div class="form-outline col-md-6 mb-4 text-center">
                <input type="email" id="email" class="form-control" name="email" />
                <label class="form-label" for="email">Email address</label>
              </div>
            </div>

              <!-- Password input -->
              <div class="row">
              <div class="col-md-6 mb-4 text-center">
                <div class="form-outline">
                  <input type="password" id="pass" name="pass" class="form-control" />
                  <label class="form-label" for="pass">password</label>
                </div>
              </div>
              <div class="col-md-6 mb-4 text-center">
                <div class="form-outline">
                  <input type="text" id="repass" name="repass" class="form-control" />
                  <label class="form-label" for="repass">Retype password</label>
                </div>
              </div>
              </div>

              <div class="form-outline mb-4 text-center">
                <input type="text" id="add" name="address" class="form-control " />
                <label class="form-label " for="add">address</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <div class="form-check">
                  <label class="form-check-label me-3" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="sel" value="farmer" >Farmer
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label " for="radio2">
                    <input type="radio" class="form-check-input" id="radio2" name="sel" value="buyer">Buyer
                  </label>
                </div>
              </div>

              <!-- Submit button -->
              <button type="submit" onclick="check()"  id="sub" name="sign" class="btn btn-primary btn-block mb-4">
              Login
              </button>
              <button type="reset" id="re"  class="btn btn-danger btn-block mb-4">
                Reset
              </button>
            
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script >
  function check(){
  var n = document.getElementById("name").value;
  var uname = document.getElementById("form3Example2").value;
  var phone = document.getElementById("form3Example3").value;
  var email = document.getElementById("email").value;
  
 

if(email=="" || email=="NULL"){
    alert("Email filed shoud not empty");
  }
  else if(phone.length!=10){
    alert("Enter 10 digit mobile no");
  }
  
  }

  </script>
</body>

</html>