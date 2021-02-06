<?php 
session_start();
include 'connection.php';
$query = "select * from item  where new=1 order by id ASC" ;
$command= mysqli_query($connection,$query);
$row_number=mysqli_num_rows($command);
?>
<html>

<head>
      <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!-- Popper JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link href="p1.css" rel="stylesheet" type="text/css">
   <link href="p1.css" rel="stylesheet" type="text/css">
   <link href="css/style.css" rel="stylesheet" type="text/css">
</head>


<body background="back2.jpg" >
 <div id="main-header">
   <div id="logo">
      <span id="ist">MY</span><span id="iist">Shop.Com<span>
      
   </div>
   <!--search-->
   <div id="search">
   <form action="">
      <input class="search-area" type="text" name ="text" placeholder="Search Here">
      <input class="search-btn" type="submit" name="submit" value="SEARCH">
   </form>
   </div>
   <a href="login.php"><img class="size" src="cart1.png"></a>
   <div id="navigation">
   <nav>
      <a href="index.php">Home</a>
      <a href="hot.php">Deals</a>
      <a href="new.php">New Arrivals</a>
       
<div class="bottom">
   <div class="row">
   <?php  
   if ($row_number>0) {
      while ($item =mysqli_fetch_array($command)) {


         ?>
         
            <div class="col-lg-3 box">
               <form method="post" >


                  <div class="prod-box">
                     <img src="products\<?php echo $item['image']  ?>">
                     <div class="prod-tran">
                        <div class="prod-feature">
                           <p><?php echo $item['name'] ?></p>
                           <p style="color:white; font-weight:bold">price: $<?php echo $item['price'] ?></p>
                           <input type="hidden" name="hidden_Id" value="<?php echo $item["id"]; ?>"/>
                           <input type="hidden" name="hidden_name" value="<?php echo $item["name"]; ?>"/>
                           <input type="hidden" name="hidden_price" value="<?php echo $item["price"]; ?>"/>
                          <input type="submit" name="buy" class="btn btn-success" value="Add to Cart"/>
                        </div>

                     </div>
                  </div>
                  
               </form>
               
               
            </div>
            
            
            
            



            <?php
         }
         ?>
      </div>
      <?php  

   }

   ?>
</div>
<!--Adding in Cart-->
   <?php 
      
      if (isset($_POST["buy"])) {
         
         
               
         if (isset($_SESSION["cart"])) {
            $item_array_id = array_column($_SESSION["cart"], 0);
            
            

            if (!in_array($_POST["hidden_Id"], $item_array_id)) {
               
               $count= count($_SESSION["cart"]);
               
               $item_array=array(

               $id= $_POST["hidden_Id"],
               $name=$_POST["hidden_name"],
                $price=$_POST["hidden_price"],
               

            );
               $_SESSION["cart"][$count]=$item_array;
               

            } else {
            echo '<script language="javascript">';
            echo 'alert("Already Added")';
            echo '</script>';
               
            }

            
            
         } else {
            $item_array=array(

               $id= $_POST["hidden_Id"],
               $name=$_POST["hidden_name"],
                $price=$_POST["hidden_price"],
               

            );
            $_SESSION["cart"][0]=$item_array;
         }
         
         
         
      }

      
     
    ?>


       
</div>
      
   </nav>
   
   
   </div>

   <!--product fetch-->

  


</body>



</html>