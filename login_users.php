  <?php
 
 session_start();
 include("connection.php");
 
 if(isset($_POST['login'])){
 
 $emailid = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
 $password = htmlentities(mysqli_real_escape_string($con, $_POST['password']));
 
 $findusers = "select * from user where useremail='$emailid' AND password='$password'";
 
 $executeQuery = mysqli_query($con, $findusers);
 $testUser = mysqli_num_rows($executeQuery);
 
 if($testUser == 1){
	 
	 $_SESSION['useremail']=$emailid;
	 
	 $updateQuery = "UPDATE user SET login='Online' WHERE useremail='$emailid'";
	 $query = mysqli_query($con, $updateQuery);
	 
	 $userEmail = $_SESSION['useremail'];
	 $getUserName = "select * from user where useremail='$userEmail'";
	 $executeGetUserName = mysqli_query($con, $getUserName);
	 $findRow = mysqli_fetch_array($executeGetUserName);
	 
	 $username = $findRow['username'];
	
	 
	 echo"<script>window.open('homepage.php?username=$username', '_self')</script>";
	  
 }
 else{
 echo"<script>alert('Username or password is incorrect')</script>";
 }
 }
 ?>