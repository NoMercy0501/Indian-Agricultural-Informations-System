<?php
	require("db.php");
	if($_POST){
		$state=$_POST['StateCD'];
		if($state!="All")
		{
			$sql1="select DistrictCD,districtnm from soiltestinglabs where StateCD=$state group by DistrictCD order by districtnm";
			$result1=mysqli_query($conn,$sql1);
			echo "<option value='All'>-All-</option>";
			while($row=mysqli_fetch_array($result1)){
				printf("<option value='%d'>%s</option>",$row['DistrictCD'],$row['districtnm']);
			}
		}
		else{
			echo "<option value='All' selected>-All-</option>";
		}
	}
?>