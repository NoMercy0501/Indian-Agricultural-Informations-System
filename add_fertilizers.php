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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Fertilizers</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<?php include('core_css.php') ?>


<?php
					
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
	               $fertilizer=$_POST['fertilizer'];
			 		$supplycompany=$_POST['supplycompany'] ;
					$purpose=$_POST['purpose'] ;
					$description=$_POST['description'] ;							
		 $insert = mysqli_query($conn,"INSERT INTO `fertilizer`
(fertilizer,supplycompany,purpose,description) 
VALUES ('$fertilizer','$supplycompany','$purpose','$description')"); 
		if($insert) {
			$msg= "<br><center><font color= 'red' size='3'>Your file has been saved in the database..</center></font>";	
		} else {
			$msg= "<br><center><font color= 'red' size='3'>Could not add. Fertilizer already exists</center></font>";
		}
	}
		       
?>
</head><!--/head-->

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu2').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:600px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Add New Fertilizer</font></h1></div>
				 <div style = "margin:30px;text-align:center;">
				 
				<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>" id="formID" enctype="multipart/form-data"><div class="addform"></div>

						</br>
						<label>Fertilizer</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" type="text" class="validate[required] text-input" id="req" name="fertilizer" style="width:288px" /><br/></td>
						</br></br>
						<label>Supply Company</label>&nbsp;
						<input type="text" class="validate[required] text-input" id="req" type="text" name="supplycompany" style="width:288px"/><br/>
						</br></br>
						<label>Purpose</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="purpose" style="width:288px" >
						<option > Plantation</option>
						<option > Top Tressing</option>
						<option > Folier</option>
						</select>
						</br></br></br>
						<label>Description:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" class="validate[required] text-input" id="req" type="text" name="description" style="width:288px" /><br>
						</br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" name="submit" value="Submit" />
						<input type="reset" name="reset" value="Reset" />

				</form>
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset($msg)) echo $msg;?></div>
			</div>
		</div>
      </div>
				
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>
