<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 340,
        "scrollX": true
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
	
	if($_POST){
			$state=$_POST['StateCD'];
			
			require("db.php");
			if($state=="All"){
				$sql="select LabName as 'Lab Name',statenm as State,districtnm as District,blockNameEng as Block,Town_Village_Name as 'Town/Village',Mobile,MNTF as 'MicroNutrient Testing Facility',BTF as 'Boron Testing Facility',STF as 'Sulphur Testing Facility',Static_Mobile as 'Static/Mobile' from soiltestinglabs order by LabName";
			}
			else if($state!=""){
				$sql="select LabName as 'Lab Name',statenm as State,districtnm as District,blockNameEng as Block,Town_Village_Name as 'Town/Village',Mobile,MNTF as 'MicroNutrient Testing Facility',BTF as 'Boron Testing Facility',STF as 'Sulphur Testing Facility',Static_Mobile as 'Static/Mobile' from soiltestinglabs where StateCD=$state order by LabName";
			}
			else if($state==""){$sql=NULL;}
			if(isset($state)){
				$res=mysqli_query($conn,$sql);
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