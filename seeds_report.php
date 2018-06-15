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
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="seeds_report.php">Seed Approvals</a></h2></div>
			<div style = "margin:30px;text-align:center;">
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"farmer");

//$result = mysql_query("SELECT * FROM schedule.course");
$result = mysqli_query($con,"SELECT applyseed.seedapplyid, applyseed.farmerid, farmer.firstname, farmer.lastname, farmer.location, applyseed.landsize, applyseed.variety, applyseed.amount , applyseed.seedhybrid , applyseed.status
FROM farmer RIGHT JOIN applyseed ON farmer.farmerid = applyseed.farmerid WHERE applyseed.farmerid = '$id'");
	
	echo "<table class='table table-bordered'>
	<thead>
	<tr>
	<th width=\"7%\"><center>Seed Hybrid</center></th>
	<th width=\"7%\"><center>Variety</center></th>
	<th width=\"7%\"><center>Amount(Kg)</center></th>
	<th width=\"7%\"><center>Location</center></th>
	<th width=\"7%\"><center>Land Size(Ha)</center></th>
	<th width=\"7%\"><center>Status</center></th>
	</tr>
	</thead>
	<tbody>";
	
	while($row = mysqli_fetch_array($result))
  	{
				
				
				$seedapplyid = $row['seedapplyid'];	
				$seedhybrid= $row['seedhybrid'];
				$variety= $row['variety'];
				$amount = $row['amount'];		
                $location= $row['location'];
				$landsize= $row['landsize'];
				$status= $row['status'];
				
				
	?>
	<td width="7%"><?php echo $seedhybrid; ?></td>
	<td width="7%"><?php echo $variety; ?></td>
	<td width="7%"><?php echo $amount; ?></td>
	<td width="7%"><?php echo $location; ?></td>
	<td width="7%"><?php echo $landsize; ?></td>
	<td width="7%"><?php echo $status; ?></td>
	</tr>
<?php } ?>	
</div></table>

<br > 
<br >
				<div id='viewmsg'><?php if(isset($msg)) echo $msg; ?></div>
				</div>
            </div>
			</br></br>	
         </div>
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>
