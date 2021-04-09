<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<h1>STUDENT INFO SHEET</h1>
<marquee bgcolor="red"><font color="blue">this is detail of students info</font></marquee>
<h4 align="right"><a href="logout.php">Logout</a></h4>
<h4 align="right"><a href="home.php">Go to Dashboard</a></h4>

<?php

$con = mysqli_connect('localhost','root','','login');


$dispq="SELECT * FROM `sform`";
$qdis=mysqli_query($con,$dispq);

?><style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Student List of Info</h2>

<table>
  <tr>
    <th>id</th>
    <th>Name</th>
    <th>Class</th>
    <th>Image</th>

  </tr>

	<?php

while ( $result = mysqli_fetch_array($qdis)) {
?>
    
	<tr>
		<td><?php echo $result['id']; ?></td>
		<td><?php echo $result['name']; ?></td>
		<td><?php echo $result['class']; ?></td>
		<td><img src="<?php echo $result['image']; ?>" width=100 height=100></td>
	</tr>
	<?php
}



?>
</table>
</center>

</body>
</html>