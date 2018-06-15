<?php
	require("db.php");
	$sql1="select Species_Name from disease group by Species_Name order by Species_Name";
	$sql2="select Disease_Name from disease group by Disease_Name order by Disease_Name";
	$res1=mysqli_query($conn,$sql1);
	$res2=mysqli_query($conn,$sql2);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Disease & Symptoms</title>
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<link href="css/jquery.dataTables.min.css" rel="stylesheet">
	<style>
	
	</style>
	<?php include("core_css.php"); ?>
	
</head><!--/head-->

<body class="homepage" style="background-color:white;">

    <?php include("header1.php"); ?>
	
	<script>$(document).ready(function(){$('#menu3').addClass('active');}) ;</script>
	
<section class="container">

<div class="row" style="background-color:white;">

<?php include("info-sidebar.php"); ?>
<script>$(document).ready(function(){$('#prod8').addClass('active');}) ;</script>

<section  class="col-sm-9 container-panel">

 <!--[/Banner]-->

     <!--[breadcrumb]-->

     <div class="clearfix">
  	<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Info Hub</a></li><li><a href="#">DISEASES & SYMPTOMS</a></li></ul>
 
  </div>

   <!--[/breadcrumb]-->

 <div class="clearfix data-overview">
	
	 <div class="row">
				<div class="col-md-2"></div>
				<script>
					$(document).ready(function(){
								var species=$("#species").val();
								var disease=$("#disease").val();
								$.ajax({
									type:"POST",
									url:"setdiseasetable.php",
									data:{'Species_Name':species,'Disease_Name':disease},
									success:function(html){
										$("#labtable1").html(html);
									}
								});
					});
				</script>
                <div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="state">Species&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   </label><select style="width:220px;" class="dropdown" id="species" name="species" onchange="set_table1();" >
						<option value="All" selected>-All-</option>
							<?php 
								while($test=mysqli_fetch_array($res1)){
									printf("<option value='%s'>%s</option>",$test['Species_Name'],$test['Species_Name']);
								}
							?>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="state">Disease&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   </label><select style="width:220px;" class="dropdown" id="disease" name="disease" onchange="set_table1();" >
						<option value="All" selected>-All-</option>
							<?php 
								while($test=mysqli_fetch_array($res2)){
									printf("<option value='%s'>%s</option>",$test['Disease_Name'],$test['Disease_Name']);
								}
							?>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<script type="text/javascript">
							function set_table1(){
								var species=$("#species").val();
								var disease=$("#disease").val();
								$.ajax({
									type:"POST",
									url:"setdiseasetable1.php",
									data:{'Species_Name':species,'Disease_Name':disease},
									success:function(html){
										$("#labtable1").html(html);
									}
								});
							}
						</script>
    </div>
	</br>

	</div>
	<div id="labtable1">
	</div>
 </div>
</section>




</div>



</section>

<?php
		include("footer.php");
		include("core_scripts.php");
?>

	
</body>
</html>