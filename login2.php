<!doctype html>
<html lang="en">

<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="login2.css">
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


  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">


          <form  class="box" action="functions/login.php" method="post">

          
            <h1>Login</h1>
            <p class="text-muted"><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];}else{echo "Pleace Fill corectinfo";}  ?></p>
            <input type="text" name="uname" id="uname" placeholder="Username">
            <input type="password" name="pass" id="pass" placeholder="Password"><span class="text-light">New user</span>
            <a class="btn btn-link text-primary" href="register.php">Register</a>
            <input type="submit" onclick="check()" name="submit" value="Login" href="#">
          </form>
      </div>
    </div>
  </div>
  </div>

  <script >
  function check(){
  
  var n = document.getElementById("uname").value;
  var pass = document.getElementById("pass").value;
  
  if(n=="" || n=="NULL"){

    alert("USER NAME SHOUD NOT NULL OR EMPTY");
  
  }
  else if(pass=="" || pass=="NULL"){

    alert("PASSWORD SHOUD NOT NULL OR EMPTY");

  }  
  }

  </script>
</body>

</html>

<!-- onsubmit="event.preventDefault()" -->