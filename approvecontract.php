<?php
  require ("db.php");  
	
	$contractid =$_REQUEST['contractid'];
     
                mysqli_query($conn,"UPDATE applycontract 
                            SET status = 'Approved' 
                            WHERE contractid = '$contractid'") or die(mysqli_error());
							echo "<script>window.location.href='approve_contracts.php'</script>";
				echo "Succesfully Aproved";
            
            
            ?>
            