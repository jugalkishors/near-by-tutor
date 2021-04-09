<!DOCTYPE html>
<html>
<head>
	<title>Home - Near By Mentor</title>
</head>
<body>
<center>
	<p><font size="6" font color="aqua" font face="calibri"><b>NEAR BY MENTOR</b></font></p>
	<p><font size="4">Poornima group of institutions, Jaipur</font></p>
	<marquee bgcolor="red">We connect with education...</marquee>
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
else
  {
    ?>
  <script>
  alert('You are not login, Please Log in');
  window.open('index.php','_self');
  </script>
  
  <?php
}
?>

<hr></hr>

  <?php 
   $sid=$_GET['sid'];
  ?>
<?php
 $con = mysqli_connect('localhost','root','','nbm');
 $qry="SELECT * FROM `teacher` WHERE id='$sid'";
 $run=mysqli_query($con,$qry);
 $data=mysqli_fetch_assoc($run);
?>


<p><br></p>
<center>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript">
  $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>

<style type="text/css">
  .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

</style>

<div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">TEACHER</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $data['image']; ?>" class="img-circle img-responsive"width=70%> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><b>Name</b>:</td>
                        <td><?php echo $data['name']; ?></td>
                      </tr>
                      <tr>
                        <td><b>Teacher Id</b>:</td>
                        <td><?php echo "19TCH0", $data['id']; ?></td>
                      </tr>
                      <tr>
                        <td><b>Class</b> (for teaching):</td>
                        <td><?php echo $data['class']; ?></td>
                      </tr>
                      <tr>
                        <td><b>Subject</b> (for teaching):</td>
                        <td><?php $sub1=$data['subject1'];
       if($sub1=="None"){

      } else{
        echo $data['subject1'];
      }

      $sub2=$data['subject2'];
       if($sub2=="None"){

      } else{
        echo ", ", $data['subject2'];
      }

      $sub3=$data['subject3'];
       if($sub3=="None"){

      } else{
        echo ", ", $data['subject3'];
      }

       ?></td>
                      </tr>
                   <tr>
                        <td><b>Gender</b>:</td>
                        <td><?php echo $data['gender']; ?></td>
                      </tr><tr>
                        <td><b>Medium (Which medium want to teach)</b>:</td>
                        <td><?php echo $data['medium']; ?></td>
                      </tr><tr>
                        <td><b>Board (Which Board want to teach)</b>:</td>
                        <td><?php echo $data['board']; ?></td>
                      </tr>
                         <tr>
                             <tr>
                        <td><b>Address</b>:</td>
                        <td><?php echo $data['address']; ?></td>
                      </tr>
                        <tr>
                        <td><b>Address</b> (Where teach):</td>
                        <td><?php echo $data['city']; ?></td>
                      </tr>
                      <tr>
                        <td><b>Email</b>:</td>
                        <td><?php echo $data['email']; ?></td>
                      </tr>
                        <td><b>Phone Number</b>:</td>
                        <td><?php echo $data['contact']; ?>
                        </td>
                           
                      </tr>
                      <tr>
                        <td><b>Qualifications</b>:</td>
                        <td><?php echo $data['Qualification']; ?></td>
                      </tr>
                     <tr>
                        <td><b>Experience</b>:</td>
                        <td><?php echo $data['Experience']; ?></td>
                      </tr>
                    </tbody>
                  </table>

<?php
$con=mysqli_connect('localhost','root','','nbm');
 $qry="SELECT * FROM `join` WHERE stid=$cid AND tchid='$sid'";
       $run=mysqli_query($con,$qry);

       if(mysqli_num_rows($run)<1)
       {
        ?>
         <form action="info.php?<?php echo "sid=", $sid;?>"" method="post">
                    <input type="hidden" name="stid" value="<?php echo $cid; ?>">
                    <input type="hidden" name="tchid" value="<?php echo $sid; ?>">
                  <input type="submit" name="submit">
                  
                </form>
        <?php
       }
       else
       {
        echo "You are already requested";
        ?>
        <br><a href="delete_id.php?stin=<?php echo $cid; ?>&tcin=<?php echo $sid; ?>" class="btn btn-primary">Cancel Request</a>
        <?php
       }
       

       
?>


                </div>
              </div>
            </div>
           
      <?php
$con = mysqli_connect('localhost','root','','nbm');
if(isset($_POST['submit']))
{
  $stid = $_POST['stid'];
  $tchid = $_POST['tchid'];
  
$query = "INSERT INTO `join`(`stid`, `tchid`) VALUES ('$stid','$tchid')";

$run = mysqli_query($con,$query);

if($run==TRUE)
{
  ?>
  <script>
  alert('Your request is submitted.');
  window.open('index.php','_self');
  </script>
  <?php
}
else
{
  echo "Not created account!!!";
}

}
?>

                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>


</center>
</body>
</html>