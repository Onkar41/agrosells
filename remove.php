<?php
require_once 'connection.php';
 session_start();



 if(isset($_GET['cr'])){
  $product_id=$_GET['cr'];
  $sql_remove="DELETE FROM cart WHERE product_id=$product_id";
  if($con->query($sql_remove)===TRUE){
     
      header('location:mycart.php');
  }
}


  if(isset($_GET['del'])){
  $rid=$_GET['del'];
  $remove="DELETE FROM registrations WHERE id=$rid";
  if($con->query($remove)===TRUE){
     
      header('location:admin/viewcust.php');
  }

}



  if(isset($_GET['pdel'])){
  $pdel=$_GET['pdel'];
  $re="DELETE FROM product WHERE product_id=$pdel";
  if($con->query($re)===TRUE){
     
      header('location:admin/products.php');
  }
}



if(isset($_GET['odel'])){
  $odel=$_GET['odel'];
  $re="DELETE FROM orders WHERE o_id =$odel";
  if($con->query($re)===TRUE){
     
      header('location:admin/Orders.php');
  }
}


?>