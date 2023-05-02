<!doctype html>
<html lang="en">
<head>
<title> Sign Up/ Register </title>
	<style>
	.start {
		width:500px;
		height:350px;
		text-align:center;
		margin:0 auto;
		
		border-radius: 04px;
		margin=top: 50px;
	
	}
	.bg{
		background:url(signupbg.jpeg);
		background-size: cover;
		
	}
	.txtbox {
		margin-top: 0px;
		background: white;
		text-align:start;
		font-size: 15px;
		font-family: sans-serif;
		height: 30px;
		width: 300px;
		padding: 15px;
		border: none;
		border-radius: 15px;
		box-shadow: 0 3px 0 blue;
	}
	.txtbox:hover {
		background-color: aqua;
	}
	.btn{
		width : 300px;
		height:40px;
		border-radius: 10px;
		font-size: 20px;
		background-color: lightgreen;
	}
	</style>
</head>

<body class="bg" >
<div class ="start" >
	<h1> Sign Up or Registration </h1>
	 
	<form action= "" method="POST">
	
	<input type="text" name="fname" class="txtbox" placeholder=" Enter First Name" /> <br><br>
	<input type="text" name="lname" class="txtbox" placeholder=" Enter Last Name" /> <br><br>
	<input type="email" name="email" class="txtbox" placeholder=" Enter Email Id" /> <br><br>
	<input type="password" name="password" class="txtbox" placeholder=" Password" /> <br><br>
	<input type="password" name="cpassword" class="txtbox" placeholder="Confirm Password" /> <br><br>
	
	<input type= "submit" name="login" class="btn" value="Sign-Up" /> <br><br>
	<a href="home.html">HOME</a>
	</form>
	</div>
</body>
</html>


<?php
// need to create connection still
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection, 'bankreg');
if(isset($_POST['login']))
{
	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword =$_POST['cpassword'];
	
if ($password==$cpassword)
{
	$query ="INSERT INTO `signup` (`fname`, `lname`, `email`, `password`,`cpassword`) VALUES 
	('$fname', '$lname', '$email', '$password', '$cpassword')";
	$query_run= mysqli_query ($connection, $query);
	
	if ($query_run) 
	{
		echo '<script type= "text/javascript"> alert("Your successfully Signed Up ") </script>';
	}
	else 
	{
		echo '<script type= "text/javascript"> alert("Registration Failed ")</script>';
	}
}
	else {
	echo '<script type= "text/javascript"> alert("Password and Confirm Password do not match! ")</script>';
}
}
?>
