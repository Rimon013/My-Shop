<?php 
session_start();

include 'connection.php';


$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usersign where Name='$name' ";
$command= mysqli_query($connection,$s);

//$result = mysqli_num_rows($s);
$num = mysqli_num_rows($command);

if($num ==1){
	echo "UserName Already Taken";
}else{
	$reg = "insert into usersign(Name,password) values ('$name','$pass')";
	mysqli_query($connection,$reg);
	echo "Registration Successful";
	header ('location:index.php');
}

?>