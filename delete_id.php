<?php
$stin=$_GET['stin'];
$tcin=$_GET['tcin'];

$con = mysqli_connect('localhost','root','','nbm');
 $qry="DELETE FROM `join` WHERE `join`.`stid` = $stin AND `tchid` = $tcin";
 $run=mysqli_query($con,$qry);
 
 if($run==true)
 {

           session_start();
        if(isset($_SESSION["cid"]))
        {
        ?>
        	<script>
        	alert('Request canceled successfully');
        	window.open('index.php','_self');
        	</script>
        	<?php
       }
       else{
       	?>
       	<script>
        	alert('Request canceled successfully');
        	window.open('home.php','_self');
        	</script>
        	<?php

       }

 }

?>