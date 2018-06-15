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
<title>Update Inspections</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<?php include('core_css.php') ?>



<?php
					
if (isset($_POST['save']))
	{	   
	               $farmer=$_POST['farmer'];
			 		$on=$_POST['on'] ;
					$at=$_POST['at'] ;
					$by=$_POST['by'] ;	
                    $contact=$_POST['contact'] ;					
		 mysqli_query($conn,"INSERT INTO `inspection`
(farmerid,onn,att,byy,contact) 
VALUES ('$farmer','$on','$at','$by','$contact')") or die(mysqli_error());  
	$msg= "<br><center><font color= 'red' size='3'>Your file has been saved in the database..</center></font>";			
	}
		       
?>
  
<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu4').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:750px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:750px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Update Inspections</font></h1></div>
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
						<label>On</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input style="width:230px" min=<?php echo date('Y-m-d'); ?> class="validate[custom[date],future[NOW]] text-input"  name="on" type="date" id="date"/>
						<br><br>
						<label>At(time)</label>
						<select name="at" style="width:230px" tabindex="10" class="dept" >
							<option style="width: 120px;">8:00 am</option>
							<option style="width: 120px;">9:00 am</option>
							<option style="width: 120px;">10:00 am</option>
							<option style="width: 120px;">11:00 am</option>
							<option style="width: 120px;">12:00 am</option>
							<option style="width: 120px;">01:00 pm</option>
							<option style="width: 120px;">02:00 pm</option>
							<option style="width: 120px;">03:00 pm</option>
							<option style="width: 120px;">04:00 pm</option>
							<option style="width: 120px;">05:00 pm</option>
						</select>
							<br><br>
							<label>By</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input style="width:230px" type="text" class="validate[required] text-input" id="req"name="by" class="style1" value="" tabindex="1" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '0')" {this.value = '0';}>
							<br><br>
							<label>Mobile</label>&nbsp;&nbsp;
							<input style="width:230px" id="telephone6" class="validate[required,custom[phone]] text-input" type="text" name="contact" class="style1" value="" tabindex="1" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '0')" {this.value = '0';}>
							<br><br>
						<input type="submit" name="save" id="save" value="Save" tabindex="19"/>
						<input type="reset" value="Reset"></td>
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
