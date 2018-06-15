<?php 
	require ("db.php");
	session_start();
	$error = "";

	if (isset($_POST['Login'])) 
	{ 
		if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>Invalid Code!</span>";
		}else{
			$username = trim($_POST['username']);			
			$password = trim($_POST['password']);	
				
			// sending query	
			$sql="SELECT * FROM farmer WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($conn,$sql);
						   
			if (!$result) 
			{
				die("Query to show fields from table failed");
			}
									
			$numberOfRows = mysqli_num_rows($result);				
			$row = mysqli_fetch_array($result);					
				
				if ($numberOfRows == 0) 
				{
					$error= " <br><center><font color= 'red' size='3'>Invalid Username and Password !</center></font>";
				} 
				else if ($numberOfRows ==1) 
				{
					$_SESSION['is']['login']    = TRUE;
					$_SESSION['is']['username'] = $_POST['username'];
					$_SESSION['userid']=$row['farmerid'];
					$_SESSION['logged']="true";
					$session = "1";
							
				header("location:farmer_home.php");				 	
				}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Farmer Login </title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<!-- core CSS-->
    <?php include("core_css.php");?>
	
	<script type='text/javascript'>
	
	function refreshCaptcha(){
		var img = document.images['captchaimg'];
		img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
	}
</script>
</head><!--/head-->

<body class="homepage" style="background-color:lightgrey;">

    <?php include("header1.php"); ?>
	<script>$(document).ready(function(){$('#menu2').addClass('active');$('#menu2.1').addClass('active');}) ;</script>
	
	<div align = "center">
		<br/><br/>
         <div style = "background-color:white;width:600px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><b> Farmer Login</b></div>
				<h3 id="newuser"><b>New User?&nbsp;&nbsp;<a href="register.php">Sign Up!</a></b></h3>
            <div style = "margin:30px;text-align:center;">
               
               <form action = "" method = "post">
			   
                  <label for="username">User Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <input type = "text" name = "username" required class = "box"/><br /><br />
				  
                  <label for="password">Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <input type = "password" name = "password" required class = "box" /><br/>

						
						<br/>
						   
						   <table align="center" style="border:2px solid black"><tr><td><img name="captchaimg" src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'></td></tr></table>
						  <br/>
							<label for='message'>Enter Captcha</label>
							<input id="captcha_code" required name="captcha_code" type="text">
							<br>
							<?php if(isset($msg)){echo $msg;} ?>
							<br/>
							Can't see image? Click <a href='javascript: refreshCaptcha();'>Here</a> to refresh Captcha.<br/>
					<br/>
					<input type = "submit" name="Login" value = " Submit "/>
					<input type = "reset" name="ResetForm" value = " Reset "/>
					<br />
               </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
	
	
	  <?php
		include("bottomhome.php");
		include("footer.php");
		include("core_scripts.php");
	 ?>
</body>
</html>