<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:login.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM farmer WHERE farmerid ='$id'");
	$test = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<head>
    <title>IFFCO Farmer Portal</title>
	<?php include('core_css.php') ?>
</head><!--/head-->	
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


<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header2.php')?>
	<script>$(document).ready(function(){$('#menu4').addClass('active');}) ;</script>
	<aside class="col-sm-3 sidebar">

 <nav>
	<br><br>
   <h3><a >Messages Section</a></h3>
   <nav>
    <ul  role="tablist" id="accordion" class="panel-group">
	  <li><a href = "sent_itemsf.php"><img src = "images/sentitems.gif" border = "0" /></a></li>
      <li><a href = "inboxf.php"><img src = "images/inbox.gif" border = "0" /></a></li>
      <li><a href = "com_mesf.php"><img src = "images/compose.gif" border = "0" /></a></li>
	  </ul>
	  </nav>
		</aside>
	
		<div align = "center">
		<br/><br/>
         <div style = "background-color:white;width:600px; border: solid 1px #333333; " >
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><h2 class="title"><a href="com_mesf.php">Compose Message</a></h2></div>
			<div style = "margin:30px;text-align:center;">
<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>" id="formID" enctype="multipart/form-data">

<?php
					
if (isset($_POST['save']))
	{	   
	include 'db.php';
	                $id =$_SESSION['userid'];
	                
			 		$subject=$_POST['subject'] ;
					$message=$_POST['message'] ;
					$to=$_POST['to'];
					$date = Date('Y/M/d');						
		 mysqli_query($conn,"INSERT INTO `message_admin`
(frm, t, subject, message, date, status) 
VALUES ('$id',$to,'$subject','$message','$date','unread')") or die(mysqli_error($conn));  
$msg ="<br><center><font color= 'red' size='3'>Your Message has been sent..</center></font>";			
	}
?>


<h2>Message Admins</h2>
	<br>
    <label>To</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select style="width:220px;" class="dropdown" id="to" name="to" onchange="get_districts();" >
		<option value="" selected>-Select-</option>
			<?php 
			$res=mysqli_query($conn,"select * from admin");
			while($test=mysqli_fetch_array($res)){
				printf("<option value='%d'>%s %s</option>",$test['adminid'],$test['firstname'],$test['lastname']);
			}
			?>
	</select>
	<br><br>
	<label>Subject</label>
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

<?php if(isset($msg)) echo $msg;?>
</div>
			</div>
        </div>
		</br></br><br>
        </div>
		<?php include('farmer_footer.php')?>
		<?php include('core_scripts.php')?>
</body>
</html>