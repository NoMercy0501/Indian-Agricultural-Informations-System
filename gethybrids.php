<?php
	require("db.php");
	if($_POST){
		$seed=$_POST['Seed'];
		if($seed!="")
		{
			$sql1="SELECT hybrid FROM seedvariety WHERE crop='$seed' and hybrid!='NA' and hybrid!='' ";
			$result1=mysqli_query($conn,$sql1);
			$rows=mysqli_num_rows($result1);
			if($rows<1) echo "<option value=''>No hybrid available</option>";
			else{while($row=mysqli_fetch_array($result1)){
				printf("<option value='%s'>%s</option>",$row['hybrid'],$row['hybrid']);
			}
			}
		}
		else{
			echo "<option value='' selected></option>";
		}
	}
?>