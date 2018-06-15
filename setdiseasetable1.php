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
		height: 500px;
        width: 800px;
        margin: 0 auto;
    }
</style>
<?php
	require("db.php");
	if($_POST){
		$species=$_POST['Species_Name'];
		$disease=$_POST['Disease_Name'];
		
		if($species=="All" && $disease!="All"){
			$sql="select * from disease where Disease_Name='$disease'";
		}
		else if($species!="All" && $disease=="All"){
			$sql="select * from disease where Species_Name='$species'";
		}
		else if($species!="All" && $disease!="All"){
			$sql="select * from disease where Species_Name='$species' and Disease_Name='$disease'";
		}
		else {
			$sql="select * from disease";
		}
		if(isset($sql)){
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