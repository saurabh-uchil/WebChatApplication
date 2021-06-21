<html>
<body>
<div class="signup">

<div class="form">
<h1>Register New User</h1>
<form action="" method = "post">
Username:<input type="username" name="user_name" required /><br><br>
Password:<input type="password" name="user_password" required /><br><br>
Email Address:<input type="email" name="user_email"  placeholder="abcd@efgh.com" required /><br><br>

Country:<select class= "form-control" name ="user_country" required>
<option disabled="">Select a country</option>
<option >India</option>
<option >Australia</option>
<option >Portugal</option>
<option >Other</option>
</select>
<br>
<br>
Gender:<select class= "form-control" name ="user_gender" required>
<option >Select an option</option>
<option >Male</option>
<option >Female</option>
<option >Other</option>
</select>
<br>
<br>
<div class="form-group">
<label class="checkbox-inline"><input type="checkbox" required ><B>I accept the terms and conditions</label>
</div>
<br>

<button type="submit" name="register" />Register</button>
<?php include("register_user.php"); ?>
<br><br>
<a href="userlogin.php">Already have an account?</a>
</form>
</div>
</div>

<style>
body{
    background-color:#2980B9;	
}
.signup{
	background-color:#D1F2EB;
	margin-left:500px;
	margin-top:100px;
	border:2px solid;
	border-radius:30px;
	width:300px;
	height:400px;
}
.form{
	margin-left:20px;
}

</style>
</body>
</html>