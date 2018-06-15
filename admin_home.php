<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:adminlogin.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE adminid ='$id'");
	$test = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <?php include("core_css.php");?>
</head>

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu1').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:1000px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:1000px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Welcome <?php echo $test['firstname'] . " " . $test['lastname']; ?>!</font></h1></div>
			<div style = "width:300px;text-align:center;">
				
				<nav>

				   <h3><a id="prod" href="#">Go To:</a></h3>

				   <ul  role="tablist" id="accordion" class="panel-group">
						 <li class="panel"><a aria-controls="collapseTwo" aria-expanded="false" href="#MANUFACTURED" data-parent="#accordion" data-toggle="collapse" class="collapsed" role="button">Add</a>
							 <ul role="tabpanel" class="panel-collapse collapse " id="MANUFACTURED">
								 <li><a href="fertiliserdealers.php">Seeds</a></li>
								 <li><a href="fertiliserdealers.php">Fertilizers</a></li>
							 </ul>
						 </li>
						 <li class="panel"><a aria-controls="collapseThree" aria-expanded="false" href="#PL" data-parent="#accordion" data-toggle="collapse" class="collapsed" role="button">Approve</a>
							 <ul role="tabpanel" class="panel-collapse collapse " id="PL">
								<li><a id="prod10"  href="pesticidereport.php">Contracts</a></li>
								 <li><a id="prod4"  href="pesticidedealers.php">Seeds</a></li>
								 <li><a id="prod5"  href="pesticidedodont.php">Fertilizers</a></li>
							 </ul>
						 </li>
						 <li class="panel"><a aria-controls="collapseThree" aria-expanded="false" href="#Ab" data-parent="#accordion" data-toggle="collapse" class="collapsed" role="button">Update</a>
							 <ul role="tabpanel" class="panel-collapse collapse " id="Ab">
								<li><a id="prod10"  href="pesticidereport.php">Trainings</a></li>
								 <li><a id="prod4"  href="pesticidedealers.php">Inspections</a></li>
								 <li><a id="prod5"  href="pesticidedodont.php">Messages</a></li>
							 </ul>
						 </li>
						 <li class="panel"><a aria-controls="collapseFour" aria-expanded="false" href="#Cd" data-parent="#accordion" data-toggle="collapse" class="collapsed" role="button">View Reports</a>
							 <ul role="tabpanel" class="panel-collapse collapse " id="Cd">
								<li><a id="prod10"  href="pesticidereport.php">Contracts</a></li>
								 <li><a id="prod4"  href="pesticidedealers.php">Seeds</a></li>
								 <li><a id="prod5"  href="pesticidedodont.php">Fertilizers</a></li>
								 <li><a id="prod5"  href="pesticidedodont.php">Farmers</a></li>
							 </ul>
						 </li>
				   </ul>

				 </nav>
			</div>
        </div>
		</br></br>	
    </div>
	
	 <?php
		include("footer.php");
		include("core_scripts.php");
	 ?>
</body>
</html>