<?php
session_start();

unset($_SESSION["uid"]);
unset($_SESSION["sid"]);
unset($_SESSION["cid"]);
unset($_SESSION["cnm"]);


header('location:index.php');
?>




<?php
$std="0";
 $con = mysqli_connect('localhost','root','','nbm');
 $qry="SELECT * FROM `join` WHERE tchid='$sid'";
 $run=mysqli_query($con,$qry);
 $count=0;
 while($std=mysqli_fetch_assoc($run)){
     $count++;
  if(isset($std)){
   $stda=$std['stid'];
    $qry="SELECT * FROM `student` WHERE id='$stda'";
  $run=mysqli_query($con,$qry);
  $stdz=mysqli_fetch_assoc($run);
   ?>
    <p><?php echo $std['stid']; ?></p>
   <?php
 
   }
}
 ?>