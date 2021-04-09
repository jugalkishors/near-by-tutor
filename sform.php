<!DOCTYPE html>
<html>
<head>
	<title>Student Info</title>
</head>
<body>
<center>
	<h1>STUDENT INFORMATION</h1>

	<marquee bgcolor="red"><font color="blue">this is detail of students info</font></marquee>
<h4 align="right"><a href="admin.php">Admin login</a></h4>


	<form action="sform.php" method="post" enctype="multipart/form-data">
	<table bgcolor="yellow" border="2" cellspacing="2" cellpadding="4" style="margin-top: 100px">
		<tr>
			<td>Student Name</td><td><input type="text" name="sname" placeholder="Your Name"></td>
		</tr> 
		<tr>
			<td>Class</td><td>

				<select size="1" name="class">
					<option value="6th">6th class</option>
					<option value="7th">7th class</option>
					<option value="8th">8th class</option>
					<option value="9th">9th class</option>
			    </select> 
			</td>
		</tr>
		<tr>
			<td>Student's Photo</td><td><input type="file" name="file"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit"></td>
		</tr>

	</table>
    </form>
</center>

<?php

if(isset($_POST['submit']))
{

$con = mysqli_connect('localhost','root','','login');

$name=$_POST["sname"];
$class=$_POST["class"];
$img=$_FILES['file'];

$filename=$img['name'];
$fileerror=$img['error'];
$filetmp=$img['tmp_name'];

$fileext = explode('.',$filename);
$filechck= strtolower(end($fileext));

$fileet = array('png','jpg','jpeg');

if(in_array($filechck,$fileet))
{
	$defile='upload/'.$filename;
	move_uploaded_file($filetmp,$defile);
}

$query = "INSERT INTO `sform`(`name`, `class`, `image`) VALUES ('$name','$class','$defile')";

$run = mysqli_query($con,$query);

if($run==TRUE)
{
	echo "Your form is submited succdessfully";
}
else
{
	echo "Try Again";
}

}
?>

</body>
</html>