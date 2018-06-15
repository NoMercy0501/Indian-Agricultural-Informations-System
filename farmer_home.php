<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');
	}
	require("db.php");
	$id =$_SESSION['userid'];
	$sql="SELECT * FROM farmer WHERE farmerid ='$id'";
	$result = mysqli_query($conn,$sql);
	$test = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>IFFCO Farmer Portal</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<?php include('core_css.php') ?>
</head><!--/head-->

<body class="homepage" style = "background-color:lightgrey;">
    
	<?php include('header2.php')?>
	<script>$(document).ready(function(){$('#menu1').addClass('active');}) ;</script>
	
	<div align = "center">
		<br/><br/>
         <div style = "background-color:white;width:700px;height:720px; border: solid 1px #333333; " >
			
			<div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:700px; border: solid 1px #333333; padding:3px;text-align:center;">
				<h1 align="center">
					<font color="#337033" size="6" face="Broadway">Welcome <?php echo $test['firstname'] . " " . $test['lastname']; ?>!</font>
				</h1>
			</div>
            
			<div style = "margin:30px;text-align:center;">
					<iframe height="610px" width="500px" src="farmer_profile.php" ></iframe>
				</div>
            </div>
			</br></br>	
         </div>
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>