<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:adminlogin.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE adminid ='$id'");
	$test = mysqli_fetch_array($result);
?>

<?php
//start validation code
?>
<script>
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	function getContract(strURL) {		
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('boxdiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
 
 <link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>
<script type="text/javascript" language="JavaScript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine('attach');
		});
	</script>
<script>
$(function() {
$( "#selectable" ).selectable();
});

</script>
<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine('attach');
		});
	</script>
	
<?php
//end validation
?>	




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kenya Seed Company</title>



<link rel="stylesheet" href="jquery-ui/development/themes/base/jquery.ui.all.css">	
	<script src="jquery-ui/development/jquery-1.5.1.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.core.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.widget.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="jquery-ui/development/demos/demos.css">	
	

<link rel="stylesheet" href="jquery-ui/development/themes/base/jquery.ui.all.css">	
	<script src="jquery-ui/development/jquery-1.5.1.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.core.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.widget.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.datepicker.js"></script>
		
<link href="css/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
<link href="abc css.css" rel="stylesheet" type="text/css" />
<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			dateFormat: 'yy-mm-dd',
			changeYear: true,
			showButtonPanel: true
		});
		$( "#date" ).datepicker({		 
			changeMonth: true,
			dateFormat: 'yy-mm-dd',
			changeYear: true,
			showButtonPanel: true
		});
	});	
	</script>
	
</head>
<?php
//start validation code
?>
<script>
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	function getContract(strURL) {		
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('boxdiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
 
 <link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>
<script type="text/javascript" language="JavaScript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine('attach');
		});
	</script>
<script>
$(function() {
$( "#selectable" ).selectable();
});

</script>
<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine('attach');
		});
	</script>
	
<?php
//end validation
?>	


<!DOCTYPE html>
<html lang="en">
<head>
    <title>IFFCO Admin Portal</title>
	<?php include('core_css.php') ?>
</head><!--/head-->	

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu4').addClass('active');}) ;</script>
	<aside class="col-sm-3 sidebar">

 <nav>
	<br><br>
   <h3><a >Messages Section</a></h3>
   <nav>
    <ul  role="tablist" id="accordion" class="panel-group">
	  <li><a href = "sent_items.php"><img src = "images/sentitems.gif" border = "0" /></a></li>
      <li><a href = "inbox.php"><img src = "images/inbox.gif" border = "0" /></a></li>
      <li><a href = "com_mes.php"><img src = "images/compose.gif" border = "0" /></a></li>
	  </ul>
	  </nav>
		</aside>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;width:600px; border: solid 1px #333333; " >
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="com_mes.php">Compose Message</a></h2></div>
			<div style = "margin:30px;text-align:center;">
			
			<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>" id="formID" enctype="multipart/form-data">

				<?php
									
				if (isset($_POST['save']))
					{	   
					include 'db.php';
									$id =$_SESSION['userid'];
									$to=$_POST['to'];
									$subject=$_POST['subject'] ;
									$message=$_POST['message'] ;
									$date = Date('Y/M/d');						
						 mysqli_query($conn,"INSERT INTO `message`
				(frm, t, subject, message, date, status) 
				VALUES ('$id','$to','$subject','$message','$date','unread')") or die(mysqli_error($conn));  
					$msg= "<br><center><font color= 'red' size='3'>Your Message has been sent..</center></font>";			
					}
							   
				?>
				
				<h2>Message Farmer</h2> <br>
				<label>Select Farmer</label>
				<select type="text" class="validate[required] text-input" id="req" name="to" tabindex="10" style="width:230px" class="dept" >
				<?php
					$result = mysqli_query($conn,"SELECT * FROM farmer ORDER BY farmerid");
					while ($row = mysqli_fetch_assoc($result))
						printf("<option value='%s'>%s %s</option>",$row['farmerid'],$row['firstname'],$row['lastname']);
				?>
				</select>
				<br><br>
				<label>Subject</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" style="width:222px;" class="validate[required] text-input" id="req" name="subject" class="style1" value=""/>
				<br><br><br>
				<center>
				<label>Message</label>
				<textarea name="message" rows="10"  cols="40"   `class="validate[required] text-input" id="req"></textarea>
					</center>
					<br><br>
				<input type="submit" name="save" id="save" value="Send" tabindex="19"/>
				<input type="reset" value="Reset">
				<input type="hidden" name="insert" value="" />
				
			</form>
			<div  id='viewmsg'><?php if(isset($msg)) echo $msg; ?></div>
			
			</div>
        </div>
		</br></br><br>
     </div>
	<?php include('farmer_footer.php')?>
	<?php include('core_scripts.php')?>
</body>
</html>