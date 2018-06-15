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

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Approve Fertlizers</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<?php include('core_css.php') ?>
</head>

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu3').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:1000px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:1000px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Approve Pending Fertilizers</font></h1></div>
			<div style = "margin:30px;text-align:center;">
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"farmer");


//$result = mysql_query("SELECT * FROM schedule.course");
$result = mysqli_query($con,"SELECT applyfertilizer.applyfertilizerid, applyfertilizer.farmerid, farmer.firstname, farmer.lastname, farmer.location, applyfertilizer.landsize, applyfertilizer.fertilizer, applyfertilizer.amountkg , applyfertilizer.purpose
FROM farmer RIGHT JOIN applyfertilizer ON farmer.farmerid = applyfertilizer.farmerid WHERE applyfertilizer.status = 'pending'");
	if(mysqli_num_rows($result)<1) echo "No Pending Fertilizer approvals";
	else {
		echo "<table class='table table-bordered'>
	<thead>
	<tr>
	<th >Firstname</th>
	<th >Lastname</th>
	<th >Location</th>
	<th >Land size(Ha)</th>
	<th >Fertilizer</th>
	<th >Purpose</th>
	<th >Amount(Bags)</th>
	<th >Approve</th>
	<th >Reject</th>
	</tr></thead><tbody>";
	$i=0;
	while($row = mysqli_fetch_array($result))
  	{
				$applyfertilizerid = $row['applyfertilizerid'];	
				$farmer1 = $row['firstname'];
				$farmer = $row['lastname'];
				$location= $row['location'];
				$landsize= $row['landsize'];
				$fertilizer= $row['fertilizer'];
				$purpose= $row['purpose'];
				$amountkg = $row['amountkg'];		
               
				
	?>
	<td width="8%"><?php echo $farmer1; ?></td>
	<td width="8%"><?php echo $farmer; ?></td>
	<td width="7%"><?php echo $location; ?></td>
	<td width="7%"><?php echo $landsize; ?></td>
	<td width="7%"><?php echo $fertilizer; ?></td>
	<td width="7%"><?php echo $purpose; ?></td>
	<td width="7%"><?php echo $amountkg; ?></td>
	<td width="5%"><a href="approvefertcont.php?applyfertilizerid=<?php echo $applyfertilizerid; ?>"> <img src='images/check_03.png ' alt="approve" width="16" height="16" border="0" onClick="return confirm('Are you sure you want to Approve Fetilizer contract of <?php
echo $fertilizer;?>?')" /></a></td>
	<td width="5%"><a href="rejectfert.php?applyfertilizerid=<?php echo $applyfertilizerid; ?>"> <img src='images/delete.png' alt="reject" width="16" height="16" onClick="return confirm('Are you sure you want to Reject Fetilizer contract of <?php
echo $fertilizer;?>?')" /></a></td>
</tr>
	<?php }} ?>	
</div></tbody></table>

<br /> 
<br />
			</div>
		</div>
	</div><!-- end #content-->
    </div>
     
</div>
<div class="footer"></div>
</div>
</body>
</html>
