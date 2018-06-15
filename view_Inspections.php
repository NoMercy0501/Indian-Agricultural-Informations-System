<?php 
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
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="view_Inspections.php">View Inspections</a></h2></div>
			<div style = "margin:30px;text-align:center;">
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"farmer");

//$result = mysql_query("SELECT * FROM schedule.course");
$result = mysqli_query($con,"SELECT inspection.inspectionid, inspection.farmerid, farmer.firstname, farmer.lastname, farmer.location, inspection.att, inspection.onn, inspection.byy, inspection.contact
FROM farmer RIGHT JOIN inspection ON farmer.farmerid = inspection.farmerid WHERE inspection.farmerid = '$id'");

	echo "<table class='table table-bordered'>
	<caption>The following inspections will occur by the given person on the given date & time:</caption>
	<thead>
	<tr>
	<th width=\"7%\"><center>On(date)</center></th>
	<th width=\"7%\"><center>At(time)</center></th>
	<th width=\"7%\"><center>By</center></th>
	<th width=\"7%\"><center>Contact</center></th>
	</tr>
	</thead>
	<tbody>";
	$i=0;
	while($row = mysqli_fetch_array($result))
  	{
				$inspectionid = $row['inspectionid'];	
				$onn= $row['onn'];
				$att= $row['att'];
				$byy = $row['byy'];		
                $contact = $row['contact'];		
                
				
	?>
	<td width="7%"><?php echo $onn; ?></td>
	<td width="7%"><?php echo $att; ?></td>
	<td width="7%"><?php echo $byy; ?></td>
	<td width="7%"><?php echo $contact; ?></td>
	</tr>
<?php } ?>	
</div>
</tbody></table>

<br> 
<br>
				<div id='viewmsg'><?php if(isset($msg)) echo $msg; ?></div>
				</div>
            </div>
			</br></br>	
         </div>
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>
