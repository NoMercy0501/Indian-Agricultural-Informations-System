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
    <title>Add Seeds</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<?php include('core_css.php') ?>

<?php
					
if (isset($_POST['submit']))
	{	   
	require('db.php');
	
	               $seed=$_POST['seed'];
			 		$variety=$_POST['variety'] ;
					$hybrid=$_POST['hybrid'] ;
					$description=$_POST['description'] ;							
		 if(mysqli_query($conn,"INSERT INTO `seed`
			(seed,variety,hybrid,description) 
			VALUES ('$seed','$variety','$hybrid','$description')")) { 
				$msg="<br><center><font color= 'red' size='3'>Your file has been saved in the database..</center></font>";
		} else {
			$msg= "<br><center><font color= 'red' size='3'>Error adding seeds in database.Please try again.</center></font>";
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
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Add New Seeds</font></h1></div>
				 <div style = "margin:30px;text-align:center;">
				 <div style = "font-size:15px; color:#337033; margin-top:10px">Select seeds to choose hybrids</div></br>
				<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>" id="formID" enctype="multipart/form-data">
					<label for="seed">Seed</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<select id="seed" required name="seed" onchange="get_hybrid();" style="width:300px" >
					<?php 
							
							while($row=mysqli_fetch_array($result1)){
								echo "<option value='$row[crop]'>$row[crop]</option>";
							}
					?>
					</select>
					</br></br>
					<label for="variety">Variety </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<select required name="variety" style="width:300px" >
						<optio	n > Highlands</option>
						<option > Medium Altitude</option>
						<option > Late Transitional</option>
					</select>
					</br></br>
					<label for="hybrid">Hybrid</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<select id="hybrid" name="hybrid" style="width:300px">
					</select>
					<script type="text/javascript">
							function get_hybrid(){
								var seed=$("#seed").val();
								$.ajax({
									type:"POST",
									url:"gethybrids.php",
									data:{'Seed':seed},
									success:function(html){
										$("#hybrid").html(html);
									}
								});
							}
					</script>
					</br></br>
					<label>Description</label>
					<input type="text" class="box" id="req" name="description" style="width:300px" value=""/><br/>
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
