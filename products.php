<?php

require_once 'connection.php';
$sql ="SELECT * FROM product" ;
// $sql="SELECT * FROM product";
$all_product=mysqli_query($con,$sql);
?> 

<?php include('heder.php');?>

  <main class="container-fluid my-auto ">

  <?php

  while ($row = mysqli_fetch_assoc($all_product)) {
        
    ?> 

   
    <div class=" card row cols-4">
      <!-- <div class="card_item mt-5 "> -->
       <div class="image">
      <img src="<?php echo $row['product_image']; ?>" alt=" ">
    </div>
    <div class="caption">
      <p class="rate">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </p>
      <p class="product_name"><?php echo $row["productname"]; ?></p>
      <p class="price"><b> per kg -<del><?php echo $row["price"]; ?></del></b></p>
      <p class="discount"><b> per kg -<?php echo $row["discount"]; ?></b></p>
    </div>
    <button class="add" data-id="<?php echo $row["product_id"]; ?>" onclick="message()">ADD TO CART</button>
    </div>
    <?php
  
      }
  
  
  ?>  
  </main>
 <script >

function message(){
  alert('ADDED SUCCESSFULLY..');
}

  var product_id = document.getElementsByClassName("add");
  for(var i=0;i<product_id.length;i++){
    product_id[i]=addEventListener("click",function(event){
      var target = event.target;
      var id = target.getAttribute("data-id");

      var xml = new XMLHttpRequest();

      xml.onreadystatechange=function(){

        if(this.readyState == 4 && this.readyState == 200){
          var data=JSON.parse(this.responseText);
          target.innerHTML=data.in_cart;
          document.getElementsById("bages");
         
        }
      }
      xml.open("GET","connection.php?id="+id,true);
      // xml.setRequestHeader();
      xml.send();
    
      
    })
  }
 </script>
</body>

</html>