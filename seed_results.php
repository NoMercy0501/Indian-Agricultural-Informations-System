<?php
session_start();
include('db.php');
foreach($_POST as $key=>$value){
	$$key = $value;
}
$query = mysqli_query($conn,"SELECT * FROM applyseed WHERE seedhybrid='$seed' and status='$status'") or die(mysqli_error());
$result = mysqli_fetch_array($query);
$_SESSION['status'] = $status;
if($result > 0){
echo "<table class='table table-bordered' width='500'>
<thead>
<tr><th>S. No.</th><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Location</th><th>Seed Hybrid</th><th>Variety</th><th>landsize (Ha)</th><th>Amount (Kg)</th></tr></thead><tbody>";
$num = 1;
do{
	$name = mysqli_query($conn,"SELECT * FROM farmer WHERE farmerid='$result[farmerid]'");
	$getname = mysqli_fetch_array($name);
	$reportDetails[] = array('idno'=>$getname['idno'],'firstname'=>$getname['firstname'],
						'lastname'=>$getname['lastname'],'location'=>$getname['location'],
						'seedhybrid'=>$result['seedhybrid'],'variety'=>$result['Variety'],
						'landsize'=>$result['landsize'],'amount'=>$result['amount']);
	echo "<tr align='center'><td>".$num."</td>";
	echo "<td>".$getname['idno']."</td>";
	echo "<td>".$getname['firstname']."</td>";
	echo "<td>".$getname['lastname']."</td>";
	echo "<td>".$getname['location']."</td>";
	echo "<td>".$result['seedhybrid']."</td>";
	echo "<td>".$result['Variety']."</td>";
	echo "<td>".$result['landsize']."</td>";
	echo "<td>".$result['amount']."</td></tr>";
	$num ++;
}while($result = mysqli_fetch_array($query));
echo "</tbody></table>";
$_SESSION['report'] = $reportDetails;
echo "<a href='sreport.php'>Print Seed Report</a>";
}else{
	echo "NO RESULTS FOUND!";
}
?>