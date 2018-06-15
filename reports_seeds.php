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
	<title>Seed Reports</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<?php include('core_css.php') ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#status").change(function(){
				$.ajax({
					url: 'seed_results.php',
					type: 'post',
					data: $("form").serialize(),
					success: function(res){
						$("#results").html(res);
					}
				});
			});
		});
	</script>
</head>

<body class="homepage" style="background-color:lightgrey;">
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu6').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:700px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:700px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Seed Reports</font></h1></div>
				 <div style = "margin:30px;text-align:center;">
				
				<form action="seednext.php" method="post">
                   <br><br>
				   <label>Choose Seed</label>&nbsp;&nbsp;
						<select class="validate[required] text-input" id="req" name="seed" style="width:300px" >
						<option value="">-- SELECT OPTION --</option>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM seed ORDER BY seedid");
							while($test=mysqli_fetch_array($result)){
									printf("<option value='%s'>(%s) %s</option>",$test['hybrid'],$test['seed'], $test['hybrid']);
								}
							?>
							</select>
							<br><br>
						<label>Choose Status</label>
						<select id="status" name="status" style="width:300px" >
						<option value="">-- SELECT OPTION --</option>
						<option value="Approved" >Approved</option>
						<option value="Rejected">Rejected</option>
						<option value="Pending">Pending</option>
						</select>
						<br><br>
					<div id="results"></div>
				</form>				
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset($msg)) echo $msg;?></div>
			</div>
		</div>
      </div>
	
     <?php include('farmer_footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>
