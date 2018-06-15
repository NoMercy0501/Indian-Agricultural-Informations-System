<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:adminlogin.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE adminid ='$id'");
	$test = mysqli_fetch_array($result);
?>

<?php 
//Get Messages
$id = $_SESSION['userid'];

$msg = NULL;

$query = mysqli_query($conn,"SELECT * FROM message_admin WHERE status='unread' ORDER BY id DESC")or die(mysqli_error($conn));
$getinbox = mysqli_fetch_array($query);
if($getinbox > 0){
	$msg.= "<table class='table table-bordered' width='500px'><caption>Click Subject to Read Message from Farmers</caption>
	<thead><tr><th><center>S.No.</center></th><th><center>FROM</center></th><th><center>SUBJECT</center></th><th><center>DATE</center></th></tr></thead><tbody>";
	
	$num = 1;
	do{
		$msg.= "<tr><td>".$num."</td>";
		$farmer = mysqli_query($conn,"SELECT * FROM farmer WHERE farmerid='$getinbox[frm]'");
		$getfarmer = mysqli_fetch_array($farmer);
		$msg.= "<td align='center'>".$getfarmer['firstname']."&nbsp;".$getfarmer['lastname']."</td>";
		if($getinbox['status'] == "unread"){
			$msg.= "<td><b style='color:#0000ff;'><a href='read2.php?msgid=$getinbox[id]'>".$getinbox['subject']."</a></b></td>";
		}else{
		$msg.= "<td><i style='color:#0000ff;'><a href=''>".$getinbox['subject']."</a></i></td>";
		}
		$msg.= "<td>".$getinbox['date']."</td>";
		
		$num ++;
	}while($getinbox = mysqli_fetch_array($query));
	$msg.= "</tbody></table>";
	
}else{
	$msg.= "THERE ARE NO MESSAGES CURRENTLY IN YOUR INBOX!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>IFFCO Admin Portal</title>
	<?php include('core_css.php') ?>
</head><!--/head-->	

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu4').addClass('active');}) ;</script>
	<aside class="col-sm-3 sidebar">

 <nav>
	<br><br>
   <h3><a >Messages Section</a></h3>
   <nav>
    <ul  role="tablist" id="accordion" class="panel-group">
	  <li><a href = "sent_items.php"><img src = "images/sentitems.gif" border = "0" /></a></li>
      <li><a href = "inbox.php"><img src = "images/inbox.gif" border = "0" /></a></li>
      <li><a href = "com_mes.php"><img src = "images/compose.gif" border = "0" /></a></li>
	  </ul>
	  </nav>
		</aside>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;width:600px; border: solid 1px #333333; " >
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="inbox.php">Inbox</a></h2></div>
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