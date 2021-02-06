<!DOCTYPE html>
<?php 
include 'connection.php';
 ?>
<html>
<head>
	<title>Admin Function</title>
	<!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!-- Popper JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 

	$query = "select * from item order by id ASC" ;
	$command= mysqli_query($connection,$query);
	$row_number=mysqli_num_rows($command);
	?>

	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Price</th>

				</tr>
			</thead>
			<tbody>
				<?php  
				if ($row_number>0) {
					while ($item =mysqli_fetch_array($command)) {


						?>
						<tr>
							<td><?php echo $item['id'] ?></td>
							<td><?php echo $item['name'] ?></td>
							<td><?php echo $item['price'] ?></td>

						</tr>
						<?php 

					}
					?>

				</tbody>
			</table>
			<?php 

		}
		?>

	</div>









	
	<div class="container">
		<form method="post">
			<div class="row">
				<div class="col-lg-3">

					<select class="custom-select" name="update_by">
						<option value="0">Name</option>
						<option value="1">Price</option>
						<option value="2">Image</option>
						<option value="3">ALL</option>

					</select>
				</div>


			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="EmailInput">ID</label>
						<input type="text" class="form-control"  name="id_input">
						
					</div>


				</div>

			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="EmailInput">Name</label>
						<input type="text" class="form-control"  name="name_input">

					</div>


				</div>

			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="EmailInput">image</label>
						<input type="text" class="form-control"  name="image_input">

					</div>


				</div>

			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="EmailInput">price</label>
						<input type="text" class="form-control"  name="price_input">

					</div>


				</div>

			</div>






			<button type="submit" name="submit_update" class="btn btn-primary">Submit</button>

		</form>

	</div>



	<?php 

	if (isset($_POST['submit_update'])) {
		$name=$_POST['name_input'];
		$image=$_POST['image_input'];
		$price=$_POST['price_input'];
		$id=$_POST['id_input'];


		if ($_POST['update_by']==0) {
			$query = "update item set name='$name' where id=$id" ;
		} else if ($_POST['update_by']==1) {
			$query = "update item set price=$price where id=$id" ;
		} else if($_POST['update_by']==2) {
			$query = "update item set image='$image' where id=$id" ;
		}else if($_POST['update_by']==3) {
			$query = "update item set name='$name',image='$image',price=$price where id=$id" ;
		}

		$command= mysqli_query($connection,$query);
		if (mysqli_query($connection,$query)) {
			echo "updated";
			header('Location:admin_function.php');
			
		}
		else{
			echo "failed";
		}



	}
	?>


	<div class="container">
		<h2>For Delete item</h2>
		<form method="post">




			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="EmailInput">ID</label>
						<input type="number" class="form-control"  name="id_input">

					</div>


				</div>

			</div>
			<button type="submit" name="submit_delete" class="btn btn-primary">DELETE</button>

		</div>

		<?php 

		
		if (isset($_POST['submit_delete'])) {
			$id=$_POST['id_input'];
			

			$query= "DELETE FROM item WHERE id=$id" ; 
			$command= mysqli_query($connection,$query);
			if (mysqli_query($connection,$query)) {
				echo "Deleted";
				header('Location:admin_function.php');
				
			}
			else{
				echo "failed";
			}
		}



		?>
		<div class="container">
			<h2>For Add new item</h2>
			<form method="post">

				


				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="EmailInput">Name</label>
							<input type="text" class="form-control"  name="name_input">
							
						</div>


					</div>

				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="EmailInput">image</label>
							<input type="text" class="form-control"  name="image_input">
							
						</div>


					</div>

				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="EmailInput">price</label>
							<input type="number" class="form-control"  name="price_input">
							
						</div>


					</div>

				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="EmailInput">Catagory</label>
							<input type="number" class="form-control"  name="catagory_input">
							
						</div>


					</div>

				</div>
				
				
				<button type="submit" name="submit_add" class="btn btn-primary">Submit</button>

			</div>

			<?php 
			if (isset($_POST['submit_add'])) {
				$name=$_POST['name_input'];
				$image=$_POST['image_input'];
				$price=$_POST['price_input'];
				$catagory=$_POST['catagory_input'];

				$query="INSERT INTO item (name,image,price,catagory)
				VALUES ('$name','$image','$price',$catagory)"; 
				$command= mysqli_query($connection,$query);
				if ($command) {
					echo "ADDED";
					header('Location:admin_function.php');
				}
				else{
					echo "failed";
				}
			}

			?>

			<link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.js">
			<link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.js">

		</body>
		</html>