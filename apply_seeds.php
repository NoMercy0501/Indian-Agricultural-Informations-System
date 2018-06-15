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
	$landsize= $_POST['landsize'];
	$variety= $_POST['variety'];
	$seedhybrid= $_POST['seedhybrid'];
	$amount= $_POST['amount'];
	
			mysqli_query ($conn,"INSERT INTO applyseed(farmerid,landsize, variety, seedhybrid, amount,status)
					VALUES('$id','$landsize','$variety','$seedhybrid','$amount','Pending')") or die(mysqli_error($conn)); 
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
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="apply_seeds.php">Apply for Seeds</a></h2></div>
			<div style = "margin:30px;text-align:center;">
            <form name="form1" method="post" action="apply_seeds.php" id="formID" enctype="multipart/form-data">
						<label>Land Size(Ha):</label>
						<input type="text" class="validate[required,custom[integer]] text-input" type="text" name="landsize" style="width:288px" id="integer2" value=""/>
						<br><br>
						<label>Variety:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="variety" style="width:288px" >
						<option > Highlands</option>
						<option > Medium Altitude</option>
						<option > Late Transitional</option>
						</select>
						<br><br>
						<label>Seed Hybrid :</label></td>
						<select class="validate[required] text-input" id="req" name="seedhybrid" style="width:288px" >
						<option value="">Select hybrid</option>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM farmer.seed ORDER BY seedid");
							while ($row = mysqli_fetch_assoc($result)){
								printf("<option value='%s'>%s</option>",$row['hybrid'],$row['hybrid']);
							}
							?>
                        </select>
						<br><br>
						<label>Amount(kgs):</label>
						<input type="text" class="validate[required,custom[integer]] text-input" type="text" name="amount" style="width:288px" id="integer2" value=""/>
						<br><br>
						<input type="submit" name="next" value="Submit" />
						<input type="reset" name="abcdefr" value="Reset" />
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