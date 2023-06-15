 <?php
require_once 'connection.php';
session_start();
if( isset($_SESSION['auth_user']['uname'])){
if(isset($_POST['submit'])){

  // echo "<script>alert(submited<script>";

  $productname = $_POST['productname'];
  $category = $_POST['category'];
  $price = $_POST['price'];
  $discount = $_POST['discount'];
  $uname=$_SESSION['auth_user']['uname'];
  //for upload imgs
  $upload_dir ="uploads/";
  $product_image=$upload_dir.$_FILES['imageupload']['name'];
  $upload_dir = $_FILES["imageupload"]["name"];
  $upload_file = $upload_dir.basename($_FILES['imageupload']['name']);
  $imgetype = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
  $check = $_FILES['imageupload']['size'];
  $upload_ok = 0;

  if(file_exists($upload_file)){
     echo "<script> alert('the file alredy exist')  </script>";
     $upload_ok = 0;
  }else{
     $upload_ok = 1;
     if($check != false){
       $upload_ok = 1;
       if($imgetype=='jpg' || $imgetype=='png' || $imgetype=='jpeg' || $imgetype=='gif'){
         $upload_ok = 1;
       }else{
        echo "<script> alert('Please change the image format')  </script>";
      
       }
     }
     else{
      echo "<script> alert('THE photo size is 0 please change the photo')  </script>";
       $upload_ok = 0;
     }
  }
  if($upload_ok==0){
    echo "<script> alert('Sorry your file doesnt  uploaded please try agin ')  </script>";
      
  }else{
    if($productname!="" && $price!=""){
       move_uploaded_file($_FILES["imageupload"]["tmp_name"],$upload_file);

       $sql = "INSERT INTO product(productname, category, price, discount, product_image,uname)
        VALUES ('$productname','$category','$price','$discount','$product_image','$uname')";

       if(mysqli_query($con,$sql)==TRUE){
        echo "<script> alert('Your Product uploaded succesfully ')  </script>"; 
       }
    }
  }
}
}
else{
  echo "<script> alert('User Login Required  Other wise Product Not Added...')  </script>";
}
?> 
<!doctype html>
<html lang="en">

<head>
  <title>add products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="add-product.css">
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
  <section id="upload_container">
    <fieldset>
    
     <legend align="center"style="color:blue;">--------Add products-------</legend>
    <form action="<?php ECHO $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
      <input type="text" name="productname" id="productname" placeholder="Product Name" required>
      <input type="text" name="category" id="category" placeholder="categorie Name" required>
      <input type="number" name="price" id="price" placeholder="Product Price">
      <input type="number" name="discount" id="discount" placeholder="Product Include Discount">
      <input type="file" id="imageupload" name="imageupload" hidden required>
      <button id="choose" onclick="upload()">Choose Image</button>
      <input type="submit" value="upload" name="submit">

    </form>
    </fieldset>
  </section>
  <script>
    var productname = document.getElementById("productname");
    var price = document.getElementById("price");
    var discount = document.getElementById("discount");
    var choose = document.getElementById("choose");
    var uploadimage = document.getElementById("imageupload");
    function upload() {
      uploadimage.click();
    }
    uploadimage.addEventListener("change", function () {
      var file = this.files[0];
      if (productname.value == "") {
        productname.value = file.name;
      }
      choose.innerHTML = "You can change (" + file.name + ") picture";
    })

  </script>
</body>

</html>