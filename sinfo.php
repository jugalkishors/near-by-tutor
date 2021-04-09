<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body bgcolor="71A0F4">
<center>
<?php
session_start();
if(isset($_SESSION["uid"]))
{
	?>
<h2><u>TEACHER DASHBOARD</u></h2>
<?php
?>
<p align="right">Hello, <?php echo $_SESSION["uid"]; ?></p>
<?php 
 $sid=$_SESSION["sid"]; 
}
else
	echo "You are not login";
?>
<p align="right"><a href="logout.php">Logout</a></p>

<p><a href="slist.php"> Student Info Sheet</a></p>
<p><a href="searching.php"> Student Update Info</a></p>
<hr></hr>

<?php 
 $stin=$_GET['stin']; 
$tcin=$_GET['tcin'];
?>
<?php
 $con = mysqli_connect('localhost','root','','nbm');
 $qry="SELECT * FROM `student` WHERE id='$stin'";
 $run=mysqli_query($con,$qry);
 $data=mysqli_fetch_assoc($run);
?>



<head>
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

</head>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">STUDENT</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td><?php echo $data['name']; ?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $data['email']; ?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $data['dob']; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $data['gender']; ?></td>
                      </tr>
                        <tr>
                        <td>Contact:</td>
                        <td><?php echo $data['contact']; ?></td>
                      </tr>
                      <tr>
                        <td>City Pincode:</td>
                        <td><?php echo $data['pincode']; ?></td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="delete_id.php?stin=<?php echo $stin; ?>&tcin=<?php echo $tcin; ?>" class="btn btn-primary">Cancel Request</a>
                 <a href="re_accept.php?email=<?php echo $data['email']; ?>&uid=<?php echo $stin; ?>&sid=<?php echo $sid; ?>" class="btn btn-primary">Accept Request</a>
                </div>
              </div>
            </div>
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