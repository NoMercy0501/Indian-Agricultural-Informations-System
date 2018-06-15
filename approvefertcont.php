<?php
  require ("db.php");  

	$applyfertilizerid =$_REQUEST['applyfertilizerid'];
                mysqli_query($conn,"UPDATE applyfertilizer 
                            SET status = 'Approved' 
                            WHERE applyfertilizerid = '$applyfertilizerid'") or die(mysql_error());
							echo "<script>window.location.href='approve_fertilizers.php'</script>";
				echo "Succesfully Aproved";
            
            
            ?>
            