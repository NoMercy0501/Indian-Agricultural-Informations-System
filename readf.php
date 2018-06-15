<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:login.php');}
	require("db.php");
	
//Get Messages
$id = $_SESSION['userid'];
$msgid = $_REQUEST['msgid'];
$msg = NULL;

$query = mysqli_query($conn,"SELECT * FROM message_admin  WHERE id='$msgid'")or die(mysqli_error($conn));
$getmsg = mysqli_fetch_array($query);
if($getmsg > 0){
	if($getmsg['status'] == "unread"){
	$ad=mysqli_query($conn,"select * from admin where adminid='$getmsg[t]'");
	$adm=mysqli_fetch_array($ad);
	$msg.= "<table class='table table-bordered' ><tr><th style='background:#c52d2f;color:#fff;'><center>To</center></th><td>".$adm['firstname']." ".$adm['lastname']."</td></tr>";
	$msg.= "<tr><th style='background:#c52d2f;color:#fff;'><center>Subject</center></th><td>".$getmsg['subject']."</td></tr></table>";
	$msg.= "<br><br><legend>Message</legend>";
	$msg.= "<div style =' word-wrap: break-word;margin:20px;text-align:left;'>";
	$msg.= $getmsg['message'];
	$msg.= "</fieldset>";
	}else{
	$msg.= "<table class='table table-bordered'><tr><th style='background:#c52d2f;color:#fff;'><center>To</center></th><td>".$getmsg['from']."</td></tr>";
	$msg.= "<tr><th style='background:#c52d2f;color:#fff;'><center>Subject</center></th><td>".$getmsg['subject']."</td></tr></table>";
	$msg.= "<br><br><legend>Message</legend>";
	$msg.= "<div style =' word-wrap: break-word;margin:20px;text-align:left;'>";
	$msg.= $getmsg['message'];
	$msg.= "</fieldset>";
	}
}else{
	$msg.= "THE LINK TO THE SELECTED MESSAGE IN UNAVAILABLE OR BROKEN!";
}
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
	<aside class="col-sm-3 sidebar">

 <nav>
	<br><br>
   <h3><a >Messages Section</a></h3>
   <nav>
    <ul  role="tablist" id="accordion" class="panel-group">
	  <li><a href = "sent_itemsf.php"><img src = "images/sentitems.gif" border = "0" /></a></li>
      <li><a href = "inboxf.php"><img src = "images/inbox.gif" border = "0" /></a></li>
      <li><a href = "com_mesf.php"><img src = "images/compose.gif" border = "0" /></a></li>
	  </ul>
	  </nav>
		</aside>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;width:600px; border: solid 1px #333333; " >
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="sent_itemsf.php">Sent Messages</a></h2></div>
			<div style = "margin:30px;text-align:center;">
			<br><br>
				<div  id='viewmsg'><?php if(isset($msg)) echo $msg; ?></div><br><br>
				<br>
			</div>
        </div>
		</br></br><br>
        </div>
		<?php include('farmer_footer.php')?>
		<?php include('core_scripts.php')?>
</body>
</html>