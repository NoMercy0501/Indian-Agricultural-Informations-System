<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}
	require("db.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE adminid ='$id'");
	$test = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contracts Reports</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <?php include("core_css.php");?>


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
 
	
<?php
//end validation
?>	

</head>

<body class="homepage" style="background-color:lightgrey;" >
    <?php include('header.php')?>
	<script>$(document).ready(function(){$('#menu6').addClass('active');}) ;</script>
        <div align = "center">
		<br/><br/>
         <div style = "background-color:white;height:450px;width:750px;margin-bottom:40px; border: solid 1px #333333; " >
            <div id="farmer23" style ="background-color:#333333; color:#FFFFFF;width:750px; border: solid 1px #333333; padding:3px;text-align:center;"><h1 align="center"><font color="#337033" size="6" face="Broadway">Contract Reports</font></h1></div>
				 <div style = "margin:30px;text-align:center;">
				<form action="<?php $PHP_SELF ?>" method="post">
						
						<label>Contract:</label>
						<select class="validate[required] text-input" id="req" name="contract" style="width:300px" >
						<option value="">-- SELECT OPTION --</option>
						
						<?php
							$result = mysqli_query($conn,"SELECT * FROM seed ORDER BY seedid");
							while($test=mysqli_fetch_array($result)){
									printf("<option value='%s'>%s</option>",$test['hybrid'],$test['hybrid']);
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
										url: 'contract_results.php',
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
			
     
			</div>
		</div>
      </div>
	
     <?php include('footer.php')?>
	 <?php include('core_scripts.php')?>
</body>
</html>
