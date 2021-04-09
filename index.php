<!DOCTYPE html>
<html>
<head>
	<title>Home - Near By Mentor</title>
</head>
<body background="mbr-1920x1080.jpg">

<center>
	<p><font size="7" font color="red" font face="calibri"><b>NEAR BY MENTOR</b></font></p>
	<p><font size="4">Poornima Institute of Engineering and Techonology, Jaipur</font></p>
	<marquee bgcolor="aqua">We connect with education...</marquee>
</center>

<?php
session_start();
if(isset($_SESSION["cid"]))
{
?>
<p align="right">Hello, <?php echo $_SESSION["cnm"]; ?></p>
<p align="right"><a href="logout.php">Logout</a></p>
<?php 
 $cid=$_SESSION["cid"]; 
}
else if(isset($_SESSION["sid"])){
	?>
<p align="right">Hello, <?php echo $_SESSION["uid"]; ?></p>
<p align="right"><a href="logout.php">Logout</a></p>
<?php 
 $sid=$_SESSION["sid"]; 
}
else
	{
		?>
	<p align="right">Login as a <a href="slogin.php">Student</a></p>
	<p align="right">Login as a <a href="admin.php">Teacher</a></p>
	
	<?php
}
?>
<hr></hrs>






<p><br></p>
<center>
<form action="index.php" method="post">
	
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

          <select size="1" name="city">
            <option value="Select your city">Select your city</option>
          <option value="Jaipur">Jaipur</option>
          <option value="Jodhpur">Jodhpur</option>
          <option value="Ajmer">Ajmer</option>
          <option value="Bikaner">Bikaner</option>
          <option value="Alwar">Alwar</option>
          <option value="Sirohi">Sirohi</option>
          <option value="Jalore">Jalore</option>
          <option value="Pali">Pali</option>
          <option value="Kota">Kota</option>
          </select>
	<input type="submit" name="submit">
</form>


<?php

if(isset($_POST['submit']))
{
  $con = mysqli_connect('localhost','root','','nbm');
  $std=$_POST['class'];
  $city=$_POST['city'];

       $qry="SELECT * FROM `teacher` WHERE class='$std' AND city='$city'";
       $run=mysqli_query($con,$qry);

       if(mysqli_num_rows($run)<1)
       {
       	echo "No Record Found!!!";
       }
       else
      {

       	$count=0;
      while ( $result = mysqli_fetch_array($run)) 
      {
      	$count++;
      ?>


<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  background-color: white;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<p>
<div class="card">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  border-radius: 50%;
}
</style>
</head>
<img src="<?php echo $result['image']; ?>" alt="Avatar" style="width:80px">


 
  <h3><?php echo $result['name']; ?></h3>
<font size="2">
  <p class="title"><?php echo $result['Qualification']; ?></p>
  <p><?php echo $result['email']; ?></p><br>
  <?php echo $result['contact']; ?>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div></font>

<?php
 if(isset($_SESSION["sid"])){
	?>
     <p><button><font color="white">Teacher can't join</font></button></p>
   <?php
    }
    else{
      ?>
  <p><button><a href="info.php?sid=<?php echo $result['id'];?>"><font color="white">Join Now</a></font></button></p>
   <?php
      }

?>
</div>
</p>



       <?php     
       }

      }  
}

?>
</center>
</body>
</html>