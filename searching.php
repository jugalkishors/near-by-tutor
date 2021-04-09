<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
</head>
<body>
<center>
<h1>STUDENT INFO SHEET</h1>
<marquee bgcolor="red"><font color="blue">this is detail of students info</font></marquee>
<p align="right"><font size="2"><a href="logout.php">Logout</a></p>
<p align="right"><a href="home.php">Go to Dashboard</a></p></font>
<hr></hr>
<hr></hr>

<form action="searching.php" method="post">
	
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



       $qry="SELECT * FROM `teacher` WHERE class='$std' AND city LIKE '%$city%'";
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
  <img src="<?php echo $result['image']; ?>" alt="John" style="width:40%">
  <h3><?php echo $result['name']; ?></h3>
<font size="2">
  <p class="title"><?php echo $result['Qualification']; ?></p>
  <p><?php echo $result['email']; ?></p>
  <?php echo $result['contact']; ?><br>

<?php $sub1=$result['subject1'];
       if($sub1=="None"){

      } else{
        echo $result['subject1'];
      }

      $sub2=$result['subject2'];
       if($sub2=="None"){

      } else{
        echo ", ", $result['subject2'];
      }

      $sub3=$result['subject3'];
       if($sub3=="None"){

      } else{
        echo ", ", $result['subject3'];
      }

       ?>

  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> <br>

     
  </div></font>
  <p><button><a href="edit.php?sid=<?php echo $result['id'];?>"><font color="white">Edit</a></font></button></p>
</div>
</p>



       <?php     
       }

      }  
}

?>
</table>

</body>
</html>