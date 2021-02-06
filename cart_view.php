<?php 
error_reporting(0);
include 'connection.php';
session_start();
if (isset($_POST['place_order'])) {
	unset($_SESSION["cart"]);
}

if (isset($_POST['remove'])) {
		$item_id = $_POST["hidden_id"];

	if (!empty($_SESSION["cart"])) {
		foreach ($_SESSION["cart"] as $select => $val) {
			if($val[0] == $item_id)
			{
				unset($_SESSION["cart"][$select]);
				header('Locarion:cart_view.php');
			}
		}
	}
	}
	


?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal info</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

	<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="p1.css">
</head>
<body>



         <div id="main-header">
   <div id="logo">
      <span id="ist">MY</span><span id="iist">Shop.Com</span>
      
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
    <!--Cart item Showing-->
	<div class="row cart_show">
		<div class="table-show col-lg-9 ">
			<table class="table table-striped  ">
		<thead>
			<tr>
				
				<th scope="col">Name</th>
				<th scope="col">Price</th>
				<th scope="col">total</th>

			</tr>
		</thead>
		<tbody>
			<tr>

				<?php 

				$total=0;

				foreach ($_SESSION["cart"] as $key => $value) {
					
					 ?>
					<td><?php echo $value["1"]; ?></td>
					<td><?php echo $value["2"]; ?></td>
					
					<td><?php echo $value["2"] ?></td>
					<td><form method="post">
						<input type="hidden" name="hidden_id" value="<?php echo $value["0"]; ?>"/>
						<button type="submit" name="remove" class="btn btn-primary btn-sm">Remove</button>
					</form></td>
					
					
				</tr>
				<?php 
				$total+=$value["2"];

			}
			
			?>


		</tbody>
	</table>

		</div>

		<div class="total-price col-lg-3">
			<tr class="total_price_display">
				<td> <b>total</b></td>
				<td><?php echo $total; ?></td>
			</tr>
		<form method="POST">
		<button type="submit" name="place_order" class="btn btn-primary btn-lg place_order">Confirm</button>
		</form>
		</div>
		
	</div>


</div>
       
</div>
      
   </nav>
   
   
   </div>
	

	
	
	
	
	

	



	
	


</body>
</html>