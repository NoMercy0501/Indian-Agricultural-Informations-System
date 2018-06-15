<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:adminlogin.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE adminid ='$id'");
	$result1 = mysqli_query($conn,"SELECT * FROM farmer ORDER BY farmerid");
	$test = mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Update Messages</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<?php include('core_css.php') ?>
		
</head>

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu4').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:750px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:750px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Messages</font></h1></div>
			<br><br>
			<div style = "margin:30px;text-align:center;">
				<a href = "sent_items.php"><img src = "images/sentitems.gif" border = "0"></img></a>
				<br><br>
				<a href = "inbox.php"><img src = "images/inbox.gif" border = "0"></img></a>
				<br><br>
				<a href = "com_mes.php"><img src = "images/compose.gif" border = "0"></img></a>
				<br><br>
			<br>
			</div>
		</div>	
      </div>
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>