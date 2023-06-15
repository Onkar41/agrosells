<?php   
session_start();
require_once 'connection.php';
$sql_cart="SELECT * FROM cart";
$all_cart=mysqli_query($con,$sql_cart);

if(isset($_SESSION['auth'])){
if(isset($_POST['submit']) ){
    $bname=$_POST['bname'];
    $lname=$_POST['lname'];
    $mno=$_POST['mno'];
    $email=$_POST['email'];
    $pin=$_POST['pin'];
    $address=$_POST['address'];
    $pname=$_SESSION['pname'];
    $quantity=$_SESSION['quantity'];
  $total = $_SESSION['total'];
  if($bname=="" || $lname==""){
    echo "<script> alert('ALL FILLDS ARE COMPULSARY')</script>";
  }elseif($mno=="" || $email==""){
    echo "<script> alert('ALL FILLDS ARE COMPULSARY')</script>";
  }
  else{

  $sql="INSERT INTO orders( bname, lname, mno, email, pin, address, product_name, quantity, total) VALUES ('$bname','$lname','$mno','$email','$pin','$address','$pname','$quantity','$total')";
  $res=mysqli_query($con,$sql);
  if($res>0){
    echo "<script> alert('successfully order')</script>";
  }
  }
}
}
else{
  echo "<script> alert('Login Required..')</script>";
}






          

?>


<!doctype html>
<html lang="en">

<head>
    <title>mycart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="mycart.css">
    <link rel="stylesheet" href="cstyle.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
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

            <?php
          }
          
          ?>          
        </ul>
      </div>
    </div>
  </nav>
 
     <div class="row ">
      <div class="col-sm-3"></div>
     <div class="col-sm-6">    <br>
    <br>
    <br>
    <br>
    <br>
      
      <!-- <div class="col-lg-6 mb-5 mb-lg-0 position-relative"> -->
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass" style="border-radius: 25px;">
          <div class="card-body ">



            <form  action="<?php ECHO $_SERVER['PHP_SELF'];?>" method="post">


            
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4 text-center" >
                  <div class="form-outline">
                    <input style='text-align: center; font-size: 15px;' type="text" id="name" name="bname" class="form-control" />
                    <label style='text-align: center; font-size: 15px;' class="form-label" for="name">Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4 text-center">
                  <div class="form-outline">
                    <input style='text-align: center; font-size: 15px;' type="text" id="form3Example2" name="lname" class="form-control" />
                    <label style='text-align: center; font-size: 15px;' class="form-label" for="form3Example2">Last Name</label>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="form-outline col-md-6 mb-4 text-center">
                <input style='text-align: center; font-size: 15px;' type="text" id="form3Example3" name="mno" class="form-control" />
                <label style='text-align: center; font-size: 15px;' class="form-label" for="form3Example3">Mobile No</label>
              </div>

              <!-- Email input -->
              <div class="form-outline col-md-6 mb-4 text-center">
                <input style='text-align: center; font-size: 15px;' type="email" id="email" class="form-control" name="email" />
                <label style='text-align: center; font-size: 15px;' class="form-label" for="email">Email address</label>
              </div>
            </div>

              <!-- Password input -->
              <div class="row">
              
            
              <div class="col-md-6 mb-4 text-center">
                <div class="form-outline">
                  <input style='text-align: center; font-size: 15px;' type="text" id="repass" name="pin" class="form-control" />
                  <label style='text-align: center; font-size: 15px;' class="form-label" for="repass">Pin No</label>
                </div>
              </div>
              <div class="col-md-6 mb-4 text-center ">
              <input style='text-align: center; font-size: 15px;' type="radio" id="repass" name="cash"  /><p style='text-align: center; font-size: 15px;'>Cach on delevery</p>

              </div>
              </div>

              <div class="form-outline mb-4 text-center">
                <input style='text-align: center; font-size: 15px;' type="text" id="add" name="address" class="form-control " />
                <label style='text-align: center; font-size: 15px;' class="form-label " for="add">address</label>
              </div>
              
              <div class="row">
              <div class="col-4"><?php echo "<p style='text-align: center; font-size: 15px;'> Product Name : " .$_SESSION['pname']?></div>
              <div class="col-4"><?php echo "<p style='text-align: center; font-size: 15px;'> Quantity: " .$_SESSION['quantity']?></div>
              <div class="col-4"><?php echo "<p style='text-align: center; font-size: 15px;'> Total Amount: " .$_SESSION['total']?></div>
               
            </div>
              

          
              </div>

             
              <button type="submit" onclick="check()"  id="sub" name="submit" class="btn btn-primary btn-block mb-4 text-center ">
                Order
              </button>
             
            
            </form>
            
          </div>
     </div>
<!-- 
      <div class="col-sm-6">
        <br>
      <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card rounded-3">
          <div class="card-body mx-1 my-2">
            <div class="d-flex align-items-center">
              <div>
                <i class="fab fa-cc-visa fa-4x text-black pe-3"></i>
              </div>
              <div>
                <p class="d-flex flex-column mb-0">
                  <b>Martina Thomas</b><span class="small text-muted">**** 8880</span>
                </p>
              </div>
            </div>

            <div class="pt-3">
              <div class="d-flex flex-row pb-3">
                <div class="rounded border border-primary border-2 d-flex w-100 p-3 align-items-center"
                  style="background-color: rgba(18, 101, 241, 0.07);">
                  <div class="d-flex align-items-center pe-3">
                    <input class="form-check-input" type="radio" name="radioNoLabelX" id="radioNoLabel11"
                      value="" aria-label="..." checked />
                  </div>
                  <div class="d-flex flex-column">
                    <p class="mb-1 small text-primary">Total amount due</p>
                    <h6 class="mb-0 text-primary">$8245</h6>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-row pb-3">
                <div class="rounded border d-flex w-100 px-3 py-2 align-items-center">
                  <div class="d-flex align-items-center pe-3">
                    <input class="form-check-input" type="radio" name="radioNoLabelX" id="radioNoLabel22"
                      value="" aria-label="..." /> 
                  </div>
                  <div class="d-flex flex-column py-1">
                    <p class="mb-1 small text-primary"></p>
                    <div class="d-flex flex-row align-items-center">
                      <h6 class="mb-0 text-primary pe-1">$</h6>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center pb-1">
              <a href="#!" class="text-muted">Go back</a>
              <button type="button" class="btn btn-primary btn-lg">Pay amount</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
hellow -->
    
      </div>
     </div>
     

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