<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="p1.css" rel="stylesheet" type="text/css">
   <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>


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
	<div id="navigation">
	<nav>
		<a href="index.php">Home</a>
		<a href="hot.php">Deals</a>
		<a href="new.php">New Arrivals</a>

		<div class ="container">
		<div class="login-box">
			<div class ="row">
				<div class="col-md-6 login-log">
					<h2>Contact Us</h2>
					<form action="contact_reg.php" method ="post" >
						<div class="form-group">
							<label>UserName</label>
							<input type="text" name="user" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Phone Number</label>
							<input type="text" name="phone" class="form-control" required>
						</div>

						<div class="form-group">
							<label for="exampleFormControlTextarea1">Feedback</label>
							<textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>

					</form>
				</div>
			</div>
		</div>
		
		
	</nav>
	
	
	</div>

	
	</body>
	</html>