<?php
  require ("db.php");  

	$seedapplyid =$_REQUEST['seedapplyid'];
                mysqli_query($conn,"UPDATE applyseed 
                            SET status = 'Approved' 
                            WHERE seedapplyid = '$seedapplyid'") or die(mysql_error());
							echo "<script>window.location.href='approve_seeds.php'</script>";
				echo "Succesfully Aproved";
            
            
            ?>
            