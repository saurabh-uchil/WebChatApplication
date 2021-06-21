<?php
include("connection.php");

if(isset($_POST['register'])){
	
	$userName = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
	$userPass = htmlentities(mysqli_real_escape_string($con, $_POST['user_password']));
	$userEmail = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
	$userCountry = htmlentities(mysqli_real_escape_string($con, $_POST['user_country']));
	$userGender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
	$random = rand(1,2);

	if(strlen($userPass)<8){
		echo"<script>alert('Password Too Short! Minimum * Characters expected!!')</script>";
		echo"<script>window.open('signup.php', '_self')</script>";
		exit();
		
	}
	
	$getUserData = "select * from user where useremail='$userEmail'";
	$selectQuery = mysqli_query($con, $getUserData); 
	
	$checkData = mysqli_num_rows($selectQuery);
	
	if($checkData == 1){
		echo"<script>alert('Email Already Exists')</script>";
		echo"<script>window.open('signup.php', '_self')</script>";
		exit();
	}
	
    $insert = "insert into user (username,password,useremail,usercountry,usergender) values('$userName', '$userPass', '$userEmail','$userCountry', '$userGender' )";
	$insertQuery = mysqli_query($con, $insert);
	
	if($insertQuery){
		echo"<script>alert('Congratulations $name, your account has been created!!')</script>";
		echo"<script>window.open('userlogin.php', '_self')</script>";
	} 
	else{
		echo"<script>alert('Registration Failed')</script>";
		echo"<script>window.open('signup.php', '_self')</script>";
		exit();
	}
}
?>