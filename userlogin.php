

<html>
<body style="background-color:#2980B9">
<form action="" method = "post">
<div class="area">
<div class="formData">
<h1>LET'S CHAT</h1>
<h3>Log In To Let's Chat"</h3>
<label>Email:</label>
<input type="text" name="email" class = "form-control"  placeholder="abcd@efg.com"/><br><br>
<label>Password:</label>
<input type="password" name="password" class = "form-control" /><br><br>
<button type="submit" name="login" />Login</button>
<?php 
include("login_users.php");
?>
<br>

<p><b>If you don't have an account?</p>
<a href="signup.php">Register</a>
</form>
</div>
</div>
<style>
body{
	background-color:#2980B9;
}

.area{
	background-color:#D1F2EB;
	margin-left:500px;
	margin-top:100px;
	border:2px solid;
	border-radius:30px;
	width:300px;
	height:400px;
}

.formData{
	margin-left:20px;
}

</style>

</body>
</html>
