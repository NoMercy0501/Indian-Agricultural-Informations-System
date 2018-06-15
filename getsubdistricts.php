<?php
	require("db.php");
	if($_POST){
		$district=$_POST['DistrictCD'];
		$state=$_POST['StateCD'];
		if($state!="All" && $district!="All"){
			$sql1="select BlockCode,blockNameEng from soiltestinglabs where DistrictCD=$district and StateCD=$state group by BlockCode order by blockNameEng";
			$result1=mysqli_query($conn,$sql1);
			echo "<option value='All'>-All-</option>";
			while($row=mysqli_fetch_array($result1)){
				printf("<option value='%d'>%s</option>",$row['BlockCode'],$row['blockNameEng']);
			}
		}
		else{
			echo "<option value='All' selected>-All-</option>";
		}
	}
?>