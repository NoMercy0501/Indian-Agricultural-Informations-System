<?php
session_start();
include('db.php');
foreach($_POST as $key=>$value){
	$$key = $value;
}
$query = mysqli_query($conn,"SELECT * FROM applyfertilizer WHERE fertilizerid='$fertilizer' and status='$status'") or die(mysqli_error());
$result = mysqli_fetch_array($query);
$_SESSION['status'] = $status;
if($result > 0){
echo "<table class='table table-bordered' width='500'><thead><tr><th>S.No.</th><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Location</th><th>Fertilizer</th><th>Purpose</th><th>Amount (Bags)</th><th>landsize(Ha)</th></tr></thead><tbody>";
$num = 1;
do{
	$name = mysqli_query($conn,"SELECT * FROM farmer WHERE farmerid='$result[farmerid]'");
	$getname = mysqli_fetch_array($name);
	$reportDetails[] = array('idno'=>$getname['idno'],'firstname'=>$getname['firstname'],
						'lastname'=>$getname['lastname'],'location'=>$getname['location'],
						'fertilizer'=>$result['fertilizer'],'purpose'=>$result['purpose'],
						'amountkg'=>$result['amountkg'],'landsize'=>$result['landsize']);
	echo "<tr align='center'><td>".$num."</td>";
	echo "<td>".$getname['idno']."</td>";
	echo "<td>".$getname['firstname']."</td>";
	echo "<td>".$getname['lastname']."</td>";
	echo "<td>".$getname['location']."</td>";
	echo "<td>".$result['fertilizer']."</td>";
	echo "<td>".$result['purpose']."</td>";
	echo "<td>".$result['amountkg']."</td>";
	echo "<td>".$result['landsize']."</td></tr>";
	$num ++;
}while($result = mysqli_fetch_array($query));
echo "</tbody></table>";
$_SESSION['report'] = $reportDetails;
echo "<a href='freport.php'>Print Report</a>";
}else{
	echo "NO RESULTS FOUND!";
}
?>