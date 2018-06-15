<?php
	$conn1 = mysqli_connect('localhost', 'root', '');
	 if (!$conn1)
    {
	 die('Could not connect: ' . mysqli_error());
	}
	if($_POST){
		$state=$_POST['State'];
		$district=$_POST['District'];
		$season=$_POST['Season'];
		$year=$_POST['Year'];
		if($state=='All' && $district=='All' && $season=='All' && $year=='All'){
			$sql1="SELECT Crop FROM state_crop GROUP BY Crop order by Crop";
		}
		else if($state!='All' && $district=='All' && $season=='All' && $year=='All'){
			$sql1="SELECT Crop FROM state_crop where State_Name='$state' GROUP BY Crop order by Crop";
		}
		else if($state=='All' && $district=='All' && $season!='All' && $year=='All'){
			$sql1="select Crop from production where Season='$season' GROUP BY Crop order by Crop";
		}
		else if($state=='All' && $district=='All' && $season=='All' && $year!='All'){
			$sql1="select Crop from production where Crop_Year='$year' GROUP BY Crop order by Crop";
		}
		else if($state!='All' && $district!='All' && $season=='All' && $year=='All'){
			$sql1="select Crop from production where State_Name='$state' and District_Name='$district' GROUP BY Crop order by Crop";
		}
		else if($state!='All' && $district=='All' && $season!='All' && $year=='All'){
			$sql1="select Crop from production where State_Name='$state' and Season='$season' GROUP BY Crop order by Crop";
		}
		else if($state!='All' && $district=='All' && $season=='All' && $year!='All'){
			$sql1="select Crop from production where State_Name='$state' and Crop_Year='$year' GROUP BY Crop order by Crop";
		}
		else if($state=='All' && $district=='All' && $season!='All' && $year!='All'){
			$sql1="select Crop from production where Season='$season' and Crop_Year='$year' GROUP BY Crop order by Crop";
		}
		else if($state!='All' && $district!='All' && $season!='All' && $year=='All'){
			$sql1="select Crop from production where State_Name='$state' and District_Name='$district' and Season='$season' GROUP BY Crop order by Crop";
		}
		else if($state!='All' && $district!='All' && $season=='All' && $year!='All'){
			$sql1="select Crop from production where State_Name='$state' and District_Name='$district' and Crop_Year='$year' GROUP BY Crop order by Crop";
		}
		else if($state!='All' && $district=='All' && $season!='All' && $year!='All'){
			$sql1="select Crop from production where State_Name='$state' and Season='$season' and Crop_Year='$year' GROUP BY Crop order by Crop";
		}
		else if($state!='All' && $district!='All' && $season!='All' && $year!='All'){
			$sql1="select Crop from production where State_Name='$state' and District_Name='$district' and Season='$season' and Crop_Year='$year' GROUP BY Crop order by Crop";
		}
		if(isset($sql1)){
			$result1=mysqli_query($conn,$sql1);
			echo "<option value='All'>-All-</option>";
			while($row=mysqli_fetch_array($result1)){
				printf("<option value='%s'>%s</option>",$row['Crop'],$row['Crop']);
			}
		}
		else{
			echo "<option value='All' selected>-All-</option>";
		}
	}
?>