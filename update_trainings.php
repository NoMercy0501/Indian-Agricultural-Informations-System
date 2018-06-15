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
<title>Update Trainings</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<?php include('core_css.php') ?>
			
</head>


<?php
					
if (isset($_POST['save']))
	{	   
	include 'db.php';
	
	               $farmer=$_POST['farmer'];
			 		$where=$_POST['where'] ;
					$from=$_POST['from'] ;
					$to=$_POST['to'] ;							
		 mysqli_query($conn,"INSERT INTO `training`
(farmerid,wher,fro,t) 
VALUES ('$farmer','$where','$from','$to')") or die(mysqli_error());  
		$msg= "<br><center><font color= 'red' size='3'>Your file has been saved in the database..</center></font>";		
	}
		       
?>

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu4').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:750px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:750px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Update Farmer Trainings</font></h1></div>
			<div style = "margin:30px;text-align:center;">
			<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>" id="formID" enctype="multipart/form-data">
			</br>
			 <label>Farmer</label>
			 <select required id='farmer' class="dropdown" name="farmer"  style="width:230px" >
			<?php
			while($test1=mysqli_fetch_array($result1)){
				printf("<option value='%d'>%s %s</option>",$test1['farmerid'],$test1['firstname'],$test1['lastname']);
			}
			?>
			</select>
			<br><br>
			<label>Where</label>
			&nbsp;
			<input type="text" class="validate[required] text-input" id="req" style="width:230px" name="where" class="style1"/>				
			<br><br>
			<label>From</label>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="from" min=<?php echo date('Y-m-d'); ?> style="width:230px" class="validate[custom[date],future[NOW]] text-input" type="date" id="date"/>
			<br><br>
			<label>To</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input min=<?php echo date('Y-m-d'); ?> style="width:230px" class="validate[custom[date],future[NOW]] text-input" type="date"  name="to" id="datepicker" id="date"/>
			<br><br>
			<input type="submit" name="save" id="save" value="Save" tabindex="19"/>
			<input type="reset" value="Reset"/>
			<input type="hidden" name="insert" value="" />
			</form>
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset($msg)) echo $msg;?></div>
			<br>
			</div>
		</div>
      </div>
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>
