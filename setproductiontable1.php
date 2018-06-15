<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
		"scrollY": 340,
        "scrollX": true,
    } );
} );
</script>
<link href="css/jquery.dataTables.min.css" rel="stylesheet">
<style>
div.dataTables_wrapper {
		height:500px;
        width: 800px;
        margin: 0 auto;
    }
</style>
<?php
$conn = mysqli_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysqli_error());
	}
	mysqli_select_db($conn,'bigdata');
	if($_POST){
		$state=$_POST['State'];
		$district=$_POST['District'];
		$season=$_POST['Season'];
		$year=$_POST['Year'];
		$crop=$_POST['Crop'];
		echo $state.$district.$season.$year.$crop;
		if($crop=='All'){
			if($state=='All' && $district=='All' && $season=='All' && $year=='All'){
				$sql1="SELECT * FROM production";
			}
			else if($state!='All' && $district=='All' && $season=='All' && $year=='All'){
				$sql1="SELECT * FROM state_crop where State_Name='$state' ";
			}
			else if($state=='All' && $district=='All' && $season!='All' && $year=='All'){
				$sql1="select * from production where Season='$season' ";
			}
			else if($state=='All' && $district=='All' && $season=='All' && $year!='All'){
				$sql1="select * from production where Crop_Year='$year' ";
			}
			else if($state!='All' && $district!='All' && $season=='All' && $year=='All'){
				$sql1="select * from production where State_Name='$state' and District_Name='$district' ";
			}
			else if($state!='All' && $district=='All' && $season!='All' && $year=='All'){
				$sql1="select * from production where State_Name='$state' and Season='$season' ";
			}
			else if($state!='All' && $district=='All' && $season=='All' && $year!='All'){
				$sql1="select * from production where State_Name='$state' and Crop_Year='$year' ";
			}
			else if($state=='All' && $district=='All' && $season!='All' && $year!='All'){
				$sql1="select * from production where Season='$season' and Crop_Year='$year' ";
			}
			else if($state!='All' && $district!='All' && $season!='All' && $year=='All'){
				$sql1="select * from production where State_Name='$state' and District_Name='$district' and Season='$season' ";
			}
			else if($state!='All' && $district!='All' && $season=='All' && $year!='All'){
				$sql1="select * from production where State_Name='$state' and District_Name='$district' and Crop_Year='$year' ";
			}
			else if($state!='All' && $district=='All' && $season!='All' && $year!='All'){
				$sql1="select * from production where State_Name='$state' and Season='$season' and Crop_Year='$year' ";
			}
			else if($state!='All' && $district!='All' && $season!='All' && $year!='All'){
				$sql1="select * from production where State_Name='$state' and District_Name='$district' and Season='$season' and Crop_Year='$year' ";
			}
		}
		else{
			if($state=='All' && $district=='All' && $season=='All' && $year=='All'){
				$sql1="SELECT * FROM production where Crop='$crop'";
			}
			else if($state!='All' && $district=='All' && $season=='All' && $year=='All'){
				$sql1="SELECT * FROM state_crop where State_Name='$state' where Crop='$crop'";
			}
			else if($state=='All' && $district=='All' && $season!='All' && $year=='All'){
				$sql1="select * from production where Season='$season' where Crop='$crop'";
			}
			else if($state=='All' && $district=='All' && $season=='All' && $year!='All'){
				$sql1="select * from production where Crop_Year='$year' where Crop='$crop' ";
			}
			else if($state!='All' && $district!='All' && $season=='All' && $year=='All'){
				$sql1="select * from production where State_Name='$state' and District_Name='$district' where Crop='$crop'";
			}
			else if($state!='All' && $district=='All' && $season!='All' && $year=='All'){
				$sql1="select * from production where State_Name='$state' and Season='$season' where Crop='$crop' ";
			}
			else if($state!='All' && $district=='All' && $season=='All' && $year!='All'){
				$sql1="select * from production where State_Name='$state' and Crop_Year='$year' where Crop='$crop'";
			}
			else if($state=='All' && $district=='All' && $season!='All' && $year!='All'){
				$sql1="select * from production where Season='$season' and Crop_Year='$year' where Crop='$crop' ";
			}
			else if($state!='All' && $district!='All' && $season!='All' && $year=='All'){
				$sql1="select * from production where State_Name='$state' and District_Name='$district' and Season='$season' where Crop='$crop' ";
			}
			else if($state!='All' && $district!='All' && $season=='All' && $year!='All'){
				$sql1="select * from production where State_Name='$state' and District_Name='$district' and Crop_Year='$year' where Crop='$crop'";
			}
			else if($state!='All' && $district=='All' && $season!='All' && $year!='All'){
				$sql1="select * from production where State_Name='$state' and Season='$season' and Crop_Year='$year' where Crop='$crop'";
			}
			else if($state!='All' && $district!='All' && $season!='All' && $year!='All'){
				$sql1="select * from production where State_Name='$state' and District_Name='$district' and Season='$season' and Crop_Year='$year' where Crop='$crop'";
			}

		}
			if(isset($sql1)){
				$res=mysqli_query($conn,$sql1);
				$cols=mysqli_num_fields($res);
				$fields=mysqli_fetch_fields($res);
				
				echo '<table id="example" class="table table-bordered display nowrap" style="width:100%">';
				echo "<thead><tr>";
				for($i=0;$i<$cols;$i++){	
					printf("<th>%s</th>",$fields[$i]->name);
				}
				echo "</tr></thead>";
				echo "<tbody>";
				while($row=mysqli_fetch_row($res)){
					echo "<tr>";
					for($i=0;$i<$cols;$i++){
						echo "<td>$row[$i]</td>";
					}
					echo "</tr>";
				}
				echo "</tbody>";
				echo "</table>";
			}
	}
?>