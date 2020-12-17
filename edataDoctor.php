<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}

$docName = $_POST['docName'];
$location = $_POST['location'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$user_id = $_SESSION["userid"];



$sql = "INSERT INTO user_docInfo(docName,location,city,phone,user_id)VALUES ('$docName' ,'$location','$city', '$phone','$user_id')";



if(!mysqli_query($con,$sql)){
	
header("location: edata.php");
	exit();
}
else{
header("location: edata.php");
	exit();
}


?>