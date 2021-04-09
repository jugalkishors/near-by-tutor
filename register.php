<!DOCTYPE html>
<html>
<head>
	<title>Register Account</title>
</head>
<body>

<?php
$o1=$_GET['o1'];
$o2=$_GET['o2'];
$o3=$_GET['o3'];
$o4=$_GET['o4'];
$o5=$_GET['o5'];
$o6=$_GET['o6'];
$email1=$_GET['email'];

$otp=$o1.$o2.$o3.$o4.$o5.$o6;

if($otp==223344){

}
else{

   ?>
	<script>
	alert('OTP does not match!!!');
	window.open('email.php','_self');
	</script>
	<?php

}

?>



	<center>
	<h1>Create New Account</h1>
<form action="register.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Name : </td><td><input type="text" name="name" placeholder="Enter your name"></td>
		</tr>
		<tr>
			<td>Select Class (Which you want to teach) : </td><td><select size="1" name="class">
					<option value="Nursary to 6th">Nursary to 6th</option>
					<option value="7th to 8th class">7th to 8th class</option>
					<option value="9th to 10th class ">9th to 10th class</option>
					<option value="11th to 12th (Science Math)">11th to 12th (Science Math)</option>
					<option value="11th to 12th (Science Biology)">11th to 12th (Science Biology)</option>
					<option value="11th to 12th (Science Agriculture)">11th to 12th (Science Agriculture)</option>
					<option value="11th to 12th (Science Math)">11th to 12th (Commerce)</option>
					<option value="11th to 12th (Commerce)">11th to 12th (Arts)</option>
			    </select></td>
		</tr>
		<td>Select Subject (Which you want to teach) : </td><td><select size="1" name="sub1">
					<option value="None">None</option>
					<option value="Physics">Physics</option>
					<option value="Chemistry">Chemistry</option>
					<option value="Mathametics">Mathametics</option>
					<option value="General Science">General Science</option>
					<option value="English">English</option>
					<option value="Hindi">Hindi</option>
					<option value="Sanskrit">Sanskrit</option>
					<option value="Biology">Biology</option>
							<option value="Agriculture">Agriculture</option>
			    </select>
			<select size="1" name="sub2">
					<option value="None">None</option>
					<option value="Physics">Physics</option>
					<option value="Chemistry">Chemistry</option>
					<option value="Mathametics">Mathametics</option>
					<option value="General Science">General Science</option>
					<option value="English">English</option>
					<option value="Hindi">Hindi</option>
					<option value="Sanskrit">Sanskrit</option>
					<option value="Biology">Biology</option>
							<option value="Agriculture">Agriculture</option>
			    </select>
			<select size="1" name="sub3">
					<option value="None">None</option>
					<option value="Physics">Physics</option>
					<option value="Chemistry">Chemistry</option>
					<option value="Mathametics">Mathametics</option>
					<option value="General Science">General Science</option>
					<option value="English">English</option>
					<option value="Hindi">Hindi</option>
					<option value="Sanskrit">Sanskrit</option>
					<option value="Biology">Biology</option>
							<option value="Agriculture">Agriculture</option>
			    </select>
			</td>
		<tr>
		<td>Board : </td><td><select size="1" name="bord">
					<option value="Local State Board">Local State Board</option>
					<option value="ICSE">ICSE</option>
					<option value="CBSE">CBSE</option>
					<option value="IB/IGCSE/Cambridge">IB/IGCSE/Cambridge</option>
			    </select></td>
		</tr>
		<td>Medium(Which you want to teach) : </td><td><select size="1" name="med">
					<option value="Hindi Medium">Hindi Medium</option>
					<option value="English Medium">English Medium</option>
					<option value="Other Medium">Other Medium</option>
			    </select></td>
		</tr>
		<tr>
			<td>Address (Where you want to teach) : </td><td><input type="text" name="addr" placeholder="Enter your Address"></td>
		</tr>
		<tr>
		<td>Select City (Where you want to teach) : </td><td><select size="1" name="city">
					<option value="Jaipur">Jaipur</option>
					<option value="Jodhpur">Jodhpur</option>
					<option value="Ajmer">Ajmer</option>
					<option value="Bikaner">Bikaner</option>
					<option value="Alwar">Alwar</option>
					<option value="Sirohi">Sirohi</option>
					<option value="Jalore">Jalore</option>
					<option value="Pali">Pali</option>
					<option value="Kota">Kota</option>
			    </select></td>
		</tr>
		<tr>
			<td>Profile Photo : </td><td><input type="file" name="file"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="email" value="<?php echo $email1; ?>" placeholder="Enter your E-mail"></td>
		</tr>
		<tr>
			<td>Gender : </td><td><input type="radio" name="sex" value="Male">Male<input type="radio" name="sex" value="Female">Female</td>
		</tr>
		<tr>
			<td>Mobile no. : </td><td><input type="number" name="no" placeholder="Your Mobile no."></td>	
		</tr>
		<tr>
			<td>Create Password : </td><td><input type="password" name="pass" placeholder="Password" maxlength="6"></td>
		</tr>
		<tr>
			<td>Re-enter Password : </td><td><input type="password" name="repass" placeholder="Re-enter Password" maxlength="6"></td>
		</tr>
		<tr>
			<td>Qualification : </td><td><input type="text" name="qulif" placeholder="Enter your Qualification"></td>
		</tr><tr>
			<td>Experience : </td><td><input type="text" name="exp" placeholder="Enter your experience"></td>
		</tr>
		<tr align="right">
			<td colspan="2"><input type="submit" name="submit"></td>
		</tr>
	</table>

	<p><h3><a href="admin.php">Already have a Account?</a></p></h3>
</form>

<?php
$con = mysqli_connect('localhost','root','','nbm');
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$no = $_POST['no'];
	$pass=$_POST['pass'];
	$class=$_POST['class'];
	$addr=$_POST['addr'];
	$city=$_POST['city'];
	$med=$_POST['med'];
	$bord=$_POST['bord'];
	$gen=$_POST['sex'];
	$qulif=$_POST['qulif'];
	$exp=$_POST['exp'];
    $sub1=$_POST['sub1'];
    $sub2=$_POST['sub2'];
    $sub3=$_POST['sub3'];
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

$qry="SELECT * FROM `teacher` WHERE email='$email'";
 $runs=mysqli_query($con,$qry);
 $row = mysqli_num_rows($runs);

 if($row<1)
{

$query = "INSERT INTO `teacher`(`name`, `class`, `image`, `email`, `contact`, `Qualification`, `Experience`, `address`, `city`, `password`, `subject1`, `subject2`, `subject3`, `gender`, `board`, `medium`) VALUES ('$name','$class','$defile','$email','$no','$qulif','$exp','$addr','$city','$pass','$sub1','$sub2','$sub3','$gen','$bord','$med')";

$run = mysqli_query($con,$query);

if($run==TRUE)
{
	header('location:admin.php');
}
else
{
	echo "Not created account!!!";
}

}
else{

	?>
	<script>
	alert('This email is Already Exist!!!');
	window.open('admin.php','_self');
	</script>
	<?php
}

}
?>


</body>
</html>