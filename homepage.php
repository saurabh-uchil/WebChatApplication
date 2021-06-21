<?php
session_start();
include("connection.php");
if(!isset($_SESSION['useremail'])){
	header("location:userlogin.php");
}
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="homepage.css">
</head> 
<body>
<h1>Welcome To Lets Chat</h1>
<p> <font color="white">Hi, 
<?php 
$email = $_SESSION['useremail'];
$queryName = "SELECT * from user WHERE useremail = '$email'";
$executeQuery = mysqli_query($con,$queryName);
$values = mysqli_fetch_array($executeQuery);
$name = $values['username'];
echo"$name";
?></font>
</p>

<form action="logout.php" method="post">
<input type="submit" value="logout" />
</form>
<div class="presentusers">

<div class="currentUser">


</div>
<div class="map" >
<form method="post" action="maps.html">
<button name="showMaps" value="Maps">Maps</button>
</form>
</div>
	</div>

<div class="areas">
<div class="userarea">
<ul>
<?php 
include("userdata.php");

?>
</ul>
</div>
<div class="chatarea">
<div class="messages">
<?php

$showMessages = "SELECT * FROM messages";
$executeQuery = $con->query($showMessages);

if($executeQuery->num_rows > 0){
	while($value = $executeQuery->fetch_assoc()){
		$sender = $value['sender'];
		$message = $value['message'];
		$dateTime =$value['dateTime'];
		
		echo"
  	<div class='MessageSent'>
	<div class='sender'>
	<p><B>$sender</B> <small>$dateTime</small></p>
	</div>
	<div class='msg'>
	<p>$message</p>
	</div>
	
	</div>
	";
	}
	
	}else{
		echo"No Current Chats";
}

?>
</ul>
</div>
</div>
</div>
<form action="messages.php" method="post">
<br>
<br>
<div class="area">
<textarea class="msgArea"  name="enterChat" placeholder="Enter your message"></textarea>
<br>
<button class= "element" name="send" type="submit" style="margin-left:10px;">Send</button>
</div>
</form>

</body>

<style>

body{
	background-color:#1A5276;
}

h1{  
	color:white; 
	margin:0px;
	text-align:center;
}

h2{
	color:white;	
}
.logout{
	margin-left:1000px;
	margin-top:-10px;
}

.currentUser{
	margin-left:500px;
}

.addfriends{
	position:right;
	margin-top:10px;
}

.userarea{
	background-color:#D6EAF8 ;
	box-shadow: 0px 1px 1px #000;
	border:white;
	width:350px;
	height:450px;
	margin-top:20px;
	overflow:scroll;
}

.chatarea{
	background-color:#D1F2EB;
	box-shadow: 0px 1px 1px #000;
	border:black;
	align:center;
	height:450px;
	margin-top:-450px;
	margin-left:425px;
	width:500px;
	overflow:scroll;
	border-radius:10px;
	
}

.msgArea{
	background-color:#D1F2EB;
	box-shadow: 0px 1px 1px #000;
	align:right;
	height:50px;
	margin-top:-10px;
	margin-left:425px;
	width:500px;
	float:left;
}

.map{
	margin-left:875px;
}

.messages{
	margin-left:20px;
}

.messageSent{
	background-color:#8DE25D;
	border:solidwhite;
	border-radius:10px;
}

.sender{
	margin-left:5px;
}

.msg{
	margin-left:10px;
	margin-top:-5px;
	color:#7B241C;
}

</style>

</html>