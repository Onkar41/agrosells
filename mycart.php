<?php   
session_start();
require_once 'connection.php';
$sql_cart="SELECT * FROM cart";
$all_cart=mysqli_query($con,$sql_cart);

          

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
                <a class="nav-link " href="mycart.php">MyCart <span class="text-light"><?php echo $_SESSION['cartno']=mysqli_num_rows($all_cart); ?></span></a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="order.php">Order</a>
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


   
    <main>
          
        <h1><?php echo mysqli_num_rows($all_cart) ?> Items </h1>
        <hr>
        <?php
        while($row_cart=mysqli_fetch_assoc($all_cart)){
          $sql="SELECT * FROM product WHERE product_id=".$row_cart["product_id"];
      
          $all_product=$con->query($sql);
          while($row=mysqli_fetch_assoc($all_product)){
            
             
         ?>
        <div class="card">
            <div class="images">
                <img src="<?php echo $row['product_image'];?>" alt="">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <span style="text-align: center;"> <p class="product_name"><?php echo $_SESSION['pname']=$row["productname"]; ?></p></span>


<span style="text-align: center; font-size: 2.5em;"><form method="get" action="<?php $_SERVER['PHP_SELF'] ?>"><input type="number" name="no" min="1" max='100'  value='<?php $_SESSION['quantity']=$r['quantiti']=$_GET['no'] ?>' placeholder="<?php echo $_SESSION['quantity'];?>"><input type="submit" name="add" value="add"> </form></span>
                
                
                                <p class="price"><b> per kg -<?php echo $_SESSION['total']=$row["discount"]*$r['quantiti']?>Rs</b></p>

                
                <p class="discount ">  <b>  per kg -<del><?php echo $row["price"]; ?></del>Rs</b></p>

                
                <span><a href="remove.php?cr=<?php echo $row["product_id"];?>" > <button class="remove" name="remove" >Remove from Cart </button></button> 
                - <a href="order.php"><button class="add">Order</button></span></a>
               
                
                <br>
                <br>
                
            </div>
        </div>
        <br>
        <br>
      
   <?php
          }
       } 
   ?>
    </main>

    
</body>

</html>