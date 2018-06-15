<<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:login.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM farmer WHERE farmerid ='$id'");
	$test = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>IFFCO Farmer Portal</title>
	<?php include('core_css.php') ?>
</head><!--/head-->	


<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header2.php')?>
	<script>$(document).ready(function(){$('#menu4').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;width:600px; border: solid 1px #333333; " >
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="fertilizers_report.php">Fertilizer Approvals</a></h2></div>
			<div style = "margin:30px;text-align:center;">
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"farmer");

//$result = mysql_query("SELECT * FROM schedule.course");
$result = mysqli_query($con,"SELECT applyfertilizer.applyfertilizerid, applyfertilizer.farmerid, farmer.firstname, farmer.lastname, farmer.location, applyfertilizer.landsize, applyfertilizer.fertilizer, applyfertilizer.amountkg , applyfertilizer.purpose, applyfertilizer.status
FROM farmer RIGHT JOIN applyfertilizer ON farmer.farmerid = applyfertilizer.farmerid WHERE applyfertilizer.farmerid = '$id'");
	
	echo "<table class='table table-bordered'>
	<thead>
	<tr>
	<th width=\"7%\"><center>Fertilizer</center></th>
	<th width=\"7%\"><center>Purpose</center></th>
	<th width=\"7%\"><center>Amount(Bags)</center></th>
	<th width=\"7%\"><center>Location</center></th>
	<th width=\"7%\"><center>Land Size(Ha)</center></th>
	<th width=\"7%\"><center>Status</center></th>
	</tr>
	</thead>
	<tbody>";
	while($row = mysqli_fetch_array($result))
  	{			
				$applyfertilizerid = $row['applyfertilizerid'];	
				$fertilizer= $row['fertilizer'];
				$purpose= $row['purpose'];
				$amountkg = $row['amountkg'];		
                $location= $row['location'];
				$landsize= $row['landsize'];
				$status= $row['status'];
				
				
	?>
	
	<td width="7%"><?php echo $fertilizer; ?></td>
	<td width="7%"><?php echo $purpose; ?></td>
	<td width="7%"><?php echo $amountkg; ?></td>
	<td width="7%"><?php echo $location; ?></td>
	<td width="7%"><?php echo $landsize; ?></td>
	<td width="7%"><?php echo $status; ?></td>
	</tr>
<?php } ?>	
</div></tbody></table>
<br /> 
<br />
				<div id='viewmsg'><?php if(isset($msg)) echo $msg; ?></div>
				</div>
            </div>
			</br></br>	
         </div>
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>