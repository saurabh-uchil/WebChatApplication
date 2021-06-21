<?php

$dns = 'localhost';
$id = 'root';
$password = "";
$dbname = 'chatapplication'; 


$con = mysqli_connect($dns, $id, $password, $dbname);
$userData = "SELECT * FROM user";
$runQuery = mysqli_query($con, $userData);


while($values = mysqli_fetch_array($runQuery)){
	
	$userid = $values['user_id'];
	$username = $values['username'];
	$login = $values['login'];
	
	echo"
	<li>
	<div class='user'>
	
	<div class='data'>
	<p><B>$username</B></p>
	<div class='status'>";
	
	if($login == "Online"){
		echo"<span>Online</span>";
	}else{
		echo"<span>Offline</span>";
	}
	"
	</div>
	</div>
	</li>
	";
}

	




?>
<html>

<style>

.data{
	color:#7B1C28 ;
}
.status{
	color:#E10D27 ;
}
</style>
</html>