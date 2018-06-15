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
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="view_Inspections.php">Messages</a></h2></div>
			<div style = "margin:30px;text-align:center;">
				<a href = "sent_itemsf.php"><img src = "images/sentitems.gif" border = "0"></img></a>
				<br><br>
				<a href = "inboxf.php"><img src = "images/inbox.gif" border = "0"></img></a>
				<br><br>
				<a href = "com_mesf.php"><img src = "images/compose.gif" border = "0"></img></a>
				<br><br>
				<div id='viewmsg'><?php if(isset($msg)) echo $msg; ?></div>
			</div>
        </div>
		</br></br>	
        </div>
		<?php include('farmer_footer.php')?>
		<?php include('core_scripts.php')?>
</body>
</html>