<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
  

<center>
	<h1>STUDENT INFORMATION</h1>

	<marquee bgcolor="red"><font color="blue">this is detail of students info</font></marquee>

<?php
$sid=$_GET['sid'];
?>

<?php
 $con = mysqli_connect('localhost','root','','nbm');
 $qry="SELECT * FROM `teacher` WHERE id='$sid'";
 $run=mysqli_query($con,$qry);
 $data=mysqli_fetch_assoc($run);
?>



	<form action="tupdate.php" method="post" enctype="multipart/form-data">
	<table bgcolor="yellow" border="2" cellspacing="2" cellpadding="4" style="margin-top: 100px">
		<tr>
			<td>Name</td><td><input type="text" name="sname" value="<?php echo $data['name']; ?>"></td>
		</tr> 
		<tr>
			<td>Class</td><td>

				<select size="1" name="class">
					<option value="Nursary to 6th">Nursary to 6th</option>
					<option value="7th to 8th class">7th to 8th class</option>
					<option value="9th to 10th class ">9th to 10th class</option>
					<option value="11th to 12th (Science Math)">11th to 12th (Science Math)</option>
					<option value="11th to 12th (Science Biology)">11th to 12th (Science Biology)</option>
					<option value="11th to 12th (Science Agriculture)">11th to 12th (Science Agriculture)</option>
					<option value="11th to 12th (Science Math)">11th to 12th (Commerce)</option>
					<option value="11th to 12th (Commerce)">11th to 12th (Arts)</option>
			    </select>
			</td>
		</tr>
		<tr>
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
		</tr>
		<tr>
			<td>Profile Photo</td><td><input type="file" name="file" value="<?php echo $data['image']; ?>"></td>
		</tr>
<tr>
			<td>Contact No. </td><td><input type="number" name="no" value="<?php echo $data['contact']; ?>" maxlength="12"></td>
		</tr>

		<tr>
			<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">

			<td colspan="2"><input type="submit" name="submit" value="Update"></td>
		</tr>

	</table>
    </form>
</center>

<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root','','nbm');

$name=$_POST["sname"];
$no=$_POST['no'];
$class=$_POST["class"];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$img=$_FILES['file'];
$id=$_POST['sid'];
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

$qry="UPDATE `teacher` SET `name` = '$name', `class` = '$class', `image` = '$defile',`subject1`='$sub1',`subject2`='$sub2',`subject3`='$sub3',`contact` = '$no' WHERE `teacher`.`id` = $id";
$run=mysqli_query($con,$qry);

if($run==TRUE)
{
	?>
<script>
	alert('Data update successfully');
	window.open('home.php','_self');
</script>


	<?php
}
else
{
	echo "Try Again";
}


}
?>
</body>
</html>