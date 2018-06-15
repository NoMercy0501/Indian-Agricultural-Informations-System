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
         <div style = "background-color:white;width:720px; border: solid 1px #333333; " >
            <div style = "background-color:#333333; color:#FFFFFF;width:720px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="contract_report.php">Contract Approvals</a></h2></div>
			<div style = "margin:30px;text-align:center;">
 

<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error($con));
  }

mysqli_select_db($con,"farmer");

//$result = mysql_query("SELECT * FROM schedule.course");
$result = mysqli_query($con,"SELECT applycontract.contractid, applycontract.farmerid, farmer.firstname, farmer.lastname, applycontract.location, applycontract.landsize, applycontract.contract, applycontract.previouscrop , applycontract.distance, applycontract.landowner, applycontract.status
FROM farmer RIGHT JOIN applycontract ON farmer.farmerid = applycontract.farmerid WHERE applycontract.farmerid = '$id'");
	
	echo "<table class='table table-bordered'>
	<thead>
	<tr>
	<th width=\"7%\"><center>Contract</center></th>
	<th width=\"7%\"><center>Land Location</center></th>
	<th width=\"7%\"><center>Land Size(Ha)</center></th>
	<th width=\"7%\"><center>Land Ownership</center></th>
	<th width=\"7%\"><center>Previous Crop</center></th>
	<th width=\"7%\"><center>Distance(other crops) (M)</center></th>
	<th width=\"7%\"><center>Status</center></th>
	</tr>
	</thead>
	<tbody>";
	
	while($row = mysqli_fetch_array($result))
  	{
				
				
				$contractid = $row['contractid'];	
				$contract= $row['contract'];
				$location= $row['location'];
				$landsize= $row['landsize'];
				$landowner= $row['landowner'];
				$previouscrop = $row['previouscrop'];		
                $distance = $row['distance'];
				$status = $row['status'];
				
				
	?>
	<td width="7%"><?php echo $contract; ?></td>
	<td width="7%"><?php echo $location; ?></td>
	<td width="7%"><?php echo $landsize; ?></td>
	<td width="7%"><?php echo $landowner; ?></td>
	<td width="7%"><?php echo $previouscrop; ?></td>
	<td width="6%"><?php echo $distance; ?></td>
	<td width="5%"><?php echo $status; ?></td>
	
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

