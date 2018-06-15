<?php
	require("db.php");
	if($_POST){
		$type=$_POST['Type'];
		if($type!="All")
		{
			$sql1="select crop from seedvariety where Type='$type' group by crop";
			$result1=mysqli_query($conn,$sql1);
			echo "<option value='All'>-All-</option>";
			while($row=mysqli_fetch_array($result1)){
				printf("<option value='%s'>%s</option>",$row['crop'],$row['crop']);
			}
		}
		else{
			echo "<option value='All' selected>-All-</option>";
		}
	}
?>