<?php
$servername = "localhost";
$username = "root";
$password= "";
$db_name= "agrosells";
$con = new mysqli($servername, $username, $password, $db_name, 3306);
if(!$con){
    die ("connection in-completed".mysqli_connect_error());
}

if(isset($_GET["id"])){
    $product_id=$_GET["id"];
    $sql="SELECT * FROM cart WHERE product_id=$product_id";
    $result=$con->query($sql);
    $total_cart = "SELECT * FROM cart";
    $total_cart_result=$con->query($total_cart);
    $cart_num=mysqli_num_rows($total_cart_result);

    if(mysqli_num_rows($result)>0){     
        $in_cart="alreadu in cart";

        echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
    }else{
        
        $insert="INSERT INTO cart(product_id) VALUES($product_id)";
        if($con->query($insert)==true){
           echo $in_cart="added into cart";
            echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
           $_SESSION['added']="ADDED SUCCESSFULLY TO CART";

        }else{
          $_SESSION['added']="SOMETING WRONG..";
        }
    }


}




?> 