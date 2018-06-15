<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<div style = "position:fixed;background-color:white;color:#FFFFFF;width:500px; border: solid 1px #333333; padding:3px;text-align:center;"><h4><font style="color:black;"> View Profile | </font><a href="editfarmer.php"> Edit Profile </a></h4></div>
<?php
	require("db.php");
	session_start();
	if($_SESSION['logged'] == 'true'){
	$id =$_SESSION['userid'];
	$sql="SELECT * FROM farmer WHERE farmerid ='$id'";
	$result = mysqli_query($conn,$sql);
	$test = mysqli_fetch_array($result);
	$cols=mysqli_num_fields($result);
	$fields=mysqli_fetch_fields($result);
	echo "</br></br></br>";
	echo "<table border='1px'>";
		for($i=1;$i<$cols;$i++){
			printf("<tr><td style='text-transform: uppercase;'><b>%s</b></td><td>%s</td></tr>",$fields[$i]->name,$test[$i]);
		}
	echo "</table>";
	}
	
?>