<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}
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

<?php
if (isset($_POST['next']))
	{	   
	include 'db.php';
	$id =$_SESSION['userid'];
	$contract= $_POST['contract'];
	$landsize= $_POST['landsize'];
	$location= $_POST['location'];
	$previouscrop= $_POST['previouscrop'];
	$distance= $_POST['distance'];
	$landowner= $_POST['landowner'];
	
	
		
			mysqli_query ($conn,"INSERT INTO applycontract(farmerid,contract, landsize, location, previouscrop,distance,landowner,status)
					VALUES('$id','$contract','$landsize','$location','$previouscrop','$distance','$landowner','Pending')") or die(mysqli_error($conn)); 
						$msg= "<br><center><font color= 'red' size='3'>Your file has been saved in the database..</center></font>";
					 
		
				
   }
     

	
?>

<script>
	$(window).on('beforeunload', function(){
		$("#viewmsg").html("");
	});
</script>

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header2.php')?>
	<script>$(document).ready(function(){$('#menu4').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;width:600px; border: solid 1px #333333; " >
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="apply_contracts.php">Apply for Contract</a></h2></div>
			<div style = "margin:30px;text-align:center;">
				<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>" id="formID" enctype="multipart/form-data">
						<label>Contract:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select class="validate[required] text-input" id="req" name="contract" style="width:288px" >
						<option value=''>Select Contract</option>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM seed ORDER BY seedid");
							while ($row = mysqli_fetch_assoc($result))
								printf("<option value='%s'>%s</option>",$row['hybrid'],$row['hybrid']);
						?>
						</select>
						<br><br>
						<label>Land Size(Ha):</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" class="validate[required,custom[integer]] text-input" type="text" name="landsize" style="width:288px" id="integer2" value=""/><br>
						<br>
						<label>Land location:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text"value=""  class="validate[required] text-input" id="req" name="location"  style="width:288px" class="style"/><br>
						<br>
						<label>Previous crop Planted:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" class="validate[required] text-input" id="req" name="previouscrop" style="width:288px" value=""/><br>
						<br><br>
						<label>Distance From other crop(M):</label>
						<input type="text" class="validate[required,custom[integer]] text-input" id="req" name="distance" style="width:288px" value=""/><br>
						<br><br>
						<label>Land Ownership:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="landowner" style="width:288px" >
						<option>Personal</option>
						<option>Leased</option>
						<option>Community</option>
						<option>Government</option>
						</select>
						<br><br>
						<input type="Submit" name="next" value="Submit" />
						<input type="reset" name="snextwdw" value="Reset" />
				</form>				
				<div id='viewmsg'><?php if(isset($msg)) echo $msg; ?></div>
				</div>
            </div>
			</br></br>	
         </div>
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>

