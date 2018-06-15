<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:adminlogin.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE adminid ='$id'");
	$test = mysqli_fetch_array($result);
	$qu="SELECT crop FROM seedvariety where crop!='' and crop!='NA' GROUP BY crop ";
	$result1=mysqli_query($conn,$qu);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Approve Contracts</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<?php include('core_css.php') ?>
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
<link href="abc css.css" rel="stylesheet" type="text/css" />
</head>

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu3').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:1000px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:1000px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Approve Pending Contracts</font></h1></div>
			<div style = "margin:30px;text-align:center;">
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"farmer");

//$result = mysql_query("SELECT * FROM schedule.course");
$result = mysqli_query($con,"SELECT applycontract.contractid, applycontract.farmerid, farmer.firstname, farmer.lastname, applycontract.location, applycontract.landsize, applycontract.contract, applycontract.previouscrop , applycontract.distance, applycontract.landowner
FROM farmer RIGHT JOIN applycontract ON farmer.farmerid = applycontract.farmerid WHERE applycontract.status = 'pending'");
	if(mysqli_num_rows($result)<1) echo "No Pending Contract approvals";
	else{
	echo "<table class='table table-bordered'>
	<thead>
	<tr>
	<th >Firstname</th>
	<th >Lastname</th>
	<th >Land Location</th>
	<th >Land size(Ha)</th>
	<th >Land Ownership</th>
	<th >Contract</th>
	<th >Previous Crop</th>
	<th >Distance(other crops)(M)</th>
	<th >Approve</th>
	<th >Reject</th>
	</tr></thead><tbody>";
	$i=0;
	while($row = mysqli_fetch_array($result))
  	{			
				$contractid = $row['contractid'];	
				$farmer1 = $row['firstname'];
				$farmer = $row['lastname'];
				$location= $row['location'];
				$landsize= $row['landsize'];
				$landowner= $row['landowner'];
				$contract= $row['contract'];
				$previouscrop = $row['previouscrop'];		
                $distance = $row['distance'];
				$farmerid = $row['farmerid'];
	?>
	
	 <tr class="data-view">
	<td><?php echo $farmer1; ?></td>
	<td><?php echo $farmer; ?></td>
	<td ><?php echo $location; ?></td>
	<td ><?php echo $landsize; ?></td>
	<td ><?php echo $landowner; ?></td>
	<td ><?php echo $contract; ?></td>
	<td ><?php echo $previouscrop; ?></td>
	<td ><?php echo $distance; ?></td>
	<td width="5%"><a href="approvecontract.php?contractid=<?php echo $contractid; ?>"> <img src='images/check_03.png ' alt="approve" width="16" height="16" border="0" onClick="return confirm('Are you sure you want to Approve <?php
echo $contract;?>?')"/></a></td>
	<td width="5%"><a href="rejectcontract.php?contractid=<?php echo $contractid; ?>"> <img src='images/delete.png' alt="reject" width="16" height="16" onClick="return confirm('Are you sure you want to Reject <?php
echo $contract;?>?')" /></a></td>
</tr>
	<?php }} ?>		
</div></tbody></table>
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset($msg)) echo $msg;?></div>
			</div>
		</div>
      </div>
	
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>