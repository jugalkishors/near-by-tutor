
<?php
$uid=$_GET['uid'];
$email=$_GET['email'];
$sid=$_GET['sid'];
$teacher=$_GET['teacher'];
$con=$_GET['contact'];
$email1=$_GET['email1'];


$to="$email";
$from="nearbymentor@nearbymentor.com";
$message="Congratulations,\n\nYour request is accepted by $teacher. You can join tution very soon.\n\nTeacher Info is-\nTeacher name- $teacher\nContact no.- $con\nEmail- $email1\n\nFor more information or queries then you contact us on-\nnearbymentor@gmail.com\n+91 8890209205\n\nThank you.\n\n\nCEO & Founder\nJugal Kishor Suthar ";
$headers="From: $from\n";
mail($to,'',$message,$headers);


$con = mysqli_connect('localhost','u291795073_nbm','jksuthar','u291795073_nbm');
 $qry="INSERT INTO `accepted`(`t_id`, `s_id`) VALUES ('$sid','$uid')";
 $run=mysqli_query($con,$qry);
 if($run==true){
 ?>
 <script>
 alert('Student request is submited!!!');
 window.open('home.php','_self');
 </script>
 <?php
 }
?>
