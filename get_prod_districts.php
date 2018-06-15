<?php
	$conn = mysqli_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysqli_error());
	}
	echo "districtshsahahah";
	mysqli_select_db($conn,'bigdata');
		$state=$_POST['State'];
		echo $state;
		if($state!="All")
		{
			$sql1="select District_Name from state_district where State_Name='#state' group by District_Name order by District_Name";
			$result1=mysqli_query($conn,$sql1);
			echo "<option value='All'>-All-</option>";
			while($row=mysqli_fetch_array($result1)){
				printf("<option value='%s'>%s</option>",$row['District_Name'],$row['District_Name']);
			}
		}
		else{
			echo "<option value='All' selected>-All-</option>";
		}	
?>