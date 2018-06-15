<?php
	require("db.php");
	
	if($_POST){
			$state=$_POST['StateCD'];
			$district=$_POST['DistrictCD'];
			$subdistrict=$_POST['SubDistrictCD'];
			if($state=="All" && $district=="All" && $subdistrict=="All"){
				$sql2="Select LabType from soiltestinglabs group by LabType order by LabType";
			}
			else if($state!="All" && $district=="All" && $subdistrict=="All"){
			$sql2="Select LabType from soiltestinglabs where StateCD=$state group by LabType order by LabType";
			}
			else if($district!="All" && $state!="All" && $subdistrict=="All"){
				$sql2="Select LabType from soiltestinglabs where StateCD=$state and DistrictCD=$district group by LabType order by LabType";
			}
			else if($district!="All" && $state!="All" && $subdistrict!="All"){
				$sql2="Select LabType from soiltestinglabs where StateCD=$state and DistrictCD=$district and BlockCode=$subdistrict group by LabType order by LabType";
			}
			
			if(isset($sql2)){
				
				$res2=mysqli_query($conn,$sql2);
				echo "<option value='All'>-All-</option>";
				while($row=mysqli_fetch_array($res2)){
					printf("<option value='%s'>%s</option>",$row['LabType'],$row['LabType']);
				}
			}
			else {
				echo "<option value='All' selected>-All-</option>";
			}
		}
?>