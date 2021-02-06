<?php 
session_start();

include 'connection.php';


$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usersign where Name='$name' && password = '$pass'";
$command= mysqli_query($connection,$s);

//$result = mysqli_num_rows($s);
$num = mysqli_num_rows($command);

if($num ==1){
	header('location:cart_view.php');
}else{
	
	header ('location:login.php');
}

?>