<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="p1.css">
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
   <a href="login.php"><img class="size" src="cart1.png"></a>
   <div id="navigation">
   <nav>
      <a href="index.php">Home</a>
      <a href="hot.php">Deals</a>
      <a href="new.php">New Arrivals</a>
       
<div class="bottom">
    <div class ="container">
		<div class="login-box">
		<div class ="row">
			<div class="col-md-6 login-log">
				<h2 >Login Here</h2>
				<form action="validation.php" method ="post" >
					<div class="form-group">
						<label>UserName</label>
						<input type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="password" class="form-control" required>
					</div>

					<button type="submit" class="btn btn-primary">Login</button>

				</form>
			</div>

		</div>
		<a class="link" href="Register.php">I Have No Account </a>
		</div>



</div>
       
</div>
      
   </nav>
   
   
   </div>

	

