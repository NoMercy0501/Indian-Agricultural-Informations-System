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
	$fertilizer= $_POST['fertilizer'];
	$purpose= $_POST['purpose'];
	$landsize= $_POST['landsize'];
	$location= $_POST['location'];
	$amountkg= $_POST['amountkg'];
	$res=mysqli_query($conn,"select fertilizer from fertilizer where fertilizerid=$fertilizer");
	$ans=mysqli_fetch_array($res);
		
			mysqli_query ($conn,"INSERT INTO applyfertilizer(farmerid,fertilizerid,fertilizer, purpose, landsize,location, amountkg,status)
					VALUES('$id','$fertilizer','$ans[0]','$purpose','$landsize','$location','$amountkg','Pending')") or die(mysqli_error($conn)); 
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
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="apply_seeds.php">Apply for Fertilizer</a></h2></div>
			<div style = "margin:30px;text-align:center;">
				<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>" id="formID" enctype="multipart/form-data">
						<label>Fertilizer:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select class="validate[required] text-input" id="req" name="fertilizer" style="width:300px">
						<option value=''>Select Fertilizer </option>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM fertilizer ORDER BY fertilizerid");
							while ($row = mysqli_fetch_assoc($result))
								printf("<option value='%d'>%s</option>",$row['fertilizerid'],$row['fertilizer']);
						 ?>
                        </select>
						<br><br>
						<label>Purpose:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="purpose" style="width:300px" >
						<option value=''> Select Purpose</option>
						<option > Plantation</option>
						<option > Top Tressing</option>
						<option > Folier</option>
						</select>
						<br><br>
						<label>Location</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" class="validate[required,custom[integer]] text-input" type="text" name="location" style="width:300px" id="integer2" /><br><br>
						<label>Land Size(Ha):</label>&nbsp;&nbsp;&nbsp;
						<input type="text" class="validate[required,custom[integer]] text-input" type="float" name="landsize" style="width:300px" id="integer2"/><br>
						<br>
						<label>Fertilizer(Bags):</label>
						<input type="text"  type="number" name="amountkg" style="width:300px" id="integer2"/>
						<br><br>
						<input type="Submit" name="next" value="Submit" />
						<input type="reset" name="abcdfgr" value="Reset" />
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
