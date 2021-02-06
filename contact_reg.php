<?php 
session_start();

include 'connection.php';


$name = $_POST['user'];
$pass = $_POST['phone'];
$comment=$_POST['comment'];


	$reg = "insert into contact(name,phoneno,comment) values ('$name','$pass','$comment')";
	mysqli_query($connection,$reg);
	echo "Registration Successful";
	header('Location:index.php');
	


?>