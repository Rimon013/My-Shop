<?php 
session_start();
include 'connection.php';

$name = $_post['user'];
$pass = $_post['password'];

$s = "select * from usersign where name= '$name'";

$result = mysqli_num_rows($command,$s);
$num = mysqli_num_rows($result);

if($num ==1){
	echo "UserName Already Taken";
}else{
	$reg = "insert into usersign(name,password) values ('$name','$pass')";
	mysqli_query($command,$reg);
	echo "Registration Successful";
}

?>