<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$sql="SELECT * FROM farmer WHERE farmerid ='$id'";
	$result = mysqli_query($conn,$sql);
	$test = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buy Farm Products</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<?php include('core_css.php') ?>
</head><!--/head-->

<body class="homepage" style = "background-color:lightgrey;">
    <?php include('header2.php')?>
	<script>$(document).ready(function(){$('#menu1').addClass('active');}) ;</script>
	<div align = "center">
		<br/><br/>
         <div style = "background-color:lightgrey;width:700px; border: solid 1px #333333; " >
            <div style = "background-color:#333333; color:#FFFFFF;width:700px; border: solid 1px #333333;text-align:center;"><h2>Welcome <?php echo $test['firstname'] . " " . $test['lastname']; ?>!</h2></div>
				
            <div style = "margin:0px;text-align:center;">
					<form action="buyingprocess.php" method="POST">
					<?include("product_list.php");?>
					<input type="submit" value="Confirm & Buy">
					</form>
				</div>
            </div>
			</br></br>	
         </div>
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>