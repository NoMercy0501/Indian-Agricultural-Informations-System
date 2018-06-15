<?php
session_start();
include('db.php');
foreach($_POST as $key=>$value){
	$$key = $value;
}
$query = mysqli_query($conn,"SELECT * FROM applycontract WHERE contract='$contract' and status='$status'") or die(mysqli_error());
$result = mysqli_fetch_array($query);
$_SESSION['status'] = $status;
if($result > 0){
echo "<table class='table table-bordered' width='500'><thead><tr><th>S.No.</th><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Contract</th><th>Land Size(Ha)</th><th>Location</th></tr></thead><tbody>";
$num = 1;
$reportDetails = array();
do{
	$name = mysqli_query($conn,"SELECT * FROM farmer WHERE farmerid='$result[farmerid]'");
	$getname = mysqli_fetch_assoc($name);
	
	$reportDetails[] = array('idno'=>$getname['idno'],'firstname'=>$getname['firstname'],
						'lastname'=>$getname['lastname'],'contract'=>$result['contract'],
						'landsize'=>$result['landsize'],'location'=>$result['location']);
	echo "<tr align='center'><td>".$num."</td>";
	echo "<td>".$getname['idno']."</td>";
	echo "<td>".$getname['firstname']."</td>";
	echo "<td>".$getname['lastname']."</td>";
	echo "<td>".$result['contract']."</td>";
	echo "<td>".$result['landsize']."</td>";
	echo "<td>".$result['location']."</td></tr>";
	$num ++;
}while($result = mysqli_fetch_array($query));
echo "</tbody></table>";
$_SESSION['report'] = $reportDetails;
echo '<a href="report.php">Print Contracts';
}
else{
	echo "NO RESULTS FOUND!";
}
?>