<!DOCTYPE html>
<html>
<head>
	<title>Teacher - Login</title>

</head>
<body>

<?php
session_start();
if(isset($_SESSION['uid']))

{
	header('location:home.php');
}
?>	

<center>
	<form action="admin.php" method="post">
		<h1>TEACHER LOGIN</h1>
	<table border="2" cellpadding="4" cellspacing="6">
		<tr>
			<td>Username : </td><td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Password : </td><td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="submit"></td>
		</tr>
		
	</table>
	<p><b><h3><a href="register.php">Create new account?</a></h3></b></p>
</form>
</center>

<?php

if(isset($_POST['submit']))
{

$con = mysqli_connect('localhost','root','','nbm');


	$name=$_POST['name'];
$pass=$_POST["pass"];

$query = "SELECT * FROM teacher  WHERE email = '$name' AND password = '$pass'";

$run = mysqli_query($con,$query);
$row = mysqli_num_rows($run);

if($row<1)
{
	?>
	<script>
	alert('Incorrect Username or Password');
	window.open('admin.php','_self');
	</script>
	<?php

}
else
{
	$data=mysqli_fetch_assoc($run);
   $id=$data['id'];
   $nm=$data['name'];
   
   session_start();
   $_SESSION['sid']=$id;
   $_SESSION['uid']=$nm;
   header('location:home.php');
}
}
?>

</body>
</html>