<?php
	require("db.php");
	if($_POST){
		$state=$_POST['State'];
		$district=$_POST['District'];
		if($state!="All")
		{
			if($district!="All") $sql1="select PRODUCT from agriexportzones where STATE='$state' and DISTRICT='$district' group by PRODUCT order by PRODUCT";
			else $sql1="select PRODUCT from agriexportzones where STATE='$state' group by PRODUCT order by PRODUCT";
		}
		else $sql1="select PRODUCT from agriexportzones group by PRODUCT order by PRODUCT";
		
		if(isset($sql1)){
			$result1=mysqli_query($conn,$sql1);
			echo "<option value='All'>-All-</option>";
			while($row=mysqli_fetch_array($result1)){
				printf("<option value='%s'>%s</option>",$row['PRODUCT'],$row['PRODUCT']);
			}
		}
	}
?>