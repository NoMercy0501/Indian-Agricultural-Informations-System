<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Farmer Sign Up</title>
	
	<!-- core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

<?php
$error="";
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	                $firstname=$_POST['firstname'] ;
					$lastname= $_POST['lastname'] ;				
					$idno=$_POST['idno'] ;
				
					$county=$_POST['county'] ;
					$location=$_POST['location'] ;
					$mobile=$_POST['mobile'] ;
					$address=$_POST['address'] ;
					$email=$_POST['email'] ;
					$lmark=$_POST['lmark'] ;
					$centre=$_POST['centre'] ;
					$gender=$_POST['gender'] ;
					$bdate=$_POST['bdate'] ;
					$occupation=$_POST['occupation'] ;			
					$username=$_POST['username'] ;
					$password=$_POST['password'] ;
												
		 $insert = mysqli_query($conn,"INSERT INTO farmer
		 (firstname,lastname,idno,county,location,mobile,address,email,lmark,centre,gender,bdate,occupation,username,password) 
	VALUES ('$firstname','$lastname','$idno','$county','$location','$mobile','$address','$email','$lmark','$centre','$gender','$bdate','$occupation','$username','$password')"); 
									
	if($insert) {			 
		header("Location: thanks.php");
	} else {
		$error= "<br><center><font color= 'red' size='3'>Could not register. Farmer already exists</center></font>";
	}															
			
	}
											
				
				
							
	       
?>
	

	<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			dateFormat: 'yy-mm-dd',
			changeYear: true,
			showButtonPanel: true,
			minDate:2
		});
		$( "#date" ).datepicker({		 
			changeMonth: true,
			dateFormat: 'yy-mm-dd',
			changeYear: true,
			showButtonPanel: true,
			maxDate:-6570
		});
	});	
	</script>



</head><!--/head-->

<body class="homepage" style="background-color:lightgrey;">

   <?php include("header1.php"); ?>
	<script>$(document).ready(function(){$('#menu2').addClass('active');}) ;</script>
	  <div align = "center">
		<br/><br/>
         <div style = "background-color:white;width:600px;height:450px; border: solid 1px #333333;overflow:scroll;margin-bottom:35px; " >
            <div style = "background-color:#333333; color:#FFFFFF;width:600px; border: solid 1px #333333; padding:3px;text-align:center;"><b>Register | <a href="login.php">Login</a></b></div>
				
            <div style = "margin:30px;text-align:center;">
               
               <form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>" id="formID" enctype="multipart/form-data"><div class="addform"></div>
<div class="head1">
<div class="new">
New Farmer Register</div>
</div>
<div class="body1">
 <style type="text/css">
.a{
	width:400px;
    margin-left:22px;
    
	input[class=id_empno], input.id_empno{
		background:#CCC;}
	}
</style>	  
 <fieldset class="a" >
<table border="0" width="auto" cellspacing="0" bordercolorlight="#00FF66" class="addrec" align="center"> 
  <tr>
    <td width="174">First Name:</td>
    <td width="238" align="center"><input type="text" value="" class="validate[required] text-input" id="req"  required  name="firstname" class="style1" value="" tabindex="1" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '0')" {this.value = '0';}></td>
   </tr>
	<tr>
    <td width="174">Last Name: </td>
    <td width="238" align="center"><input type="text" value="" class="validate[required] text-input" id="req" required name="lastname" class="style1" value="" tabindex="1" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '0')" {this.value = '0';}></td>
    </tr>
  <tr>
    <td width="174">Addhar Card No: </td>
    <td width="238" align="center"><input value="" class="validate[required,custom[integer],maxSize[10],minSize[10]] text-input" maxlength="12" type="text" name="idno" id="integer2" required /></td>
    </tr>
  <tr>
    <td width="174">City :</td>
    <td><input type="text" name="county"></td>
	</tr>
  <tr>
    <td width="174">Location: </td>
    <td width="238" align="center"><input type="text"value=""  class="validate[required] text-input" id="req" name="location" class="style"/></td>
    </tr>
  <tr>
    <td width="174"> Tel/mobile:</td>
    <td width="238" align="center"><input value="" class="validate[required,custom[phone]] text-input" type="text" maxlength="10" name="mobile" id="telephone6" /></td>
	    </tr>
  
  <tr>
    <td>Address:</td>
    <td align="center"><input type="address" class="style1" name="address" id="lname" value="" tabindex="2"/></td>
  </tr>
   <tr>
    <td>Email:</td>
    <td align="center">
    <input value="" class="validate[required,custom[email]] text-input" type="email" name="email" id="email" />
	  </tr>
 
  <tr>
    <td>Landmark:</td>
    <td align="center"><input type="text" value="" class="validate[required] text-input" id="req" class="style1" name="lmark" value="" tabindex="3"/></td></tr>
  <tr>
    <td>Centre:</td>
    <td align="center"><input value="" class="validate[required] text-input" id="req" name="centre" class="style1" type="text" value="" tabindex="4" maxlength="14"/></td>
  </tr>
  <tr>
    <td style="width: 95px;">Gender</td>
					<td>
						<select style="width: 148px;" name="gender">
							
							<option>Female</option>
							<option>Male</option>
						</select>					
					</td>
					</tr>
  <tr>
    <td>Birthday:</td>
	<center>
    <td align="center">
		<input value="" class="validate[required,custom[date],past[]] text-input" name="bdate" type="date" min="1950" id="date" required />
		</td>  
    	</center>
  </tr>
  <tr>
    <td>Occupation:</td>
    <td align="center"><input value="" class="validate[required] text-input" id="req" type="text" class="style1" name="occupation" id="lname" value="" tabindex="2"/>
	</td>
  </tr>
  <tr>
    <td>Username</td>
    <td align="center"><input value="" class="validate[required] text-input" id="req"type="text" class="style1" name="username" value=""tabindex="11" required /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td align="center"><input class="validate[required] text-input" type="password" name="password" id="password" required /></td>
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td align="center"><input class="validate[required,equals[password]] text-input" type="password" name="password2" id="password2" required /></td>
  </tr>

<tr>
   <td colspan="2" align="center">
   
	<input type="submit" name="submit" id="save" value="submit" tabindex="19"/>
	<input type="reset" value="Reset">
	
	</td>
  </tr>
</table>
<input type="hidden" name="insert" value="" />
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