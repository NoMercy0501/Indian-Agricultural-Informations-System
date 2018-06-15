<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<div style = "position:fixed;background-color:white; color:#FFFFFF;width:500px; border: solid 1px #333333; padding:3px;text-align:center;"><h4><a href="farmer_profile.php"> View Profile</a> <font style="color:black;">|  Edit Profile</font></h4></div>
<?php
	require("db.php");
	session_start();
	if($_SESSION['logged'] == 'true'){
		$id =$_SESSION['userid'];
		if(isset($_POST['submit'])){
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
			
			$sql="UPDATE farmer set firstname='$firstname',lastname='$lastname',idno='$idno',county='$county',location='$location',mobile='$mobile',address='$address',email='$email',lmark='$lmark',centre='$centre',gender='$gender',bdate='$bdate',occupation='$occupation',username='$username' WHERE farmerid ='$id'";
			
			$query=mysqli_query($conn,$sql);
			if(mysqli_affected_rows($conn)==1){
				header('location:farmer_profile.php');
			}
			else{
				echo "Can't update farmer details.Please try again";
			}
		}
		else{
			$sql="SELECT * FROM farmer WHERE farmerid ='$id'";
			$result = mysqli_query($conn,$sql);
			$test = mysqli_fetch_array($result);
			$cols=mysqli_num_fields($result);
			$fields=mysqli_fetch_fields($result);
			echo "</br></br></br>";
			echo "<form action='' method='POST'>";
			echo "<table border='1'>";
				for($i=1;$i<$cols-1;$i++){
					printf("<tr><td style='text-transform: uppercase;'><b>%s</b></td><td><input type='text' value='%s' name='%s' ></td></tr>",$fields[$i]->name,$test[$i],$fields[$i]->name);
				}
			echo "</table>";
			echo "</br></br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<input type='Submit' name='submit' value='Edit Profile'/>";
			echo "</form>";
		}
	}
	
?>