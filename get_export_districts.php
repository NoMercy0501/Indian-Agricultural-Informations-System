<?php
	require("db.php");
	if($_POST){
		$state=$_POST['State'];
		if($state!="All")
		{
			$sql1="select DISTRICT from agriexportzones where STATE='$state' group by DISTRICT order by DISTRICT";
			$result1=mysqli_query($conn,$sql1);
			echo "<option value='All'>-All-</option>";
			while($row=mysqli_fetch_array($result1)){
				printf("<option value='%s'>%s</option>",$row['DISTRICT'],$row['DISTRICT']);
			}
		}
		else{
			echo "<option value='All' selected>-All-</option>";
		}
	}
?>