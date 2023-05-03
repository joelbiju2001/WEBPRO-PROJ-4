
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<h1>Login Page</h1>
		<form action= "" method="POST">
        <label for="email">Username:</label>
        <input type="email"name="email" class="txtbox" placeholder="Enter Email Id"/><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
	<br>
	<a href="signup.php"> New User? </a>

	
</body>
</html>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection, 'bankreg');

if (isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query= "select * from `signup` WHERE email= '$email' AND password= '$password' ";
	$query_run= mysqli_query($connection, $query);
	
	if(mysqli_fetch_array($query_run)>0)
	{
		header("Location: homepage.php");
		echo '<script type="text/javascript"> alert("Logged In Succerssfully") </script>' ;
	}
	else {
		echo '<script type="text/javascript"> alert("Logged In Failed") </script>' ;
	}
}
?>