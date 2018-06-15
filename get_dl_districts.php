<?php
	require("db.php");
	if($_POST){
		$state=$_POST['State'];
		if($state!="All")
		{
			$sql1="select `District Name` as dn from diagnostics_lab where State_Name='$state'";
			$result1=mysqli_query($conn,$sql1);
			echo "<option value='All'>-All-</option>";
			while($row=mysqli_fetch_array($result1)){
				if($row['dn']=='') printf("<option value='%s'>%s</option>",'','Union Territory');
				else printf("<option value='%s'>%s</option>",$row['dn'],$row['dn']);
			}
		}
		else{
			echo "<option value='All' selected>-All-</option>";
		}
	}
?>