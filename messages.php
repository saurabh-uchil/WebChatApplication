<?php

session_start();
include("connection.php");

	 $userEmail = $_SESSION['useremail'];
	 $getUserName = "select * from user where useremail='$userEmail'";
	 $executeGetUserName = mysqli_query($con, $getUserName);
	 $findRow = mysqli_fetch_array($executeGetUserName);
	 
$username = $findRow['username'];
$messageContent = $_POST['enterChat'];

$insertQuery = "insert into messages(sender,message) VALUES('$username','$messageContent')";
$results = $con->query($insertQuery);

header("Location:homepage.php");


?>