<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['cid']))

{
	header('location:index.php');
}
?>	

<center>
	<form action="slogin.php" method="post">
		<h1>STUDENT LOGIN</h1>
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
	<p><b><h3><a href="sregister.php">Create new account?</a></h3></b></p>
</form>
</center>

<?php

if(isset($_POST['submit']))
{

$con = mysqli_connect('localhost','root','','nbm');


	$name=$_POST['name'];
$pass=$_POST["pass"];

$query = "SELECT * FROM student  WHERE email = '$name' AND password = '$pass'";

$run = mysqli_query($con,$query);
$row = mysqli_num_rows($run);

if($row<1)
{
	?>
	<script>
	alert('Incorrect Username or Password');
	window.open('slogin.php','_self');
	</script>
	<?php

}
else
{
	$data=mysqli_fetch_assoc($run);
   $id=$data['id'];
   $nm=$data['name'];
   
   session_start();
   $_SESSION['cid']=$id;
   $_SESSION['cnm']=$nm;
   header('location:index.php');
}
}
?>

</body>
</html>