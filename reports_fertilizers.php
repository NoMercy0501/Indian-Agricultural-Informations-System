<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:adminlogin.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE adminid ='$id'");
	$test = mysqli_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Fertilizer Reports</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<?php include('core_css.php') ?>

</head>

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu6').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:750px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:750px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Fertilizer Reports</font></h1></div>
				 <div style = "margin:30px;text-align:center;">
				<form action="<?php $PHP_SELF ?>" method="post">
                   <label>Fertilizer:</label>
						<select id="fertilizer" name="fertilizer" style="width:300px">
						<option value="">-- SELECT OPTION --</option>
						<?php
							$result1 = mysqli_query($conn,"SELECT * FROM fertilizer ORDER BY fertilizerid");
							while($test=mysqli_fetch_array($result1)){
									printf("<option value='%d'>%s</option>",$test['fertilizerid'], $test['fertilizer']);
								}
					?>
                        </select>
						<br><br>
						<label>Status:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select id="status" name="status" style="width:300px" >
						<option value="">-- SELECT OPTION --</option>
						<option value="Approved" >Approved</option>
						<option value="Rejected">Rejected</option>
						<option value="Pending">Pending</option>
						</select>
					<script type="text/javascript">
						$(document).ready(function(){
							$("#status").change(function(){
								$.ajax({
									url: 'fertilizer_results.php',
									type: 'post',
									data: $("form").serialize(),
									success: function(res){
										$("#results").html(res)
									}
								});
							});
						});
					</script>
					<br><br>
					<div id="results"></div>
				</form>				
			</div>						
<br > 
<br>
			
     


			</div>
		</div>
      </div>	
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>
